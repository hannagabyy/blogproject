<?php

include("../../controller/protect.php");
include("../../defaultHtml.php");
?>

<main class="h-100 text-center display-3 mt-5">    
    Bem vindo ao blog!

    <div class="container w-100 h-100 mx-auto mt-5">
        <div id="fotoUsuario" class="w-25 h-25 mb-1"></div>
        <div id="publicacaoUsuario" class="w-75 mx-auto p-4 overflow-auto text-start">
         Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
         when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
         It has survived not only five centuries, but also the leap into electronic typesetting, 
         remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
         sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
          Aldus PageMaker including versions of Lorem Ipsum.
        </div>
    </div>

    <p>
        <a href="../../controller/logout.php">Sair</a>
    </p>
</main>

<?php include("../../defaultHtmlEnd.php")?>    
