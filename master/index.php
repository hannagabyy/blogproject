<?php
require_once(__DIR__."/../includes.php");
require_once(__DIR__."/../Daofactory/usuarios.php");

if(!isset($_SESSION)){
    session_start();
}
if (isset($_SESSION['id'])){//alert você já está logado
    header("Location: ./home.php");
}

$erro_msg ='';
if(isset($_POST['usuario']) && isset($_POST['senha'])){    
    if (strlen(($_POST['usuario'])) == 0){
        $erro_msg = 'Preencha seu usuário!';

    }else if (strlen(($_POST['senha'])) == 0){
        $erro_msg = 'Preencha sua senha!';

    }else{
        $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
        
        $usuarioMaster = Usuarios::getUsuarioMaster();
     
        if($usuarioMaster['usuario'] == $usuario && password_verify($senha, $usuarioMaster['senha'])){//validação da senha e do nome do usuario master :)
            $_SESSION['id'] = $usuarioMaster['id'];
            $_SESSION['user'] = $usuarioMaster['usuario'];
            $_SESSION['admin'] = true;
            header("Location: ./home.php");

        }else{          
            $erro_msg = "Erro ao tentar logar ! Usuário ou senha incorretos!";
        }          
            
    }
}

?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Master</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link rel="icon" href="\blog_project\imagens\favicon.ico" type="image/x-icon">
    </head>

    <style>
        body{
            height: 100vh;
            width: 100vw;
            background-image: url("../imagens/image-black.jpg");
        }

    </style>
    
    <body>    
        <main class="w-100 h-100 d-flex align-items-center justify-content-center">                     
            <form class="bg-white p-4 rounded shadow-lg" style="min-width: 400px!important;" method="POST">
                <h1 class="text-center mb-3 text-primary">LOGIN</h1>

                <div class="mb-3 w-50 mx-auto">
                    <label for="inputUsuario" class="form-label text-primary fs-6">Usuário</label>
                    <div class="input-group">      
                    <span class="input-group-text"><i class="fa-solid fa-circle-user" style="color: #5b5252;"></i></span>
                    <input type="text" class="form-control" name="usuario" required/>
                    </div>
                </div>

                <div class="w-50 mx-auto">
                    <label for="inputSenha" class="form-label text-primary fs-6">Senha</label>
                    <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-lock" style="color: #5b5252;"></i></span>
                    <input type="password" class="form-control" name="senha" required/>
                    </div>
                </div>
                <span><?=$erro_msg?></span>
                <div class="d-flex justify-content-center"><button type="submit" class="btn btn-primary px-4 mt-3">Entrar</button></div>
            </form>            
        </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a679630483.js" crossorigin="anonymous"></script>
    </body>
</html>