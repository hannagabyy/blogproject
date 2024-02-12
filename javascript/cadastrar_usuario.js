let formularioCadastrar = document.getElementById("formularioCadastrar");
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