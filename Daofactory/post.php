<?php

class Post {    

    public static function getPostById($id){
        global $mysqli;

        $sql_code = "SELECT * FROM post where id='$id' ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $row = $sql_query->fetch_assoc();

        return $row; 
    }

    public static function getPostByUsuarioId($usuarioId){
        global $mysqli;
        
        $sql_code = "SELECT * FROM post where usuarioId='$usuarioId' order by id DESC";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $result = $sql_query->fetch_all(MYSQLI_ASSOC);

        return $result;
    }

    public static function deletePostById($id) {
        global $mysqli;

        $mysqli->begin_transaction();
        
        try{  
            $sql_code = "DELETE FROM post where id=? ";
            $stmt = $mysqli->prepare($sql_code);
            $stmt->bind_param('i', $id);
            $stmt->execute();
        
            $mysqli->commit();

        }catch(mysqli_sql_exception $exception) {
            $mysqli->rollback();
    
        }
    }

    public static function updatePost($id, $comentario){
        global $mysqli;

        $comentario = $mysqli->real_escape_string($comentario);

        $mysqli->begin_transaction();
        
        try{  
            $sql_code = "UPDATE post SET comentario=? where id=? ";
            $stmt = $mysqli->prepare($sql_code);
            $stmt->bind_param('si', $comentario, $id);
            $stmt->execute();
        
            $mysqli->commit();

        }catch(mysqli_sql_exception $exception) {
            $mysqli->rollback();
    
        }
       
    }

    public static function insertPost($comentario, $usuarioId){
        global $mysqli;

        $comentario = $mysqli->real_escape_string($comentario);

        $mysqli->begin_transaction();
        
        try{  
            $sql_code = "INSERT INTO post(comentario, usuarioId) VALUES (?, ?)"; 
            $stmt = $mysqli->prepare($sql_code);
            $stmt->bind_param('si', $comentario, $usuarioId);
            $stmt->execute();
        
            $mysqli->commit();

        }catch(mysqli_sql_exception $exception) {
            $mysqli->rollback();
    
        } 
    }

}