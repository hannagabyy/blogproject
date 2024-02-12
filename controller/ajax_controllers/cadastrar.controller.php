<?php
require_once(__DIR__."/../../includes.php");
require_once(__DIR__."/../../Daofactory/usuarios.php");

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
$senha =  filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);


//cadastra o novo usuario
$resultado = false;
if(!is_null($email) && !is_null($usuario) && !is_null($senha)){
  $resultado = Usuarios::insertUsuarios($email, $usuario, password_hash($senha,PASSWORD_DEFAULT));
}

echo $resultado;

?>    