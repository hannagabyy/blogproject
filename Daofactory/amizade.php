<?php

class Amizade {    
    
    public static function getAmizadesByUsuarioId($usuario_id1, $usuario_id2){
        global $mysqli;

        $sql_code = "SELECT * FROM amizade where (usuario_id1='$usuario_id1' AND usuario_id2='$usuario_id2') OR (usuario_id1='$usuario_id2' AND usuario_id2='$usuario_id1') ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $result = $sql_query->fetch_all();

        return $result; 
    }

    public static function deleteAmizadeByUsuarioId($usuario_id) {
        global $mysqli;
        
        $mysqli->begin_transaction();
        
        try{            
            $sql_code = "DELETE FROM amizade where usuario_id1 = ? OR usuario_id2 = ? ";
            $stmt = $mysqli->prepare($sql_code);
            $stmt->bind_param('ii', $usuario_id, $usuario_id);
            $stmt->execute();
        
            $mysqli->commit();

        }catch(mysqli_sql_exception $exception) {
            $mysqli->rollback();
    
        }

    }

    public static function insertAmizade($usuario_id1, $usuario_id2){
        global $mysqli;

        $mysqli->begin_transaction();
        
        try{ 
            $sql_code = "INSERT INTO amizade(usuario_id1, usuario_id2) VALUES (?, ?)";
            $stmt = $mysqli->prepare($sql_code);
            $stmt->bind_param('ii', $usuario_id1, $usuario_id2);
            $stmt->execute();
       
            
        }catch(mysqli_sql_exception $exception) {
            $mysqli->rollback();

        }

    }
}