function buscarAmigo(nomePesquisa){
    console.log('teclou');
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

    const xhttp2 = new XMLHttpRequest();

    xhttp2.open("POST", "../../controller/ajax_controllers/atualiza_amizade.php");
    xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp2.send("amigoId="+usuarioId); 

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
   
    // console.log(botaoReagir.childNodes)
    // <i class="fa-brands" style="color:Red"><?=$emoji?></i>
    // botaoregair, pega o filho e bota o innerhtml para o emoji retornado do resultado
    const xhttp = new XMLHttpRequest();
    
    xhttp.onload = function() {
        let botaoReagir =  element.parentNode.parentNode.querySelector('.button-reagir');
        let icone_atual = botaoReagir.querySelector('i')
        let resultado = JSON.parse(this.responseText);

        let novo_icone = document.createElement("i");
        novo_icone.className = "fa-brands";
        novo_icone.style.color = "red";
        novo_icone.innerHTML = resultado['emoji'];        

        if(resultado['sucesso'] === true){
            setTimeout(function () {
                icone_atual.remove();
                botaoReagir.appendChild(novo_icone)
                // debug
                console.log('Ainda precisa atualizar a página para ver a quantidade mudar');
                toastMessagem('fa-square-check', 'Ainda precisa atualizar a página para ver a quantidade mudar', '#63E6BE');
                // debug
            }, 1500);
        }
        else{
            toastMessagem('fa-square-check', resultado['msg'], '#63E6BE');
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
        xhttp.send(`email=${formulario['email']}&usuario=${formulario['usuario']}&senha=${formulario['senha']}`);
        
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
