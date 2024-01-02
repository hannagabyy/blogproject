<?php include(__DIR__."/../defaultHtml.php"); ?>

<h1 class="titulo-principal text-center display-2 mt-5 text-light">Bem vindo ao Blog!</h1>

<main class="col-md-10 mx-auto">
 
    <a id="botao__abrir_modal"class="btn text-white botao__novoPost d-flex justify-content-end align-items-center position-relative m-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Novo Post <img class="m-1" src="../imagens/plus-icon.svg" alt="Icone de mais"> </a>  
    
    <?php if ($posts_dos_amigos){

        foreach ($posts_dos_amigos as $nome => $posts): 
            foreach($posts as $post): ?>
                <div class="mt-5 d-flex justify-content-center mx-auto rounded align-items-center">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div id="fotoUsuario" class=""></div>
                        <p class=""><?= $nome ?></p>
                    </div>
                    
                    <div class="mt-5">
                        <div id="publicacaoUsuario" class=" w-75 mx-auto p-4 overflow-y-auto overflow-x-hidden text-start">
                            <?= html_entity_decode($post['comentario']) ?>
                        </div>            
                    </div>            
                </div>
            <?php endforeach;
        endforeach;  

    }else{
        echo "Nenhum post no momento!";

    }?>
<!-- 
    <div class="mt-5 d-flex justify-content-center mx-auto rounded align-items-center">
        <div class="justify-content-center align-items-center">
            <div id="fotoUsuario" class=""></div>
            <p class="">Maria Alana</p>
        </div>
        
        <div class="mt-5">
            <div id="publicacaoUsuario" class=" w-75 mx-auto p-4 overflow-y-auto overflow-x-hidden text-start">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
            It has survived not only five centuries, but also the leap into electronic typesetting, 
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.
            </div>
        
        </div>
    </div>

    <div class="mt-5 d-flex justify-content-center mx-auto rounded align-items-center">
        <div class="justify-content-center align-items-center">
            <div id="fotoUsuario" class=""></div>
            <p class="">Maria Alana</p>
        </div>
        
        <div class="mt-5">
            <div id="publicacaoUsuario" class=" w-75 mx-auto p-4 overflow-y-auto overflow-x-hidden text-start">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
            It has survived not only five centuries, but also the leap into electronic typesetting, 
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.
            </div>
        
        </div>
    </div>

-->
</main>




<?php include(__DIR__."/../defaultHtmlEnd.php"); ?> 
