<?php
require_once(__DIR__ . "/../../includes.php");
require_once(__DIR__ . "/../protect.php");
require_once(__DIR__."/../../Daofactory/usuarios.php");
require_once(__DIR__."/../../Daofactory/post.php");
require_once(__DIR__."/../../Daofactory/reacao.php");

$usuarios = Usuarios::getAllUsuarios();
$reacoes = Reacao::getAllReacoes();
$posts = Post::getAllPosts();

$quantidade_desejada = 5;//quantidade de reações a serem lançadas

for($i=1; $i <= $quantidade_desejada; $i++){
    $usuario_sorteado = mt_rand(0, count($usuarios)-1);
    $post_sorteado = mt_rand(0, count($posts)-1);
    $reacao_sorteada = mt_rand(0, count($reacoes)-1);

    $usuario_id = $usuarios[$usuario_sorteado]['id'];
    $reacao_id = $reacoes[$reacao_sorteada]['id'];
    $post_id = $posts[$post_sorteado]['id'];   
    
    $resultado = Reacao::insertPostReacao($reacao_id, $post_id, $usuario_id);

    if($resultado){         
        $usuario_reagiu = $usuarios[$usuario_sorteado]['usuario'];
        $reacao_ao_post = $reacoes[$reacao_sorteada]['codigo'];
        $resumo_do_post = substr_replace(strip_tags(html_entity_decode($posts[$post_sorteado]['comentario'])), '...', 47);
        $dono_do_post = Usuarios::getUsuariosById($posts[$post_sorteado]['usuarioId'])['usuario'];
   
        echo "<div class='card-master'><span class='badge rounded-pill bg-danger'>$usuario_reagiu</span> reagiu com $reacao_ao_post a '$resumo_do_post' feito por <span class='badge rounded-pill bg-success'>$dono_do_post!</span></div>";
    }else{
        echo "<div class='card-master'>Ocorreu um erro!</div>";
    }
}