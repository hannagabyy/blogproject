<?php
include(__DIR__."/../includes.php");
include(__DIR__."/../protect.php");
require_once("../Daofactory/usuarios.php");
require_once("../Daofactory/post.php");
require_once("../Daofactory/amizade.php");


//Carrega os posts dos amigos)
$amigos = Amizade::getAmizadesByUsuarioId($_SESSION['id']);

$posts_dos_amigos = [];
foreach($amigos as $amigo){
    $usuario_nome = Usuarios::getUsuariosById($amigo['usuarioId'])['usuario'];
    $posts_dos_amigos[$usuario_nome] = Post::getPostByUsuarioId($amigo['usuarioId']);
    
}

