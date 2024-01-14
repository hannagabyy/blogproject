<?php
require_once(__DIR__."/../../includes.php");
require_once(__DIR__."/../../protect.php");
require_once("../../Daofactory/usuarios.php");


$nome_pesquisa = filter_input(INPUT_POST, 'nomePesquisa', FILTER_SANITIZE_SPECIAL_CHARS);

$usuarios_achados = Usuarios::buscaAmigos($nome_pesquisa);

if(!empty($usuarios_achados)){
    foreach($usuarios_achados as $usuario){
        echo '
            <div class="d-flex flex-column">        
                <div class="d-flex justify-content-between align-items-center mx-auto p-2 rounded card-amigo">
                    <div class="fotoUsuario"></div>
                    <div class="d-flex flex-column justify-content-start align-itens-center informacoes-amigo">     
                        <p class="fs-3 card-nome">'.$usuario['usuario'].'</p>
                        <p class="fs-6lead text-center">'.$usuario['email'].'</p>
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

