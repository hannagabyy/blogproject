<?php include(__DIR__ . "/../defaultHtml.php"); ?>

<h1 class="titulo-principal text-center display-2 mt-5 text-light">Edite seu perfil</h1>
<main class="col-md-10 mx-auto">
    <form id="salvarPerfil" method="post" enctype="multipart/form-data" class="d-flex flex-column justify-content-center align-items-center my-4 w-100 container-perfil">
        <img id="fotoUsuario" class="fotoUsuario-perfil bg-white rounded-circle animate__animated animate__rubberBand" src="../<?= $usuario['foto'] ?>">
        <label class="editar-foto-perfil m-2" for="fotoPerfil">
            Escolha sua foto de perfil
        </label>

        <input id="inputImage" type="file" name="fotoPerfil" class="editar-foto-perfil"  accept="image/*" hidden />

        <div class="div-editar-meu-perfil">
            <input  type="hidden" name="id" value="<?= $usuario['id'] ?>">
            
            <div class="input-form__perfil">
                <label for="nome" class="form-label text-light">Nome</label>
                <input type="text" class="form-control input-editar" name="nome" value="<?= $usuario['nome']?>">
            </div>

            <div class="input-form__perfil">
                <label for="usuario" class="form-label text-light">Usuário</label>
                <input type="text" class="form-control input-editar" name="usuario" value="<?= $usuario['usuario'] ?>">
            </div>
            <div class="input-form__perfil">
                <label for="email" class="form-label text-light">Email</label>
                <input type="email" class="form-control input-editar editar-email" name="email" value="<?= $usuario['email'] ?>">
            </div>

            <div class="input-form__perfil">
                <label for="senha" class="form-label text-light">Nova Senha</label>
                <input type="password" class="form-control input-editar" name="senha" autocomplete="new-password">
            </div>

            <div class="input-form__perfil">
                <label for="confirmarSenha" class="form-label text-light">Confirmar Senha</label>
                <input type="password" class="form-control input-editar" name="confirmarSenha">
            </div>

            <div class="input-form__perfil">
                <label for="sobre-mim" class="form-label text-light">Sobre Mim</label>
                <textarea type="text" class="form-control input-editar sobre-mim" name="sobreMim"><?=$usuario['sobreMim']?></textarea>
            </div>
            
            <div class="btn-salvar-edicao">
                <button type="submit" name="submit" class="btn btn-primary px-4">Salvar</button>
            </div>
        </div>
    </form>
</main>

<?php include(__DIR__ . "/../defaultHtmlEnd.php"); ?>