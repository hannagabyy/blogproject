<?php include(__DIR__ . "/../defaultHtml.php"); ?>

<h1 class="titulo-principal text-center display-2 mt-5 text-light">Meu perfil</h1>
<main class="col-md-10 mx-auto">
    <form action="" method="post" enctype="multipart/form-data" class="d-flex flex-column justify-content-center align-items-center my-4 w-100 container-perfil">
        <div id="fotoUsuario" class="fotoUsuario-perfil bg-white rounded-circle"><img src="../<?=$usuario['foto']?>" style="width: 100%;"></div>
        <label class="editar-foto-perfil m-2" for="fotoPerfil">
            Escolha sua foto de perfil
        </label>
        
        <input type="file" name="fotoPerfil" class="editar-foto-perfil" accept="image/*"/>

        <div class="mx-auto w-100 div-inputs">
            <input type="hidden" name="id" value="<?=$usuario['id']?>">
            <div class="d-flex justify-content-center align-items-center row-6 input-form__grupos">
                <div class="d-flex flex-column col-4  mx-2 input-form__perfil">
                    <label for="email" class="form-label text-light">Email</label>
                    <input type="email" class="form-control input-editar" name="email" value="<?=$usuario['email']?>">
                </div>
            
                <div class="d-flex flex-column col-4 mx-2 input-form__perfil">
                    <label for="usuario" class="form-label text-light">Usuário</label>
                    <input type="text" class="form-control input-editar" name="usuario" value="<?=$usuario['usuario']?>">
                </div>
            </div>

            <div class="d-flex justify-content-center align-items-center row-6 mb-3 input-form__grupos">
                <div class="d-flex flex-column col-4  mx-2 input-form__perfil">
                    <label for="senha" class="form-label text-light ">Senha</label>
                    <input type="password" class="form-control input-editar" name="senha" value="">
                </div>

                <div class="d-flex flex-column col-4  mx-2 input-form__perfil">
                    <label for="confirmarSenha" class="form-label text-light">Confirmar Senha</label>
                    <input type="password" class="form-control input-editar" name="confirmarSenha" value="">
                </div>
                
            </div>
            <div class="d-flex justify-content-center"><button type="submit" name="submit" class="btn btn-primary px-4">Salvar</button></div>
        </div>  
    </form>
</main>
<?php include(__DIR__ . "/../defaultHtmlEnd.php"); ?>