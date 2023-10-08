<?php
if (isset($_POST['usuario']) || isset($_POST['senha'])){
    if (strlen(($_POST['usuario'])) == 0){
        echo('Preencha seu usuário!');
    }else if (strlen(($_POST['senha'])) == 0){
        echo('Preencha sua senha!');
    }else{
        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        
        $sql_code = "SELECT * FROM usuarios where usuario='$usuario' ";
        
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);

        $row = $sql_query->fetch_assoc();
        
        
        if (password_verify($senha,$row['senha'])){
    
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $row['id'];
            $_SESSION['user'] = $row['usuario'];
            
            
        header("Location:./modules/home/home.php");

        }else{
            echo("Erro ao tentar logar ! Usuário ou senha incorretos!");
        }
       
            
            
        
    }
}
?>