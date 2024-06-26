<?php include(__DIR__."/../../defaultHtml.php"); ?>

<h1 class="titulo-principal text-center display-2 mt-5 text-light">Meus posts</h1>

<main class="col-md-10 mx-auto container-fluid">
    
    <a id="botao__abrir_modal" class="btn text-white botao__novoPost d-flex justify-content-end align-items-center position-relative m-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Novo Post <img class="m-1" src="../../imagens/plus-icon.svg" alt="Icone de mais"> </a>  
    <?php if (isset($posts) && !empty($posts)){
        
    foreach ($posts as $post): ?>
    <div class="d-flex flex-column fadeInLeft">
        <div class="d-flex justify-content-center mx-auto rounded align-items-center div-post">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <img id="fotoUsuario" class="fotoUsuario" src="../../<?= $foto_perfil ?>">
                <p class="nome-usuario"><?= $usuario['usuario'] ?></p>

            </div>
            
            <div class="d-flex flex-column mt-5 meu-post-mobile">
                <div class="d-flex p-4 justify-content-end">
                    <div>
                        <button class="d-flex align-items-center mx-1 btn bg-primary text-light" value="<?=$post['id']?>" onclick="editarPost(this, this.value, event)"><img class="icones-botoes m-1" src="../../imagens/edit-icon.svg">Editar</button>
                    </div>
                    <form action="deletar_post.php" method="post">
                        <input type="hidden" value="<?=$post['id']?>" name="PostId">
                        <button class="d-flex align-items-center mx-1 btn bg-danger text-light apagar-post"><img class="icones-botoes m-1" src="../../imagens/trash-icon.svg">Apagar</button>
                    </form>
                </div>

                <div id="<?="comentarioId".$post['id']?>" class="publicacaoUsuario mx-auto p-4 overflow-y-auto overflow-x-hidden text-start post-texto">
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
        </div>

    <?php endforeach; 
    ?>
    </div>

    <?php }else{ ?>
        <div class="alert alert-warning" role="alert">
            <?="Você não publicou nenhum post!"; ?>
        </div>
        
    <?php }?>

   

    
</main>


<?php include(__DIR__."/../../defaultHtmlEnd.php"); ?>
