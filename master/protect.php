<?php
if(!isset($_SESSION)){
    session_start();
}

if (!isset($_SESSION['id'])){
    die('você precisa estar logado para acessar está pagina!<p><a href="./index.php">Entrar</a></p>');
}

if(!$_SESSION['admin']){
    die("Você não pode acessar essa aba com este usuário!.<p><a href=\"../public/home.php\">voltar</a></p>");
}

?>