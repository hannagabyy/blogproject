<?php
require_once(__DIR__."/../includes.php");
require_once(__DIR__."/../protect.php");
require_once(__DIR__."/../Daofactory/usuarios.php");


$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if(isset($id) && !empty($id)){
    $usuario = Usuarios::getUsuariosById($id);

}else{
    header("Location: ./home.php");

}
