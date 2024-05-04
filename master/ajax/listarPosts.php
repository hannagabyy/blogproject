<?php
require_once(__DIR__ . "/../../includes.php");
require_once(__DIR__ . "/../protect.php");
require_once(__DIR__."/../../Daofactory/usuarios.php");
require_once(__DIR__."/../../Daofactory/post.php");

$usuarios = Usuarios::getAllUsuarios();

if (!empty($usuarios)) {?>
    <div class="d-flex flex-column ">
        <?php foreach ($usuarios as $usuario) :
            $posts = Post::getPostByUsuarioId($usuario['id']);
            $usuario['foto'] = (!is_null($usuario['foto']))? $usuario['foto'] : 'imagens/default-user.jpg';

            foreach ($posts as $post) : ?>
                <div class="d-flex justify-content-center mx-auto rounded align-items-center div-post">
                    <div class="d-flex flex-column justify-content-center align-items-center me-5">
                        <img id="fotoUsuario" class="fotoUsuario" src="../<?= $usuario['foto'] ?>">
                        <p class="nome-usuario"><?= $usuario['usuario'] ?></p>
                    </div>

                    <div class="d-flex flex-column mt-5">
                        <div class="mx-auto p-4 overflow-y-auto overflow-x-hidden text-start post-texto publicacaoUsuario">
                            <?= html_entity_decode($post['comentario']) ?>
                        </div>
                    </div>
                </div>
            <?php endforeach;

        endforeach; ?>
    </div> 
<?php

}else{
    echo "sem resultado!";
}
