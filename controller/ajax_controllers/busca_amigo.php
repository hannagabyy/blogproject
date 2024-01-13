<?php
require_once(__DIR__."/../../includes.php");
require_once(__DIR__."/../../protect.php");
require_once("../../Daofactory/usuarios.php");


$nome_pesquisa = filter_input(INPUT_POST, 'nomePesquisa', FILTER_SANITIZE_SPECIAL_CHARS);

$usuarios_achados = Usuarios::buscaAmigos($nome_pesquisa);

if(!empty($usuarios_achados)){
    foreach($usuarios_achados as $usuario){
        echo "
            <div class=''>
                <span>{$usuario['usuario']}</span>
                <span>{$usuario['email']}</span>
            </div>";
    }

}else{
    echo "sem resultado!";
    
}

