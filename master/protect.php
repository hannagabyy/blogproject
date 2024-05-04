<?php
if(!isset($_SESSION)){
    session_start();
}

if (!isset($_SESSION['id'])){
    header("HTTP/1.1 403 Forbidden");
    die("<div style='display:flex; align-items:center; flex-direction:column;'>você precisa estar logado para acessar está pagina!<p><a href=\"./index.php\">Entrar</a></p></div>");
}

if(!$_SESSION['admin']){
    header("HTTP/1.1 403 Forbidden");
    die("<div style='display:flex; align-items:center; flex-direction:column;'>Você não pode acessar essa aba com este usuário!.<p><a href=\"../public/home.php\">voltar</a></p></div>");
}

?>