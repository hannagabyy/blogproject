<?php
include(__DIR__."/../includes.php");
require_once("../Daofactory/usuarios.php");

if (isset($_SESSION['id'])){//alert você já está logado!
    header("Location: ./modulos/home.php");
}

if(isset($_POST['submit'])){
        
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // $query = sprintf("INSERT INTO usuarios(email,usuario,senha) VALUES ('$email','$usuario','%s');",
    Usuarios::insertUsuarios($email, $usuario, password_hash($senha,PASSWORD_DEFAULT));
    
    header('Location: ../index.php');
}

?>    