<?php

class Amizade {    

    public static function getAmizadesByUsuarioId($usuarioId){
        global $mysqli;
             
        $sql_code = "SELECT
                        CASE 
                            WHEN usuario_id1 = $usuarioId THEN usuario_id2
                            ELSE usuario_id1
                        END AS usuarioId
        FROM amizade WHERE usuario_id1='$usuarioId' OR usuario_id2='$usuarioId' ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $result = $sql_query->fetch_all(MYSQLI_ASSOC);

        return $result; 
    }
    
    public static function verificaAmizade($usuario_id1, $usuario_id2){
        global $mysqli;

        $sql_code = "SELECT * FROM amizade where (usuario_id1='$usuario_id1' AND usuario_id2='$usuario_id2') OR (usuario_id1='$usuario_id2' AND usuario_id2='$usuario_id1') ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        if(!empty($sql_query->fetch_all())){
            return true;
        }

        return false; 
    }

    public static function deleteAmizade($usuario_id, $amigo_id) {
        global $mysqli;
        
        $mysqli->begin_transaction();
        
        try{            
            $sql_code = "DELETE FROM amizade where (usuario_id1 = ? AND usuario_id2 = ?) OR (usuario_id2 = ? AND usuario_id1 = ?)";
            $stmt = $mysqli->prepare($sql_code);
            $stmt->bind_param('iiii', $usuario_id, $amigo_id, $usuario_id, $amigo_id);
            $resultado = $stmt->execute();
        
            $mysqli->commit();

            return $resultado;

        }catch(mysqli_sql_exception $exception) {
            $mysqli->rollback();

            return false;
    
        }

    }

    public static function insertAmizade($usuario_id1, $usuario_id2){
        global $mysqli;

        $mysqli->begin_transaction();
        
        try{ 
            $sql_code = "INSERT INTO amizade(usuario_id1, usuario_id2) VALUES (?, ?)";
            $stmt = $mysqli->prepare($sql_code);
            $stmt->bind_param('ii', $usuario_id1, $usuario_id2);
            $resultado = $stmt->execute();
            
            $mysqli->commit();

            return $resultado;
            
        }catch(mysqli_sql_exception $exception) {
            $mysqli->rollback();

            return false;
        }

    }
    
    public static function getAllAmizades(){
        global $mysqli;
        
        $sql_code = "SELECT * FROM Amizade";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $row = $sql_query->fetch_all(MYSQLI_ASSOC);

        return $row; 
    }
}