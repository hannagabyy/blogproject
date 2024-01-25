<?php

function debug($var){
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

function atualiza_foto_perfil($fotoPerfil){
    $tamanhoPermitido = 2097152;
    $extensaoFoto = strtolower(pathinfo($fotoPerfil['name'], PATHINFO_EXTENSION));
    $pasta = '/upload/fotos-perfil/';
    $novoNomeImg = uniqid();
    $resultado = [
        'erro' => null,
        'nomeImg' => null
    ];

    if($fotoPerfil['error'] != 0 ){
        $resultado['erro'] = "erro ao atualizar foto, tente novamente!";
        return $resultado;
    }
    if($fotoPerfil['size'] > $tamanhoPermitido ){
        $resultado['erro'] = "tamanho máximo é de 2mb";
        return $resultado;
    }
    if(!in_array($extensaoFoto, ['jpg', 'png'])){
        $resultado['erro'] = "apenas as extensões: jpg e png são permitidas!";
        return $resultado;
    }
    if(!move_uploaded_file($fotoPerfil['tmp_name'], '../'.$pasta.$novoNomeImg.".".$extensaoFoto)){
        $resultado['erro'] = "erro ao atualizar foto!";
    }

    $resultado['nomeImg'] = $pasta.$novoNomeImg.".".$extensaoFoto;
    return $resultado;        
}

?>