<?php
require_once(__DIR__."/../includes.php");
require_once(__DIR__."/../protect.php");
require_once(__DIR__."/../Daofactory/usuarios.php");


if(isset($_GET['id']) && !empty($_GET['id'])){//está buscando um usuario
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

}else{//está vendo o seu perfil
    $id = filter_var($_SESSION['id'], FILTER_VALIDATE_INT);

}


if(isset($id) && !empty($id)){
    $usuario = Usuarios::getUsuariosById($id);
    $usuario['foto'] = (!is_null($usuario['foto']))? $usuario['foto'] : 'imagens/default-user.jpg';

}else{
    header("Location: ./home.php");

}