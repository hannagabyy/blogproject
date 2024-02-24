<?php

class Reacao {    

    public static function getReacaoById($id){
        global $mysqli;

        $sql_code = "SELECT * FROM reacao where id='$id' ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $row = $sql_query->fetch_assoc();

        return $row; 
    }

    public static function getUsuariosByEmoji($emoji){
        global $mysqli;

        $emoji = $mysqli->real_escape_string($emoji);

        $sql_code = "SELECT * FROM reacao where emoji='$emoji' ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $row = $sql_query->fetch_assoc();

        return $row;        
    }

    public static function getAllReacoes(){
        global $mysqli;
        
        $sql_code = "SELECT * FROM reacao ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $row = $sql_query->fetch_all(MYSQLI_ASSOC);

        return $row; 
    }

}