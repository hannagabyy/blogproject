<?php
require_once(__DIR__."/../includes.php");
require_once(__DIR__."/../protect.php");
require_once(__DIR__."/../Daofactory/post.php");

//Apagando post:
$id = filter_input(INPUT_POST, 'PostId', FILTER_VALIDATE_INT);

if(isset($id)) {
    Post::deletePostById($id);
    sleep(1);

}else{
    //alert: algo deu errado
}

header("Location: ./meus_posts.php");
