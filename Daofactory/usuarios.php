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

        $email = $mysqli->real_escape_string($email);

        $sql_code = "SELECT * FROM usuarios where email='$email' ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $row = $sql_query->fetch_assoc();

        return $row;        
    }

    public static function getUsuariosByUsuario($usuario){
        global $mysqli;

        $usuario = $mysqli->real_escape_string($usuario);
        
        $sql_code = "SELECT * FROM usuarios where usuario='$usuario' ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $row = $sql_query->fetch_assoc();

        return $row;
    }

    public static function deleteUsuariosById($id) {
        global $mysqli;

        $mysqli->begin_transaction();
        
        try{  
            $sql_code = "DELETE FROM usuarios where id=? ";
            $stmt = $mysqli->prepare($sql_code);
            $stmt->bind_param('i', $id);
            $stmt->execute();
        
            $mysqli->commit();

        }catch(mysqli_sql_exception $exception) {
            $mysqli->rollback();
    
        }
    }

    public static function updateUsuarios($id, $email=NULL, $usuario=NULL, $senha=NULL){
        global $mysqli;

        $email = $mysqli->real_escape_string($email);
        $usuario = $mysqli->real_escape_string($usuario);

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

        $mysqli->begin_transaction();
        
        try{  
            $sql_code = "UPDATE usuarios SET ".$atualizacao." where id=? ";
            $stmt = $mysqli->prepare($sql_code);
            $stmt->bind_param('i', $id);
            $stmt->execute();
        
            $mysqli->commit();

        }catch(mysqli_sql_exception $exception) {
            $mysqli->rollback();
    
        }
       
    }

    public static function insertUsuarios($email, $usuario, $senha){
        global $mysqli;

        $email = $mysqli->real_escape_string($email);
        $usuario = $mysqli->real_escape_string($usuario);
        $mysqli->begin_transaction();
        
        try{  
            $sql_code = "INSERT INTO usuarios(email, usuario, senha) VALUES (?, ?, ?)"; 
            $stmt = $mysqli->prepare($sql_code);
            $stmt->bind_param('sss', $email, $usuario, $senha);
            $stmt->execute();
        
            $mysqli->commit();

        }catch(mysqli_sql_exception $exception) {
            $mysqli->rollback();
    
        } 
    }

}