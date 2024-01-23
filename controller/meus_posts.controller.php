<?php
require_once(__DIR__."/../includes.php");
require_once(__DIR__."/../protect.php");
require_once(__DIR__."/../Daofactory/usuarios.php");
require_once(__DIR__."/../Daofactory/post.php");

//Carrega os posts do usuário logado
$posts = Post::getPostByUsuarioId($_SESSION['id']);

$usuario_nome = $_SESSION['user'];