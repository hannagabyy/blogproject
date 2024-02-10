let formularioCadastrar = document.getElementById("formularioCadastrar");
formularioCadastrar.addEventListener('submit',function (e){
    e.preventDefault();
    const xhttp = new XMLHttpRequest();
    let formData = new FormData(formularioCadastrar);
    let formulario = Object.fromEntries(formData);
   
    console.log(Object.fromEntries(formData));

    xhttp.onload = function() {
        //implementar a lógica de salvar o usuário aqui
        console.log(this.responseText);
        if(false){
            toastMessagem('fa-square-check','Usuário criado com sucesso!', '#63E6BE');
        }else{
            toastMessagem('fa-triangle-exclamation','Algo deu errado, tente novamente!','red');
        }
    }

    xhttp.open("POST", "../controller/ajax_controllers/cadastrar.controller.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`email=${formulario['email']}&usuario=${formulario['usuario']}&senha=${formulario['senha']}`);
    
})