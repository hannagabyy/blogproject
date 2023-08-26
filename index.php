<?php
include('./conexao.php');
include('./controller/index.controller.php');

// if (isset($_POST['usuario']) || isset($_POST['senha'])){
//     if (strlen(($_POST['usuario']) == 0)){
//         echo('Preencha seu email');
//     }else if ($_POST['senha'] == 0){
//         echo('Preencha sua senha');
//     }else{
//         $usuario = $mysqli->real_escape_string($_POST['usuario']);
//         $senha = $mysqli->real_escape_string($_POST['senha']);
//         $sql_code = "SELECT * FROM usuarios where usuario='$usuario' and senha = '$senha'";
//         $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);

//         $quantidade = $sql_query->num_rows;
//         if ($quantidade == 1){
//             $usuario = $sql_query->fetch_assoc();
            
//             if(!isset($_SESSION)){
//                 session_start();
//             }
//             $_SESSION['id'] = $usuario['id'];
//             $_SESSION['user'] = $usuario['usuario'];
            
//             header("Location:home.php");

//         }else{
//             echo("Erro ao tentar logar ! Usuário ou senha incorretos!");
//         }
//     }
// }
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