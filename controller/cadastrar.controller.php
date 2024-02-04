<?php
require_once(__DIR__."/../includes.php");
require_once(__DIR__."/Daofactory/usuarios.php");

if (isset($_SESSION['id'])){//alert você já está logado!
    header("Location: ./public/home.php");
}

//cadastra o novo usuario
if(isset($_POST['submit'])){
        
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = $_POST['senha'];

    Usuarios::insertUsuarios($email, $usuario, password_hash($senha,PASSWORD_DEFAULT));
    
    header('Location: ../index.php');
}

?>    