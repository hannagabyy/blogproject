<?php
require_once(__DIR__."/../../includes.php");
require_once(__DIR__."/../../protect.php");
require_once(__DIR__."/../../Daofactory/usuarios.php");
require_once(__DIR__."/../../Daofactory/post.php");
require_once(__DIR__."/../../Daofactory/reacao.php");

//Carrega os posts do usuário logado
$id = filter_var($_SESSION['id'], FILTER_VALIDATE_INT);
$userId = $id;

$posts = Post::getPostByUsuarioId($id);
$usuario = Usuarios::getUsuariosById($id);
$foto_perfil = (!is_null($usuario['foto']))? $usuario['foto'] : 'imagens/default-user.jpg';

#pegando emojis
$emojis = Reacao::getAllReacoes();
$emojis = array_column($emojis, 'codigo', 'id');


#pegando reacoes
foreach ($posts as $post){
    $reacoes[$post['id']] = Reacao::getQuantidadePostReacoesByPostId($post['id']);
    $reacoes[$post['id']] = array_column($reacoes[$post['id']], 'quantidade', 'id');
}