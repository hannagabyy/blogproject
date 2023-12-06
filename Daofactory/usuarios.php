<?php

class Usuarios {    

    public static function getUsuariosById($id){
        global $mysqli;

        $sql_code = "SELECT * FROM usuarios where id='$id' ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $row = $sql_query->fetch_assoc();

        return $row; 
    }

    public static function getUsuariosByEmail($email){
        global $mysqli;

        $sql_code = "SELECT * FROM usuarios where email='$email' ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $row = $sql_query->fetch_assoc();

        return $row;        
    }

    public static function getUsuariosByUsuario($usuario){
        global $mysqli;

        $sql_code = "SELECT * FROM usuarios where usuario='$usuario' ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $row = $sql_query->fetch_assoc();

        return $row;
    }

    public static function deleteUsuariosById($id) {
        global $mysqli;

        $sql_code = "DELETE FROM usuarios where id='$id' ";

        if($mysqli->query($sql_code)){
            return true;
        }
        return false;
    }

    public static function updateUsuarios($id, $email=NULL, $usuario=NULL, $senha=NULL){
        global $mysqli;

        $atualizacao="";

        if(!is_null($email)){
            $atualizacao += " email=".$email;
        }

        if(!is_null($usuario)){
            if(!empty($atualizacao)){
                $atualizacao += ",";
            }

            $atualizacao += " usuario=".$usuario;    
        }

        if(!is_null($senha)){
            if(!empty($atualizacao)){
                $atualizacao += ",";
            }

            $atualizacao += " senha=".$senha;
        }

        $sql_code = "UPDATE usuarios SET ".$atualizacao." where id='$id' ";

        if($mysqli->query($sql_code)){
            return true;
        }
        return false;
    }

    public static function insertUsuarios($email, $usuario, $senha){
        global $mysqli;

        $sql_code = "INSERT INTO usuarios(email, usuario, senha) VALUES ('".$email."', '".$usuario."', '".$senha."')";
        debug($sql_code);
        if($mysqli->query($sql_code)){
            return true;
        }
        return false;
        
    }

}