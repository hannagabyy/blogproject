<?php include(__DIR__ . "/../defaultHtml.php"); ?>

<h1 class="titulo-principal text-center display-2 mt-5 text-light">Bem vindo ao Blog!</h1>

<main class="col-md-10 mx-auto main-home container-fluid ">

    <a id="botao__abrir_modal" class="mb-3 mt-5 btn text-white botao__novoPost d-flex justify-content-end align-items-center position-relative m-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Novo Post <img class="m-1" src="../imagens/plus-icon.svg" alt="Icone de mais"> </a>

    <?php if (isset($posts_dos_amigos) && !empty($posts_dos_amigos)) { ?>
        <div class="d-flex flex-column ">
            <?php foreach ($posts_dos_amigos as $post) : ?>
                <div class="d-flex justify-content-center mx-auto rounded align-items-center div-post">
                    <div class="d-flex flex-column justify-content-center align-items-center  me-5">
                        <img id="fotoUsuario" class="fotoUsuario" src="../<?= $post['foto'] ?>">
                        <p class="nome-usuario"><?= $post['usuario'] ?></p>
                    </div>

                    <div class="d-flex flex-column mt-5">
                        <div class="mx-auto p-4 overflow-y-auto overflow-x-hidden text-start post-texto publicacaoUsuario">
                            <?= html_entity_decode($post['comentario']) ?>
                        </div>
                        <div class="fab-container">
                            <div class="button-reagir iconbutton">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                            <ul class="reacoes animate__animated">
                                <li>
                                    <div class="iconbutton">
                                        <i class="fa-brands animate__animated animate__slideInRight " style="color:Red">&#x2764</i>
                                    </div>
                                </li>

                                <li>
                                    <div class="iconbutton">
                                        <i class="fa-brands animate__animated animate__slideInRight">&#x1F602</i>
                                    </div>

                                </li>

                                <li>
                                    <div class="iconbutton ">
                                        <i class="fab animate__animated animate__slideInRight">&#x1F62E</i>
                                    </div>

                                </li>

                                <li>
                                    <div class="iconbutton ">
                                        <i class="fab animate__animated animate__slideInRight">&#X1F62D</i>
                                    </div>

                                </li>
                                <li>
                                    <div class="iconbutton ">
                                        <i class="fab animate__animated animate__slideInRight">&#x1F620</i>
                                    </div>

                                </li>


                        </ul>
                        </div>
                        

                    </div>
                    <div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    <?php

    } else {
        echo "Nenhum post no momento!";
    }
    ?>

</main>


<?php include(__DIR__ . "/../defaultHtmlEnd.php"); ?>