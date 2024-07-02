<?php
require_once(__DIR__."/../../includes.php");
require_once(__DIR__."/../../Daofactory/usuarios.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
$senha =  filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);


//cadastra o novo usuario
$resultado = false;
if(isset($nome, $email, $usuario, $senha) && !empty($nome) && !empty($email) && !empty($usuario) && !empty($senha)){
  $resultado = Usuarios::insertUsuarios($nome, $email, $usuario, password_hash($senha,PASSWORD_DEFAULT));
}

echo $resultado;

?>    