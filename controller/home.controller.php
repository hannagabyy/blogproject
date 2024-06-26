<?php
require_once(__DIR__."/../includes.php");
require_once(__DIR__."/../protect.php");
require_once(__DIR__."/../Daofactory/usuarios.php");
require_once(__DIR__."/../Daofactory/post.php");
require_once(__DIR__."/../Daofactory/amizade.php");
require_once(__DIR__."/../Daofactory/reacao.php");


//Carrega os posts dos amigos
$usuario_id = filter_var($_SESSION['id'], FILTER_VALIDATE_INT);
$amigos = Amizade::getAmizadesByUsuarioId($usuario_id);

if(!empty($amigos)){
    $amigos_ids = array();
    foreach ($amigos as $amigo){
        array_push($amigos_ids, $amigo['usuarioId']);
    }

    $posts_dos_amigos = Post::getPostsDosAmigos($amigos_ids);
    foreach ($posts_dos_amigos as  $post_do_amigo){
        $post_do_amigo['foto'] = (!is_null($post_do_amigo['foto']))? $post_do_amigo['foto'] : 'imagens/default-user.jpg';

    }
    
    #pegando emojis
    $emojis = Reacao::getAllReacoes();
    $emojis = array_column($emojis, 'codigo', 'id');

    #pegando reacoes
    foreach ($posts_dos_amigos as $post){
        $reacoes[$post['id']] = Reacao::getQuantidadePostReacoesByPostId($post['id']);
        $reacoes[$post['id']] = array_column($reacoes[$post['id']], 'quantidade', 'id');
        $reacoes_aos_posts[$post['id']] = Reacao::getPostReacaoCodigoByUsuarioIdAndPostId($usuario_id, $post['id']);
        $reacoes_aos_posts[$post['id']] = ($reacoes_aos_posts[$post['id']])? $reacoes_aos_posts[$post['id']]['codigo'] : '&#x2661;';
    }
}