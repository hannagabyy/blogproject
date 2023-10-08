<?php
include("../../conexao.php");

if(isset($_POST['submit']))
    {
        
        // print_r(('email : '.$_POST('email')));
        $email = $_POST['email'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $query = sprintf("INSERT INTO usuarios(email,usuario,senha)
        VALUES ('$email','$usuario','%s');",
        password_hash($senha,PASSWORD_DEFAULT));

        $result = mysqli_query($mysqli,$query);
        echo('Usuário cadastrado com sucesso');

        header('Location: ../../index.php');
    }
?>    