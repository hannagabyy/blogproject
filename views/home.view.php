<?php include(__DIR__ . "/../defaultHtml.php"); ?>

<h1 class="titulo-principal text-center display-2 mt-5 text-light">Bem vindo ao Blog!</h1>

<main class="col-md-10 mx-auto main-home container-fluid ">

    <a id="botao__abrir_modal" class="mb-3 mt-5 btn text-white botao__novoPost d-flex justify-content-end align-items-center position-relative m-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Novo Post <img class="m-1" src="../imagens/plus-icon.svg" alt="Icone de mais"> </a>

    <?php if (isset($posts_dos_amigos) && !empty($posts_dos_amigos)) { ?>
        <!-- <div class="d-flex flex-column "> -->
            <?php foreach ($posts_dos_amigos as $post) : ?>
            <div class="d-flex flex-column fadeInLeft">
                <div class="d-flex justify-content-center mx-auto rounded align-items-center div-post">
                    <div class="d-flex flex-column justify-content-center align-items-center  me-5">
                        <a href="./perfil.php?id=<?= $post['usuario_id'] ?>" target="_blank">
                            <img id="fotoUsuario" class="fotoUsuario" src="../<?= $post['foto'] ?>">
                        </a>
                        <p class="nome-usuario"><?= $post['usuario'] ?></p>
                    </div>

                    <div class="d-flex flex-column mt-5">
                        <div class="mx-auto p-4 overflow-y-auto overflow-x-hidden text-start post-texto publicacaoUsuario">
                            <?= html_entity_decode($post['comentario']) ?>
                        </div>
                        <div class="fab-container">
                            <div class="button-reagir iconbutton">
                                <i class="fa-brands"><?=$reacoes_aos_posts[$post['id']]?></i>
                            </div>
                            <ul class="reacoes">
                                <?php foreach($emojis as $emoji_id => $emoji):
                                    $quantidade_reacao = (array_key_exists($emoji_id, $reacoes[$post['id']]))? $reacoes[$post['id']][$emoji_id] : '0'?>
                                    
                                    <li class="animate-slide-in-right" data-num_icone="<?=$emoji_id?>" data-num_post="<?=$post['id']?>" data-num_user="<?=$usuario_id?>" onclick="atualizaReacao(this)">
                                        <div class="iconbutton position-relative">
                                            <span id="contador-reacao" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"><?= $quantidade_reacao ?></span>
                                            <i class="fa-brands" style="color:Red"><?=$emoji?></i>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        

                    </div>
                    <div>

                    </div>
                </div>
  
                <?php endforeach; ?>
            </div>
            
        <!-- </div> -->
        

    <?php

    } else {
        echo "Nenhum post no momento!";
    }
    ?>

</main>


<?php include(__DIR__ . "/../defaultHtmlEnd.php"); ?>