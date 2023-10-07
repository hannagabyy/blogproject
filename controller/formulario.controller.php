<?php
include("../../conexao.php");

if(isset($_POST['submit']))
    {
        
        // print_r(('email : '.$_POST('email')));
        $email = $_POST['email'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $result = mysqli_query($mysqli, "INSERT INTO usuarios(email,usuario,senha)
        VALUES ('$email','$usuario','$senha')");
        echo('Usuário cadastrado com sucesso');

        header('Location: ../../index.php');
    }
?>    