<?php
require_once(__DIR__."/../includes.php");
require_once(__DIR__."/protect.php");

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
        <a style="position: absolute; right: 40px;" href="../logout.php"><button class="me-5">Sair</button></a>
        <main class="d-flex w-75 mt-5 mx-auto justify-content-center flex-wrap" style="max-width: 1062px!important;">    
            <a id="listar-usuarios"><button class="m-5" style="width: 170px; height: 60px">Listar todos os Usuários</button></a>
            <a id="ver-amizades"><button class="m-5" style="width: 170px; height: 60px">Ver todas as amizades</button></a>
            <a id="lancar-publicacoes"><button class="m-5" style="width: 170px; height: 60px">Lançar publicações automatizadas</button></a>
            <a id="lancar-reacoes"><button class="m-5" style="width: 170px; height: 60px">Lançar reações automatizadas</button></a>
            <a id="listar-posts"><button class="m-5" style="width: 170px; height: 60px">Listar Todos os Posts</button></a>
        </main>

        <h2 id="titulo-resultado" class="text-center text-light mt-5 display-2" style="display: none;">resultados:</h2>
        <div id="caixa-resultado">
            
        </div>

        <script src="./javascript/home.js"></script>
    </body>
</html>