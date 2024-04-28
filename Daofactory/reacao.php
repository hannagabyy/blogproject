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

    public static function getPostReacaoByUsuarioIdAndPostId($usuarioId, $postId){
        global $mysqli;

        $sql_code = "SELECT * FROM post_reacao where usuario_id='$usuarioId' and post_id='$postId' ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $row = $sql_query->fetch_assoc();

        return $row; 
    }

    public static function getQuantidadePostReacoesByPostId($postId){
        global $mysqli;

        $sql_code = "SELECT reacao.id,count(reacao.id) as quantidade
                    FROM post_reacao
                    left JOIN reacao on post_reacao.reacao_id = reacao.id
                    WHERE post_id='$postId' 
                    GROUP by reacao.id";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql" . $mysqli->error);
        $row = $sql_query->fetch_all(MYSQLI_ASSOC);

        return $row; 
    }

    public static function updatePostReacao($emojiId, $postId, $usuarioId){
        global $mysqli;

        $mysqli->begin_transaction();
        
        try{  
            $sql_code = "UPDATE post_reacao SET reacao_id=? where post_id=? and usuario_id=?";
            $stmt = $mysqli->prepare($sql_code);
            $stmt->bind_param('iii', $emojiId, $postId, $usuarioId);
            $resultado = $stmt->execute();
        
            $mysqli->commit();

            return $resultado;

        }catch(mysqli_sql_exception $exception) {
            $mysqli->rollback();

            return false;
    
        }
       
    }

    public static function insertPostReacao($emojiId, $postId, $usuarioId){
        global $mysqli;

        $mysqli->begin_transaction();
        
        try{  
            $sql_code = "INSERT INTO post_reacao(post_id, reacao_id, usuario_id) VALUES (?, ?, ?)"; 
            $stmt = $mysqli->prepare($sql_code);
            $stmt->bind_param('iii', $postId, $emojiId, $usuarioId);
            $resultado = $stmt->execute();
        
            $mysqli->commit();

            return $resultado;

        }catch(mysqli_sql_exception $exception) {
            $mysqli->rollback();

            return false;
    
        } 
    }

}