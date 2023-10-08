<?php

$usuario = 'root';
$senha ='';
$database ='blog';
$host = 'localhost';

$mysqli = new mysqli($host,$usuario,$senha,$database);

if ($mysqli->error){
    die("Falha ao conectar com o banco de dados:". $mysqli->error);
}
?>
