<?php
if(!isset($_SESSION)){
    session_start();
}

if (!isset($_SESSION['id'])){
    die("Você não pode acessar essa página porque não está logado!.<p><a href=\"/blog_project/index.php\">Entrar</a></p>");
}

if($_SESSION['admin'] && pathinfo($_SERVER['PHP_SELF'], PATHINFO_BASENAME) != "perfil.php"){
    die("Você não pode acessar essa aba com este usuário!.<p><a href=\"/blog_project/master/index.php\">Voltar</a></p>");
}

?>