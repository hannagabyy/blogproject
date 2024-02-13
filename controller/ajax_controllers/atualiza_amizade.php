<?php
require_once(__DIR__."/../../includes.php");
require_once(__DIR__."/../../protect.php");
require_once("../../Daofactory/amizade.php");

$amigo_id = filter_input(INPUT_POST, 'amigoId', FILTER_VALIDATE_INT);
$usuario_id = filter_var($_SESSION['id'], FILTER_VALIDATE_INT);

if(isset($amigo_id) && !empty($amigo_id)){
    $sao_amigos = Amizade::verificaAmizade($usuario_id, $amigo_id);

    /* cria nova amizade */
    if(!$sao_amigos){
        Amizade::insertAmizade($usuario_id, $amigo_id);

    /* desfaz a amizade */
    }else{
        Amizade::deleteAmizade($usuario_id, $amigo_id);

    }
}