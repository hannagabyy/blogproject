<?php
require_once(__DIR__."/../includes.php");
require_once(__DIR__."/../protect.php");
require_once(__DIR__."/../Daofactory/usuarios.php");
require_once(__DIR__."/../Daofactory/amizade.php");


$usuario_id = filter_var($_SESSION['id'], FILTER_VALIDATE_INT);
$amigos_encontrados = Amizade::getAmizadesByUsuarioId($usuario_id);

$amigos = [];
foreach($amigos_encontrados as $amigo_encontrado){
    $amigo = Usuarios::getUsuariosById($amigo_encontrado['usuarioId']);
    array_push($amigos, $amigo);
}

