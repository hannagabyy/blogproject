<?php include(__DIR__."/../../defaultHtml.php");?>


<h1 class="titulo-principal text-center display-2 mt-5 text-light">Meus amigos!</h1>

<main class="col-md-10 mx-auto">
 
    <div class="my-5 div-pesquisar d-flex align-itens-center justify-content-center input-group mx-auto">
        <input type="text" class="form-control input-pesquisar" id="exampleFormControlInput1" placeholder="Insira um nome...." onkeyup="buscarAmigo(this.value)">
        <span class="input-group-text icone-pesquisar" id="basic-addon2"><i class="fa-solid fa-magnifying-glass color-white "></i></span>
    </div>

    <section id="caixaDeResultados" class="d-flex flex-wrap justify-content-around">

        <?php if (isset($amigos) && !empty($amigos)): ?>
                        
            <?php foreach ($amigos as $amigo): ?>
                <div class="card-amigo-resultado d-flex flex-column">        
                    <div class="m-2 d-flex justify-content-between align-items-center mx-auto p-2 rounded card-amigo">
                        <a href="../perfil.php?id=<?=$amigo['id']?>" target="_blank"><div class="fotoUsuario-busca-amigo bg-white rounded-circle"></div></a>
                        <div class="d-flex flex-column justify-content-start align-itens-center informacoes-amigo">     
                            <a href="../perfil.php?id=<?=$amigo['id']?>" target="_blank"><p class="fs-3 card-nome"><?=$amigo['usuario']?></p></a>
                            <a href="../perfil.php?id=<?=$amigo['id']?>" target="_blank"><p class="fs-6lead text-center card-email"><?=$amigo['email']?></p></a>
                        </div>
                        <div>
                            <span><img src="/blog_project/imagens/add-friend-icon.svg" class="icone-adicionar m-3"></span>
                        </div>
                    </div>
                </div>
                
            <?php endforeach; ?>  

        <?php else: ?>

            <div class="alert alert-warning" role="alert">
                <?="Você ainda não adicionou nenhum amigo :("; ?>
            </div>
            
        <?php endif; ?>
    
    </section>
  
</main>

<?php include(__DIR__."/../../defaultHtmlEnd.php"); ?> 
