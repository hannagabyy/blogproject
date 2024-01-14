<?php
require_once(__DIR__."/../includes.php");
require_once(__DIR__."/../protect.php");
require_once("../../Daofactory/usuarios.php");
require_once("../../Daofactory/post.php");


//Criação do post:
if(isset($_POST['editor'])) {

    $tagsPermitidas = '<p><ul><li><i><ol><h1><h2><h3><h4><strong>';
    $comentario = strip_tags($_POST['editor'], $tagsPermitidas);
    $comentario =  htmlspecialchars($comentario);

    $usuarioId = filter_var($_SESSION['id'], FILTER_VALIDATE_INT);

    Post::insertPost($comentario, $usuarioId);

   
} else{
    //alerta de erro
}

header("Location: ../home.php");