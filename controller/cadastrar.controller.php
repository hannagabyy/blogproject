<?php
include(__DIR__."/../includes.php");
require_once("../Daofactory/usuarios.php");

if(isset($_POST['submit'])){
        
    // print_r(('email : '.$_POST('email')));
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // $query = sprintf("INSERT INTO usuarios(email,usuario,senha) VALUES ('$email','$usuario','%s');",
    Usuarios::insertUsuarios($email, $usuario, password_hash($senha,PASSWORD_DEFAULT));
    
    header('Location: ../index.php');
}
?>    