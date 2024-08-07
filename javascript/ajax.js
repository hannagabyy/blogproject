function buscarAmigo(nomePesquisa){
    let caixaDeResultado = document.querySelector('#caixaDeResultados');

    if (nomePesquisa.length == 0) { 
        caixaDeResultado.style.display='none';
        caixaDeResultado.innerHTML = "";
        return;
    }

    const xhttp = new XMLHttpRequest();
    
    xhttp.onload = function() {
        caixaDeResultado.style.display='block';
        caixaDeResultado.innerHTML = this.responseText;
    }

    xhttp.open("POST", "../../controller/ajax_controllers/busca_amigo.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("nomePesquisa="+nomePesquisa);
}

function atualizaAmizade(icone){
    let usuarioId = icone.getAttribute('data-usuarioid');

    const xhttp = new XMLHttpRequest();

    xhttp.onload = function (){
        resultado = JSON.parse(this.responseText)

        if(resultado['sucesso'] === true){
           toastMessagem('fa-square-check', resultado['msg'], '#63E6BE');
        }
        else{
            toastMessagem('fa-triangle-exclamation',resultado['msg'],'red');
        }  
        
    } 

    xhttp.open("POST", "../../controller/ajax_controllers/atualiza_amizade.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("amigoId="+usuarioId); 

    atualizaIcone(icone);
}


function atualizaIcone(icone){
    if(icone.src.endsWith('/add-friend-icon.svg')){
        icone.src = icone.src.replace('add', 'added');

    }else if(icone.src.endsWith('/added-friend-icon.svg')){
        icone.src = icone.src.replace('added', 'add');
    }
   
}


function atualizaReacao(element){
    let num_icone = element.getAttribute('data-num_icone');
    let num_post = element.getAttribute('data-num_post');
    let num_user = element.getAttribute('data-num_user');
   
    const xhttp = new XMLHttpRequest();
    
    xhttp.onload = function() {
        let botaoReagir =  element.parentNode.parentNode.querySelector('.button-reagir');
        let icone_atual = botaoReagir.querySelector('i');
        let lista_reacoes = botaoReagir.parentNode.querySelectorAll('li');
        let resultado = JSON.parse(this.responseText);     
    
        if(resultado['sucesso'] === true){
            icone_atual.style.color = 'red';
            icone_atual.innerHTML = resultado['codEmoji'];        

            lista_reacoes.forEach(function(li){
                let key = li.getAttribute('data-num_icone')
                li.querySelector('#contador-reacao').textContent = (resultado['contagem'][key])? resultado['contagem'][key] : 0;
            }) 
        }
        else{
            toastMessagem('fa-triangle-exclamation',resultado['msg'],'red');
        }  
        
    }

    xhttp.open("POST", "/Blog_project/controller/ajax_controllers/atualiza_reacao.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("num_icone="+num_icone+"&num_post="+num_post+"&num_user="+num_user);

}

// CADASTRO DE USUARIO //

let formularioCadastrar = document.getElementById("formularioCadastrar");

if (formularioCadastrar){
    formularioCadastrar.addEventListener('submit',function (e){
        e.preventDefault();
        const xhttp = new XMLHttpRequest();
        let formData = new FormData(formularioCadastrar);
        let formulario = Object.fromEntries(formData);

        xhttp.onload = function() {
            let resultado = this.responseText;

            if(resultado == true){
                toastMessagem('fa-square-check','Usuário criado com sucesso, você será redirecionado!', '#63E6BE');
                setTimeout(function () {
                    window.location.href="../index.php";
                }, 2500);          
            }else{
                toastMessagem('fa-triangle-exclamation','Algo deu errado, tente novamente!','red');
            }
        }

        xhttp.open("POST", "../controller/ajax_controllers/cadastrar.controller.php");
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(`nome=${formulario['nome']}&email=${formulario['email']}&usuario=${formulario['usuario']}&senha=${formulario['senha']}`);
        
    });
}
// EDITAR PERFIL //

let salvarPerfil = document.getElementById("salvarPerfil");
let fotoUsuario = document.getElementById("fotoUsuario");
let inputImage = document.getElementById("inputImage");

if (salvarPerfil && fotoUsuario && inputImage){
    fotoUsuario.addEventListener('click',function (e){
        inputImage.click();    
    });

    inputImage.addEventListener('change',function (e){
        let imageSrc = URL.createObjectURL(inputImage.files[0]);
        fotoUsuario.src = imageSrc;
    });

    salvarPerfil.addEventListener('submit',function (e){
        e.preventDefault();
        const xhttp = new XMLHttpRequest();
        let formData = new FormData(salvarPerfil);

        xhttp.onload = function() {
            let resultado = JSON.parse(this.responseText);
    
            if(resultado['sucesso'] == true){
                toastMessagem('fa-square-check', 'Sua alterações foram salvas com sucesso!', '#63E6BE');        
            }
            else{
                toastMessagem('fa-triangle-exclamation',resultado['msg'],'red');
            }
        }

        xhttp.open("POST", "../controller/ajax_controllers/atualiza_perfil.php");
        // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(formData);
        
    });
}
