<?php
if(!isset($_SESSION)){
    session_start();
}

if (!isset($_SESSION['id'])){
    header("HTTP/1.1 403 Forbidden");
    die("<div style='display:flex; align-items:center; flex-direction:column;'>Você não pode acessar essa página porque não está logado!.<p><a href=\"/blog_project/index.php\">Entrar</a></p></div>");
}

if($_SESSION['admin'] && pathinfo($_SERVER['PHP_SELF'], PATHINFO_BASENAME) != "perfil.php"){
    header("HTTP/1.1 403 Forbidden");
    die("<div style='display:flex; align-items:center; flex-direction:column;'>Você não pode acessar essa aba com este usuário!.<p><a href=\"/blog_project/master/index.php\">Voltar</a></p></div>");
}

?>