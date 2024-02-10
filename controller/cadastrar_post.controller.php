<?php
require_once(__DIR__."/../includes.php");
require_once(__DIR__."/../protect.php");
require_once(__DIR__."/../Daofactory/usuarios.php");
require_once(__DIR__."/../Daofactory/post.php");
debug($_POST);

//Criação do post:
if(isset($_POST['editor'], $_POST['privacidade'])) {
    $privacidadeId = filter_input(INPUT_POST, 'privacidade', FILTER_VALIDATE_INT);
    
    switch($privacidadeId){
        case 1:
            $privacidade="publico";
        break;

        case 2:
            $privacidade="privado";
        break;
    }
    
    if(isset($privacidade) && !empty($privacidade)){
        $tagsPermitidas = '<p><ul><li><i><ol><h1><h2><h3><h4><strong>';
        $comentario = strip_tags($_POST['editor'], $tagsPermitidas);
        $comentario =  htmlspecialchars($comentario);

        $usuarioId = filter_var($_SESSION['id'], FILTER_VALIDATE_INT);

        $resultado = Post::insertPost($comentario, $usuarioId, $privacidade);
    }
   
} else{
    
}

if(isset($resultado)){
    // echo "inserido com sucesso";

}else{
    // echo "falhou";

}  

// header("Location: ../home.php");