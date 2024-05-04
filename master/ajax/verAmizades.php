<?php
require_once(__DIR__ . "/../../includes.php");
require_once(__DIR__ . "/../protect.php");
require_once(__DIR__."/../../Daofactory/usuarios.php");
require_once(__DIR__."/../../Daofactory/amizade.php");

$amizades = Amizade::getAllAmizades();
$usuarios = Usuarios::getAllUsuarios();

$fotos_usuarios = array();
if (!empty($usuarios) && !empty($amizades)) {

    foreach($usuarios as $usuario){
        $fotos_usuarios[$usuario['id']] = (!is_null($usuario['foto']))? $usuario['foto'] : 'imagens/default-user.jpg';
    }

    foreach ($amizades as $amizade) {
        echo '
            <div class="d-flex justify-content-evenly">
                <div class="card-amigo-resultado">        
                    <div class="m-2 mx-auto p-2 rounded">
                        <a href="../public/perfil.php?id=' . $amizade['usuario_id1'] . '" target="_blank"><div class="fotoUsuario-busca-amigo bg-white rounded-circle">
                            <img class="fotoUsuario-busca-amigo bg-white rounded-circle" src="../' . $fotos_usuarios[$amizade['usuario_id1']] . '" >
                        </div></a>
                    </div>
                </div>
                <img src="../imagens/bidirecional-arrow.svg" style="width: 100px">
                <div class="card-amigo-resultado">        
                    <div class="m-2 mx-auto p-2 rounded">
                        <a href="../public/perfil.php?id=' . $amizade['usuario_id2'] . '" target="_blank"><div class="fotoUsuario-busca-amigo bg-white rounded-circle">
                            <img class="fotoUsuario-busca-amigo bg-white rounded-circle" src="../' . $fotos_usuarios[$amizade['usuario_id2']] . '" >
                        </div></a>
                    </div>
                </div>
            </div>';
    }
} else {
    echo "sem resultado!";
}
