<?php
require_once(__DIR__."/../includes.php");
require_once(__DIR__."/../protect.php");
require_once(__DIR__."/../Daofactory/usuarios.php");


$id = filter_var($_SESSION['id'], FILTER_VALIDATE_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$usuario_nome = filter_input(INPUT_POST, 'usuario',  FILTER_SANITIZE_SPECIAL_CHARS);
$senha =  (isset($_POST['senha']))? $_POST['senha']: null;
$confirmacaoDeSenha = (isset($_POST['confirmarSenha']))? $_POST['confirmarSenha'] : null ;
$fotoPerfil = (isset($_FILES['fotoPerfil']))? $_FILES['fotoPerfil'] : null;

/* visualização */
if(isset($id) && !empty($id)){
    $usuario = Usuarios::getUsuariosById($id);

}else{
    header("Location: ./home.php");

}


/* atualização */ 
if($_POST){
    $alteracoes = [
        'email' => "",
        'usuario' => "",
        'senha' => "",
        'fotoPerfil' => ""
    ];

    //validando dados recebidos
    if(isset($email) && !empty($email)){
        $alteracoes['email'] = ($email != $usuario['email'])? $email : "";
    }

    if(isset($usuario_nome) && !empty($usuario_nome)){
        $alteracoes['usuario'] = ($usuario_nome != $usuario['usuario'])? $usuario_nome : "";
    }

    if((isset($senha) && !empty($senha)) && ((isset($confirmacaoDeSenha) && !empty($confirmacaoDeSenha))) ){
        if($senha == $confirmacaoDeSenha){
            $alteracoes['senha'] = (password_verify($senha, $usuario['senha']))? $senha : "";
        }
    }

    //atualização da foto de perfil
    if(!is_null($fotoPerfil) && !empty($fotoPerfil)){
        $resultado = atualiza_foto_perfil($fotoPerfil);
        
        if(!is_null($resultado['erro'])){
           //echo $resultado['erro'];

        }else{
            unlink('../'.$usuario['foto']);
            $alteracoes['fotoPerfil'] = $resultado['nomeImg'];
        }
    }
        

    //salvando os dados editados
    Usuarios::updateUsuarios($id, $alteracoes['email'], $alteracoes['usuario'], $alteracoes['senha'], $alteracoes['fotoPerfil']);

    header("Location: ./meu_perfil.php");
}






