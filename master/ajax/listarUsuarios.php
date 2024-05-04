<?php
require_once(__DIR__ . "/../../includes.php");
require_once(__DIR__ . "/../protect.php");
require_once(__DIR__."/../../Daofactory/usuarios.php");

$usuarios = Usuarios::getAllUsuarios();

if (!empty($usuarios)) {
    foreach ($usuarios as $usuario) {

        $usuario['foto'] = (!is_null($usuario['foto']))? $usuario['foto'] : 'imagens/default-user.jpg';

        echo '
            <div class="card-amigo-resultado d-flex flex-column">        
                <div class="m-2 d-flex justify-content-between align-items-center mx-auto p-2 rounded card-amigo">
                    <a href="../public/perfil.php?id=' . $usuario['id'] . '" target="_blank"><div class="fotoUsuario-busca-amigo bg-white rounded-circle">
                        <img class="fotoUsuario-busca-amigo bg-white rounded-circle" src="../' . $usuario['foto'] . '" >
                    </div></a>
                    <div class="d-flex flex-column justify-content-start align-itens-center informacoes-amigo">     
                        <a href="../public/perfil.php?id=' . $usuario['id'] . '" target="_blank"><p class="fs-3 card-nome">' . $usuario['usuario'] . '</p></a>
                        <a href="../public/perfil.php?id=' . $usuario['id'] . '" target="_blank"><p class="fs-6lead text-center card-email">' . $usuario['email'] . '</p></a>
                    </div>
                    <div>
                        <span><img src="../imagens/added-friend-icon.svg" class="icone-adicionar m-3"></span>
                    </div>
                </div>
            </div>';
    }
} else {
    echo "sem resultado!";
}
