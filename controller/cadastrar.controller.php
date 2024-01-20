<?php
require_once(__DIR__."/../includes.php");
require_once(__DIR__."/Daofactory/usuarios.php");

if (isset($_SESSION['id'])){//alert você já está logado!
    header("Location: ./public/home.php");
}

if(isset($_POST['submit'])){
        
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = $_POST['senha'];

    // $query = sprintf("INSERT INTO usuarios(email,usuario,senha) VALUES ('$email','$usuario','%s');",
    Usuarios::insertUsuarios($email, $usuario, password_hash($senha,PASSWORD_DEFAULT));
    
    header('Location: ../index.php');
}

?>    