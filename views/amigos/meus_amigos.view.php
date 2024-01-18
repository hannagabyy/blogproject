<?php include(__DIR__."/../../defaultHtml.php");?>


<h1 class="titulo-principal text-center display-2 mt-5 text-light">Meus amigos!</h1>

<main class="col-md-10 mx-auto">
 
    <div class="my-5 div-pesquisar d-flex align-itens-center justify-content-center input-group mx-auto">
        <input type="text" class="form-control input-pesquisar" id="exampleFormControlInput1" placeholder="Insira um nome...." onkeyup="buscarAmigo(this.value)">
        <span class="input-group-text icone-pesquisar" id="basic-addon2"><i class="fa-solid fa-magnifying-glass color-white "></i></span>
    </div>

    <section id="caixaDeResultados" class="d-flex flex-wrap justify-content-around">
    </section>
  
</main>

<?php include(__DIR__."/../../defaultHtmlEnd.php"); ?> 
