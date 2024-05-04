<?php
require_once(__DIR__."/../../includes.php");
require_once(__DIR__."/../../Daofactory/reacao.php");
require_once(__DIR__."/../../Daofactory/reacao.php");

$num_icone = filter_input(INPUT_POST, 'num_icone', FILTER_SANITIZE_NUMBER_INT);
$num_post = filter_input(INPUT_POST, 'num_post', FILTER_SANITIZE_NUMBER_INT);
$num_user =  filter_input(INPUT_POST, 'num_user', FILTER_SANITIZE_NUMBER_INT);

$resultado = [
    'sucesso'=> false,
    'msg' => 'Algo deu errado, tente novamente!',
    'reacao' => '',
    'codEmoji' => '',
    'contagem' => ''
];

$existeReacao = Reacao::getPostReacaoCodigoByUsuarioIdAndPostId($num_user, $num_post);

if(isset($existeReacao) && !empty($existeReacao)){
    $resultado['sucesso'] = Reacao::updatePostReacao($num_icone, $num_post, $num_user);

}else{
    $resultado['sucesso'] = Reacao::insertPostReacao($num_icone, $num_post, $num_user);
}

if ($resultado['sucesso'] == true){    
    $retorno = Reacao::getReacaoById($num_icone);

    $resultado['codEmoji'] = $retorno['codigo'];
    $resultado['reacao'] = $retorno['emoji'];

    $retorno = Reacao::getQuantidadePostReacoesByPostId($num_post);
    $resultado['contagem'] = array_column($retorno, 'quantidade', 'id');
}

print(json_encode($resultado));
?>    