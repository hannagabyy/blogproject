<?php include(__DIR__ . "/../defaultHtml.php"); ?>

<h1 class="titulo-principal text-center display-2 mt-5 text-light">Perfil</h1>

<main class="col-md-10 mx-auto">
<div class="d-flex flex-column justify-content-center align-items-center my-4 w-100 container-perfil">
        <div id="fotoUsuario" class="fotoUsuario-perfil bg-white rounded-circle"></div>
        <div class="mx-auto w-100 div-inputs">
            <form action="" class="form mx-auto m-4" >
                <div class="d-flex justify-content-center align-items-center row-6 input-form__grupos">
                    <div class="d-flex flex-column col-4  mx-2 input-form__perfil">
                        <label for="email" class="form-label text-light">Email</label>
                        <span class="form-control input-editar"><?=$usuario['email']?></span>
                    </div>

                    <div class="d-flex flex-column col-4 mx-2 input-form__perfil">
                        <label for="usuario" class="form-label text-light">Usuário</label>
                        <span class="form-control input-editar"><?=$usuario['usuario']?></span>
                    </div>
                </div>              
                <!-- <div class="d-flex justify-content-center"><button type="submit" name="submit" class="btn btn-primary px-4">Salvar</button></div> -->
            </form>
        </div>
    </div>
</main>
<?php include(__DIR__ . "/../defaultHtmlEnd.php"); ?>
