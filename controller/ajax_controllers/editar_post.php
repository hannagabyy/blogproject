<?php
require_once(__DIR__."/../../includes.php");
require_once(__DIR__."/../../protect.php");
require_once("../../Daofactory/post.php");

$postId = filter_input(INPUT_POST, 'postId', FILTER_VALIDATE_INT);

if($postId){
    $tagsPermitidas = '<p><ul><li><i><ol><h1><h2><h3><h4><strong>';
    $comentario = strip_tags($_POST['comentario'], $tagsPermitidas);
    $comentario =  htmlspecialchars($comentario);

    Post::updatePost($postId, $comentario);

}else{
    //erro
    echo" n entarsjdfalksdjflaskfjaslfjsalkfjadsjsdlk";
}



