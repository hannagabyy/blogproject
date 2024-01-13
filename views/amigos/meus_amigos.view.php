<?php include(__DIR__."/../../defaultHtml.php");?>


<h1 class="titulo-principal text-center display-2 mt-5 text-light">Meus amigos!</h1>

<main class="col-md-10 mx-auto">
 
    <div class="my-5 div-pesquisar d-flex align-itens-center justify-content-center input-group mx-auto">
        <input type="text" class="form-control input-pesquisar" id="exampleFormControlInput1" placeholder="Insira um nome....">
        <span class="input-group-text icone-pesquisar" id="basic-addon2"><i class="fa-solid fa-magnifying-glass color-white "></i></span>
    </div>
    <div class="d-flex flex-column">
        
        <div class="d-flex justify-content-between align-items-center mx-auto p-2 rounded card-amigo">
                <div class="fotoUsuario"></div>
                <div class="d-flex flex-column justify-content-start align-itens-center informacoes-amigo">     
                    <p class="fs-3 card-nome">Nome do amigo</p>
                    <p class="fs-6lead text-center">amigo@email.com</p>
                </div>
                <div>
                    <span><img src="/blog_project/imagens/add-friend-icon.svg" class="icone-adicionar m-3"></span>
                </div>
        </div>

                        
                              
                    
    </div>
    </div>

  
</main>

<?php include(__DIR__."/../../defaultHtmlEnd.php"); ?> 
