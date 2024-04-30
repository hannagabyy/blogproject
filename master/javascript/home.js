const listarUsuarios = document.getElementById('listar-usuarios');
const verAmizades = document.getElementById('ver-amizades');
const lancarPublicacoes = document.getElementById('lancar-publicacoes');
const lancarReacoes = document.getElementById('lancar-reacoes');
const listarPosts = document.getElementById('listar-posts');
const tituloResultado = document.getElementById('titulo-resultado');
const caixaDeResultado = document.getElementById('caixa-resultado');

const xhttp = new XMLHttpRequest();

xhttp.onload = function() {
    tituloResultado.style.display='block';
    caixaDeResultado.innerHTML = this.responseText;
}

listarUsuarios.addEventListener('click', function(){
    xhttp.open("POST", "./ajax/listarUsuarios.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
});

verAmizades.addEventListener('click', function(){
    xhttp.open("POST", "./ajax/verAmizades.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
});

lancarPublicacoes.addEventListener('click', function(){
    xhttp.open("POST", "./ajax/lancarPublicacoes.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
});

lancarReacoes.addEventListener('click', function(){
    xhttp.open("POST", "./ajax/lancarReacoes.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
});

listarPosts.addEventListener('click', function(){
    xhttp.open("POST", "./ajax/listarPosts.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
});