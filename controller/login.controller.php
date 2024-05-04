<?php
require_once(__DIR__."/../includes.php");
require_once(__DIR__."/../Daofactory/usuarios.php");

if(!isset($_SESSION)){
    session_start();
}
if (isset($_SESSION['id'])){//alert você já está logado!
    header("Location: ./public/home.php");
}

$erro_login ='';
//verifica se o usuario e senha foram preenchidos
if (isset($_POST['usuario']) || isset($_POST['senha'])){
    if (strlen(($_POST['usuario'])) == 0){
        $erro_login ='Preencha seu usuário!';

    }else if (strlen(($_POST['senha'])) == 0){
        $erro_login ='Preencha sua senha!';

    }else{
        $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
        $senha = $_POST['senha'];
        
        $row = Usuarios::getUsuariosByUsuario($usuario);

        //buscar o usuario no banco e verifica se a senha está correta, após inicia a sessão
        if(isset($row) AND !empty($row)){  
            if (password_verify($senha, $row['senha'])){
                $_SESSION['id'] = $row['id'];
                $_SESSION['user'] = $row['usuario'];
                $_SESSION['admin'] = false;
              
                echo "<script>mostrarAlertaSucesso('Login efetuado com sucesso!','./public/home.php')</script>";

            }else{
                echo "<script>mostrarAlertaErro('Erro ao tentar logar ! Usuário ou senha incorretos!')</script>";
            }
        }else{          
            echo "<script>mostrarAlertaErro('Erro ao tentar logar ! Usuário ou senha incorretos!')</script>";
        }          
             
    }
}
?>