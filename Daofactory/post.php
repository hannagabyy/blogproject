<?php

class Post {    

    public static function getPostById($id){
        global $mysqli;

        $sql_code = "SELECT * FROM post where id='$id' ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $row = $sql_query->fetch_assoc();

        return $row; 
    }

    public static function getPostByUsuarioId($usuarioId, $privacidade=null){
        global $mysqli;
        
        $condicao = "";
        if(!is_null($privacidade)){
            $condicao = " AND privacidade = '$privacidade'";
        }

        $sql_code = "SELECT * FROM post where usuarioId='$usuarioId'{$condicao} order by id DESC";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $result = $sql_query->fetch_all(MYSQLI_ASSOC);

        return $result;
    }

    public static function getPostsDosAmigos($amigos_ids){
        global $mysqli;

        $sql_code = 
            "SELECT post.comentario, post.data_criacao, post.id, usuarios.usuario, usuarios.foto, usuarios.id as usuario_id
             FROM post 
             INNER JOIN usuarios ON post.usuarioId = usuarios.id
             WHERE post.privacidade='publico'
             AND post.usuarioId IN (".implode(', ', $amigos_ids).")
             ORDER BY post.data_criacao DESC";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $result = $sql_query->fetch_all(MYSQLI_ASSOC);

        return $result;
    }

    public static function getAllPosts(){
        global $mysqli;
        
        $sql_code = "SELECT * FROM post ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $row = $sql_query->fetch_all(MYSQLI_ASSOC);

        return $row; 
    }

    public static function deletePostById($id) {
        global $mysqli;

        $mysqli->begin_transaction();
        
        try{  
            $sql_code1 = "DELETE FROM post_reacao where post_id=? ";
            $sql_code2 = "DELETE FROM post where id=? ";            

            $stmt = $mysqli->prepare($sql_code1);
            $stmt->bind_param('i', $id);
            $resultado = $stmt->execute();

            $stmt = $mysqli->prepare($sql_code2);
            $stmt->bind_param('i', $id);
            $resultado = $stmt->execute();
        
            $mysqli->commit();

            return $resultado;

        }catch(mysqli_sql_exception $exception) {
            $mysqli->rollback();

            return false;
    
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
            $resultado = $stmt->execute();
        
            $mysqli->commit();

            return $resultado;

        }catch(mysqli_sql_exception $exception) {
            $mysqli->rollback();

            return false;
    
        }
       
    }

    public static function insertPost($comentario, $usuarioId, $privacidade){
        global $mysqli;

        $comentario = $mysqli->real_escape_string($comentario);

        $mysqli->begin_transaction();
        
        try{  
            $sql_code = "INSERT INTO post(comentario, usuarioId, privacidade) VALUES (?, ?, ?)"; 
            $stmt = $mysqli->prepare($sql_code);
            $stmt->bind_param('sis', $comentario, $usuarioId, $privacidade);
            $resultado = $stmt->execute();
        
            $mysqli->commit();

            return $resultado;

        }catch(mysqli_sql_exception $exception) {
            $mysqli->rollback();

            return false;
    
        } 
    }

}