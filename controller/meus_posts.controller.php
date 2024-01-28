<?php
require_once(__DIR__."/../includes.php");
require_once(__DIR__."/../protect.php");
require_once(__DIR__."/../Daofactory/usuarios.php");
require_once(__DIR__."/../Daofactory/post.php");

//Carrega os posts do usuário logado
$posts = Post::getPostByUsuarioId($_SESSION['id']);
$usuario_nome = $_SESSION['user'];
$foto_perfil = (!is_null($_SESSION['fotoPerfil']))? $_SESSION['fotoPerfil'] : 'imagens/default-user.jpg';