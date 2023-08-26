<?php
if (isset($_POST['usuario']) || isset($_POST['senha'])){
    if (strlen(($_POST['usuario'])) == 0){
        echo('Preencha seu email!');
    }else if (strlen(($_POST['senha'])) == 0){
        echo('Preencha sua senha!');
    }else{
        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        $sql_code = "SELECT * FROM usuarios where usuario='$usuario' and senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);

        $quantidade = $sql_query->num_rows;
        if ($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();
            
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['user'] = $usuario['usuario'];
            
            header("Location:home.php");

        }else{
            echo("Erro ao tentar logar ! Usuário ou senha incorretos!");
        }
        debug($_SESSION);die;
    }
}
?>