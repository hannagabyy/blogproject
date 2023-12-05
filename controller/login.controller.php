<?php
include(__DIR__."/../includes.php");
require_once("./Daofactory/usuarios.php");

if (isset($_POST['usuario']) || isset($_POST['senha'])){
    if (strlen(($_POST['usuario'])) == 0){
        echo('Preencha seu usuário!');

    }else if (strlen(($_POST['senha'])) == 0){
        echo('Preencha sua senha!');

    }else{
        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        
        $row = Usuarios::getUsuariosByUsuario($usuario);
        
        if(isset($row) AND !empty($row)){           
            
            if (password_verify($senha,$row['senha'])){
        
                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['id'] = $row['id'];
                $_SESSION['user'] = $row['usuario'];
                
                header("Location: ./modulos/home.php");

            }else{
                echo("Erro ao tentar logar ! Usuário ou senha incorretos!");

            } 

        }else{
            echo("Erro ao tentar logar ! Usuário ou senha incorretos!");
                
        }          
             
    }
}
?>