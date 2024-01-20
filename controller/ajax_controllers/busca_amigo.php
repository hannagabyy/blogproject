<?php
require_once(__DIR__."/../../includes.php");
require_once(__DIR__."/../../protect.php");
require_once("../../Daofactory/usuarios.php");


$nome_pesquisa = filter_input(INPUT_POST, 'nomePesquisa', FILTER_SANITIZE_SPECIAL_CHARS);

$usuarios_achados = Usuarios::buscaAmigos($nome_pesquisa);

if(!empty($usuarios_achados)){
    foreach($usuarios_achados as $usuario){
        echo '
            <div class="card-amigo-resultado d-flex flex-column">        
                <div class="m-2 d-flex justify-content-between align-items-center mx-auto p-2 rounded card-amigo">
                    <a href="../perfil.php?id='.$usuario['id'].'" target="_blank"><div class="fotoUsuario-busca-amigo bg-white rounded-circle"></div></a>
                    <div class="d-flex flex-column justify-content-start align-itens-center informacoes-amigo">     
                        <a href="../perfil.php?id='.$usuario['id'].'" target="_blank"><p class="fs-3 card-nome">'.$usuario['usuario'].'</p></a>
                        <a href="../perfil.php?id='.$usuario['id'].'" target="_blank"><p class="fs-6lead text-center card-email">'.$usuario['email'].'</p></a>
                    </div>
                    <div>
                        <span><img src="/blog_project/imagens/add-friend-icon.svg" class="icone-adicionar m-3"></span>
                    </div>
                </div>
            </div>';
    }

}else{
    echo "sem resultado!";
    
}

