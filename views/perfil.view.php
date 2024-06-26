<?php include(__DIR__ . "/../defaultHtml.php"); ?>



<main class="col-md-10 mx-auto">
    <div class="d-flex flex-column justify-content-center align-items-center my-4 w-100 container-perfil">
        <img id="fotoUsuario" class="fotoUsuario-perfil bg-white rounded-circle" src="../<?= $usuario['foto'] ?>">
        <p class="titulo-principal-perfil text-center display-6 mt-5 text-light"><span><?= $usuario['usuario'] ?></span></p>
        <p class="sobre-mim-amigo text-center fw-light"><?=$usuario['sobreMim']?></p>
        <div class="div-inputs">
            <form action="" class="">
                    <div class="">
                        <div class="">
                            <label for="usuario" class="form-label label-amigos text-start text-light fw-bold" style="color:orange;">Nome:</label>
                            <span class="dados-amigo"><?=$usuario['nome']?></span>
                        </div>
                        <div class="">
                            <label for="email" class="form-label label-amigos text-start text-light fw-bold" style="color:orange">Email:</label>
                            <span class="dados-amigo"><?= $usuario['email'] ?></span>
                        </div>

                        <div class="">
                                <label for="usuario" class="form-label label-amigos text-start text-light fw-bold" style="color:orange;">Usuário:</label>
                                <span class="dados-amigo w-100"><?= $usuario['usuario'] ?></span>
                        </div>
                </div>
                
            </form>
        </div>
    </div>
</main>
<?php include(__DIR__ . "/../defaultHtmlEnd.php"); ?>