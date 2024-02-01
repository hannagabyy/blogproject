<?php
require_once(__DIR__."/../includes.php");

if(!isset($_SESSION)){
    session_start();
}

if (!isset($_SESSION['id'])){
    die('você precisa estar logado para acessar está pagina!<p><a href="./index.php">Entrar</a></p>');
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
        <link rel="stylesheet" href=".\style\style.css">
    </head>

    <style>
        body{
            background-image: url("../imagens/image-black.jpg");
        }

        .titulo-principal{
            font-family: 'Agbalumo';
            text-shadow: 4px 2px 5px rgba(0,0,0,0.75);
        }
        
    </style> 

<body>
    <h1 class="titulo-principal text-center display-2 mt-5 text-light">ADMIN</h1>
    <main class="d-flex w-50 mt-5 mx-auto justify-content-center flex-wrap">    
        <a id="listar-usuarios"><button class="w-50 m-5">Listar todos os Usuários</button></a>
        <a id="ver-amizades"><button class="w-50 m-5">Ver todas as amizades</button></a>
        <a id="lancar-publicacoes"><button class="w-50 m-5">Lançar publicações automatizadas</button></a>
        <a id="listar-posts"><button class="w-50 m-5">Listar Todos os Posts</button></a>
    </main>

    <h2 id="titulo-resultado" class="text-center text-light mt-5 display-2" style="display: none;">resultados:</h2>
    <div id="caixa-resultado">
        
    </div>

    <script src="./javascript/home.js"></script>
</body>