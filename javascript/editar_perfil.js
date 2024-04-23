let salvarPerfil = document.getElementById("salvarPerfil");
let fotoUsuario = document.getElementById("fotoUsuario");
let inputImage = document.getElementById("inputImage");

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
