<?php
include('includes.php');

?>
<!doctype html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style/index.css">
    </head>

    <body>
        <script src="https://kit.fontawesome.com/a679630483.js" crossorigin="anonymous"></script>
                       
        <main class="h-100 d-flex align-items-center justify-content-center"> 
            <form id="formularioIndex" class="bg-white p-4 w-50 h-50 rounded" method="POST">
                <h1 class="text-center mb-3 text-primary">LOGIN</h1>

                <div id="usuario" class="mb-3 w-50 mx-auto">
                    <label for="inputUsuario" class="form-label text-primary fs-6">Usuário</label>
                    <div class="input-group">      
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-circle-user" style="color: #5b5252;"></i></span>
                    <input type="text" class="form-control" name="usuario"/>
                    </div>
                </div>

                <div id="senha" class="w-50 mx-auto">
                    <label for="inputSenha" class="form-label text-primary fs-6">Senha</label>
                    <div class="input-group">
                    <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-lock" style="color: #5b5252;"></i></span>
                    <input type="password" class="form-control" name="senha">
                    </div>
                </div>
                <div class="mb-3 text-danger text-center"><?php include('./controller/index.controller.php'); ?></div>
                <div class="d-flex justify-content-center"><button type="submit" class="btn btn-primary px-4">Entrar</button></div>
            </form>
        </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>