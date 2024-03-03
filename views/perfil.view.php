<?php include(__DIR__ . "/../defaultHtml.php"); ?>



<main class="col-md-10 mx-auto">
    <div class="d-flex flex-column justify-content-center align-items-center my-4 w-100 container-perfil">
        <img id="fotoUsuario" class="fotoUsuario-perfil bg-white rounded-circle" src="../<?= $usuario['foto'] ?>">
        <p class="titulo-principal text-center display-6 mt-5 text-light"><?= $usuario['usuario'] ?></p>
        <p class="sobre-mim-amigo text-center fw-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the nged. It release of Letraset sheets containing Lorem Ipsum passages, .</p>
        <div class="div-inputs">
            <form action="" class="form mx-auto m-4">
                    <div class="d-flex justify-content-around align-content-center flex-wrap">
                        <div class="d-flex flex-column mx-2 input-form__perfil">
                            <label for="usuario" class="form-label label-amigos text-start text-light fw-bold" style="color:orange;">Nome:</label>
                            <span class="dados-amigo">Maria de Paula</span>
                        </div>
                        <div class="d-flex flex-column  mx-2">
                            <label for="email" class="form-label label-amigos text-start text-light fw-bold" style="color:orange">Email:</label>
                            <span class="dados-amigo"><?= $usuario['email'] ?></span>
                        </div>

                        <div class="d-flex flex-column input-form__perfil">
                                <label for="usuario" class="form-label label-amigos text-start text-light fw-bold" style="color:orange;">Usuário:</label>
                                <span class="dados-amigo w-100"><?= $usuario['usuario'] ?></span>
                        </div>
                </div>
                
            </form>
        </div>
    </div>
</main>
<?php include(__DIR__ . "/../defaultHtmlEnd.php"); ?>