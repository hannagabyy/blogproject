<?php
require_once(__DIR__."/../includes.php");
require_once(__DIR__."/../protect.php");
require_once(__DIR__."/../Daofactory/usuarios.php");

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$usuario_nome = filter_input(INPUT_POST, 'usuario',  FILTER_SANITIZE_SPECIAL_CHARS);
$senha =  $_POST['senha'];
$confirmacaoDeSenha = $_POST['confirmarSenha'];

$alteracoes = [
    'email' => "",
    'usuario' => "",
    'senha' => ""
];

//validando dados recebidos
if(isset($id) && !empty($id)){
    $usuario = Usuarios::getUsuariosById($id);

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
    
    //salvando os dados editados
    Usuarios::updateUsuarios($id, $alteracoes['email'], $alteracoes['usuario'], $alteracoes['senha']);

}else{
    //alert: algo deu errado
    
}

header("Location: ./meu_perfil.php");





