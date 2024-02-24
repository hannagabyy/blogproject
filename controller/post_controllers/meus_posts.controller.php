<?php
require_once(__DIR__."/../../includes.php");
require_once(__DIR__."/../../protect.php");
require_once(__DIR__."/../../Daofactory/usuarios.php");
require_once(__DIR__."/../../Daofactory/post.php");
require_once(__DIR__."/../../Daofactory/reacao.php");

//Carrega os posts do usuário logado
$posts = Post::getPostByUsuarioId($_SESSION['id']);
$usuario_nome = $_SESSION['user'];
$foto_perfil = (!is_null($_SESSION['fotoPerfil']))? $_SESSION['fotoPerfil'] : 'imagens/default-user.jpg';

$reacoes = Reacao::getAllReacoes();
$reacoes = array_column($reacoes, 'codigo');