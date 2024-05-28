<?php
require_once(__DIR__."/../../includes.php");
require_once(__DIR__."/../../protect.php");
require_once(__DIR__."/../../Daofactory/usuarios.php");
require_once(__DIR__."/../../Daofactory/post.php");


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
        $tamanhoPermitido = 500;

        if(strlen($comentario) <= $tamanhoPermitido && strlen($comentario) > 1){
            $usuarioId = filter_var($_SESSION['id'], FILTER_VALIDATE_INT);
            $resultado = Post::insertPost($comentario, $usuarioId, $privacidade);

        }        
      
    }
   
    if(isset($resultado)){
        echo "<script>window.alert('Post salvo com sucesso!')</script>";
    }
    else{ 
        echo "<script>window.alert('Erro ao salvar o post!')</script>";
    }  

    header("location:".$_SERVER['HTTP_REFERER']);
}
