<?php
require_once(__DIR__."/../../includes.php");
require_once(__DIR__."/../../Daofactory/reacao.php");

$num_icone = filter_input(INPUT_POST, 'num_icone', FILTER_SANITIZE_NUMBER_INT);
$num_post = filter_input(INPUT_POST, 'num_post', FILTER_SANITIZE_NUMBER_INT);
$num_user =  filter_input(INPUT_POST, 'num_user', FILTER_SANITIZE_NUMBER_INT);


$existeReacao = Reacao::getPostReacaoByUsuarioIdAndPostId($num_user, $num_post);

if(isset($existeReacao) && !empty($existeReacao)){
    $resultado = Reacao::updatePostReacao($num_icone, $num_post, $num_user);
    $resultado = 'Atualizado';

}else{
    $resultado = Reacao::insertPostReacao($num_icone, $num_post, $num_user);
    $resultado = 'Criado';
}

echo $resultado;
?>    