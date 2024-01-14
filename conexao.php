<?php

$usuario = 'root';
$senha ='';
$database ='blog';
$host = 'localhost';

global $mysqli; // botar try catch de novo
try{
    $mysqli = new mysqli($host,$usuario,$senha,$database);

}catch (Exception $msg) {
    include('erro.php');
    die;
    
}

