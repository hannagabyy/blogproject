<?php
require_once(__DIR__."/../includes.php");
require_once(__DIR__."/../protect.php");
require_once(__DIR__."/../Daofactory/usuarios.php");
require_once(__DIR__."/../Daofactory/post.php");
require_once(__DIR__."/../Daofactory/amizade.php");


//Carrega os posts dos amigos)
$usuario_id = filter_var($_SESSION['id'], FILTER_VALIDATE_INT);
$amigos = Amizade::getAmizadesByUsuarioId($usuario_id);

$posts_dos_amigos = [];
foreach($amigos as $amigo){
    $usuario_nome = Usuarios::getUsuariosById($amigo['usuarioId'])['usuario'];
    $posts_dos_amigos[$usuario_nome] = Post::getPostByUsuarioId($amigo['usuarioId']);
    
}

