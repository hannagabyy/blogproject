<?php
include('./conexao.php');
include('./controller/index.controller.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        <h1>Entrar</h1>
        <p>
            <label for="usuario">Usuário</label>
            <input type="text" name="usuario">
        </p>

        <p>
            <label for="senha">Senha</label>
            <input type="password" name="senha">
        </p>

        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>
</body>
</html>