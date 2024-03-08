<?php
require_once(__DIR__."/../../includes.php");
require_once(__DIR__."/../../protect.php");
require_once(__DIR__."/../../Daofactory/usuarios.php");
require_once(__DIR__."/../../Daofactory/post.php");
require_once(__DIR__."/../../Daofactory/reacao.php");

//Carrega os posts do usuário logado
$id = filter_var($_SESSION['id'], FILTER_VALIDATE_INT);

$posts = Post::getPostByUsuarioId($id);
$usuario = Usuarios::getUsuariosById($id);
$foto_perfil = (!is_null($usuario['foto']))? $usuario['foto'] : 'imagens/default-user.jpg';

$reacoes = Reacao::getAllReacoes();
$reacoes = array_column($reacoes, 'codigo');