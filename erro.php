<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Um erro foi encontrado</title>
</head>
<body>
    <div class="not-found">
        <img class="not-found__imagem" src="./imagens/not-found.svg" alt="Imagem de página não encontrada">
        <span><?= $msg->getMessage() ?></span>
    </div>
</body>
</html>