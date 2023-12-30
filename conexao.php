<?php

$usuario = 'root';
$senha ='';
$database ='blog';
$host = 'localhost';

global $mysqli;
$mysqli = new mysqli($host,$usuario,'',$database);

if ($mysqli->error){
    die("Falha ao conectar com o banco de dados:". $mysqli->error);
}
?>
