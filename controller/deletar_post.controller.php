<?php
require_once(__DIR__."/../includes.php");
require_once(__DIR__."/../protect.php");
require_once("../../Daofactory/post.php");

//Apagando post:
if(isset($_POST['PostId'])) {
    $id = $_POST['PostId'];

    Post::deletePostById($id);

}else{
    //alert: algo deu errado
}

header("Location: ../home.php");
