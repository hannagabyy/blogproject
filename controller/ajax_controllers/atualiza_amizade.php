<?php
require_once(__DIR__."/../../includes.php");
require_once(__DIR__."/../../protect.php");
require_once("../../Daofactory/amizade.php");

$amigo_id = filter_input(INPUT_POST, 'amigoId', FILTER_SANITIZE_NUMBER_INT);
$usuario_id = filter_var($_SESSION['id'], FILTER_SANITIZE_NUMBER_INT);

/* atualização */ 
$resultado = [
    'sucesso'=> false,
    'msg' => 'Algo deu errado, tente novamente!'
];


if(isset($amigo_id) && !empty($amigo_id)){
    $sao_amigos = Amizade::verificaAmizade($usuario_id, $amigo_id);

    /* cria nova amizade */
    if(!$sao_amigos){
        $resultado['sucesso'] = Amizade::insertAmizade($usuario_id, $amigo_id);
        $resultado['msg'] = "Amigo Adicionado!";

    /* desfaz a amizade */
    }
    else{
        $resultado['sucesso'] = Amizade::deleteAmizade($usuario_id, $amigo_id);
        $resultado['msg'] = "Amigo removido!";
    }
}
print(json_encode($resultado));