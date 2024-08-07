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

        $sql_code = "SELECT * FROM usuarios where email='$email' and `admin`= 0 ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $row = $sql_query->fetch_assoc();

        return $row;        
    }

    public static function getUsuariosByUsuario($usuario){
        global $mysqli;

        $usuario = $mysqli->real_escape_string($usuario);
        
        $sql_code = "SELECT * FROM usuarios where usuario='$usuario' and `admin`= 0 ";
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
            $resultado = $stmt->execute();
        
            $mysqli->commit();

            return $resultado;

        }catch(mysqli_sql_exception $exception) {
            $mysqli->rollback();

            return false;
    
        }
    }

    public static function updateUsuarios($id, $alteracoes){
        global $mysqli;

        if(empty($alteracoes)){
            return false;
        }

        $atualizacao="";
        
        foreach ($alteracoes as $campo => $valor){
            if(!empty($atualizacao)){
                $atualizacao .= ", ";
            }
            $novoValor = $mysqli->real_escape_string($valor);
            $atualizacao .= "$campo='".$novoValor."'";
        }

        $mysqli->begin_transaction();

        try{  
            $sql_code = "UPDATE usuarios SET ".$atualizacao." where id=? ";
            $stmt = $mysqli->prepare($sql_code);
            $stmt->bind_param('i', $id);
            $resultado = $stmt->execute();
        
            $mysqli->commit();

            return $resultado;

        }catch(mysqli_sql_exception $exception) {
            $mysqli->rollback();

            return false;
    
        }
       
    }

    public static function insertUsuarios($nome, $email, $usuario, $senha){
        global $mysqli;

        $nome = $mysqli->real_escape_string($nome);
        $email = $mysqli->real_escape_string($email);
        $usuario = $mysqli->real_escape_string($usuario);
        $mysqli->begin_transaction();
        
        try{  
            $sql_code = "INSERT INTO usuarios(nome, email, usuario, senha) VALUES (?, ?, ?, ?)"; 
            $stmt = $mysqli->prepare($sql_code);
            $stmt->bind_param('ssss', $nome, $email, $usuario, $senha);
            $resultado = $stmt->execute();
        
            $mysqli->commit();

            return $resultado;

        }catch(mysqli_sql_exception $exception) {
            $mysqli->rollback();

            return false;    
        } 
    }

    public static function buscaAmigos($nome_amigo, $usuario_id){
        global $mysqli;

        $nome_amigo = $mysqli->real_escape_string($nome_amigo);
        
        $sql_code = "SELECT * FROM usuarios where id != '$usuario_id' and `admin`= 0 and usuario like '$nome_amigo%' LIMIT 10";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $row = $sql_query->fetch_all(MYSQLI_ASSOC);

        return $row;
    }

    public static function atualiza_foto($path_foto, $id){
        global $mysqli;

        $path_foto = $mysqli->real_escape_string($path_foto);
        
        $mysqli->begin_transaction();
        
        try{  
            $sql_code = "UPDATE usuarios SET ".$path_foto." where id=? ";
            $stmt = $mysqli->prepare($sql_code);
            $stmt->bind_param('si', $path_foto, $id);
            $resultado = $stmt->execute();
        
            $mysqli->commit();

            return $resultado;

        }catch(mysqli_sql_exception $exception) {
            $mysqli->rollback();

            return false;
    
        }
    }

    public static function getUsuarioMaster(){
        global $mysqli;
        
        $sql_code = "SELECT * FROM usuarios where `admin`= 1";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $row = $sql_query->fetch_assoc();

        return $row; 
    }

    public static function getAllUsuarios(){
        global $mysqli;
        
        $sql_code = "SELECT * FROM usuarios where `admin`= 0";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $row = $sql_query->fetch_all(MYSQLI_ASSOC);

        return $row; 
    }

}