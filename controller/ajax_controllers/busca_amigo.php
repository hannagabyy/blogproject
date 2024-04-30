<?php
require_once(__DIR__ . "/../../includes.php");
require_once(__DIR__ . "/../../protect.php");
require_once("../../Daofactory/usuarios.php");
require_once("../../Daofactory/amizade.php");

$nome_pesquisa = filter_input(INPUT_POST, 'nomePesquisa', FILTER_SANITIZE_SPECIAL_CHARS);
$usuario_id = filter_var($_SESSION['id'], FILTER_VALIDATE_INT);

$usuarios_achados = Usuarios::buscaAmigos($nome_pesquisa, $usuario_id);

if (!empty($usuarios_achados)) {
    foreach ($usuarios_achados as $usuario) {
        $sao_amigos = Amizade::verificaAmizade($usuario_id, $usuario['id']);
        $icone = ($sao_amigos) ? 'added-friend-icon.svg' : 'add-friend-icon.svg';
        $usuario['foto'] = (!is_null($usuario['foto']))? $usuario['foto'] : 'imagens/default-user.jpg';

        echo "
            <div class='card-amigo-resultado d-flex flex-column '>        
                <div class='m-2 d-flex justify-content-between align-items-center mx-auto p-2 rounded card-amigo fade-in-down'>
                    <a href='../perfil.php?id='{$usuario['id']}' target='_blank'><div class='fotoUsuario-busca-amigo bg-white rounded-circle'>
                        <img class='fotoUsuario-busca-amigo bg-white rounded-circle' src='../../{$usuario['foto']}' >
                    </div></a>
                    <div class='d-flex flex-column justify-content-start align-itens-center informacoes-amigo'>     
                        <a href='../perfil.php?id='{$usuario['id']}' target='_blank'><p class='fs-3 card-nom'>{$usuario['nome']}</p></a>
                        <a href='../perfil.php?id='{$usuario['id']}' target='_blank'><p class='fs-6lead text-center card-email'>{$usuario['email']}</p></a>
                    </div>
                    <div>
                        <span><img src='../../imagens/{$icone}' class='icone-adicionar m-3' data-usuarioId='{$usuario['id']}' onclick='atualizaAmizade(this)'></span>
                    </div>
                </div>
            </div>";
    }
} else {
    echo "sem resultado!";
}