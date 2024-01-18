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

    xhttp.open("POST", "/Blog_project/controller/ajax_controllers/busca_amigo.php");// lembrar de deixar absoluto dps
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("nomePesquisa="+nomePesquisa);

}
