<?php include(__DIR__ . "/../defaultHtml.php"); ?>

<h1 class="titulo-principal text-center display-2 mt-5 text-light">Meu perfil</h1>
<main class="col-md-10 mx-auto">
    <div class="d-flex flex-column justify-content-center align-items-center my-4 w-100 container-perfil">
        <div id="fotoUsuario" class="fotoUsuario-perfil bg-white rounded-circle"></div>
        <label class="editar-foto-perfil m-2" for="fotoPerfil">
             Escolha sua foto de perfil
        </label>
        <input type="file" name="fotoPerfil" class="editar-foto-perfil" accept="image/*"/>
        <div class="mx-auto w-100 div-inputs">
            <form action="" class="form mx-auto m-4" >
                <div class="d-flex justify-content-center align-items-center row-6 input-form__grupos">
                    <div class="d-flex flex-column col-4  mx-2 input-form__perfil">
                        <label for="email" class="form-label text-light">Email</label>
                        <input type="email" class="form-control input-editar" name="email" required>
                    </div>

                    <div class="d-flex flex-column col-4 mx-2 input-form__perfil">
                        <label for="usuario" class="form-label text-light">Usuário</label>
                        <input type="text" class="form-control input-editar" name="usuario" required>
                    </div>
                </div>

                <div class="d-flex justify-content-center align-items-center row-6 mb-3 input-form__grupos">
                    <div class="d-flex flex-column col-4  mx-2 input-form__perfil">
                        <label for="senha" class="form-label text-light ">Senha</label>
                        <input type="senha" class="form-control input-editar" name="senha" required>
                    </div>

                    <div class="d-flex flex-column col-4  mx-2 input-form__perfil">
                        <label for="confirmarSenha" class="form-label text-light">Confirmar Senha</label>
                        <input type="text" class="form-control input-editar" name="confirmarSenha" required>
                    </div>
                    
                </div>
                <div class="d-flex justify-content-center"><button type="submit" name="submit" class="btn btn-primary px-4">Salvar</button></div>
                
            </form>
        </div>
        
        
        <!-- <div class="d-flex justify-content-center align-itens-center"></div>
            <form id="" class="" action="" method="POST">
                <div class="d-flex justify-content-between">
                    <div id="" class="my-3">
                        <label for="inputEmail" class="form-label text-light fs-6">Email</label>
                        <div class="input-group">
                            <input type="email" class="form-control input-editar" name="email" required />
                        </div>
                    </div>

                    <div id="usuario" class="my-3">
                        <label for="inputUsuario" class="form-label text-light fs-6">Usuário</label>
                        <div class="input-group">
                            <input type="text" class="form-control input-editar" name="usuario" required />
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div id="senha" class="my-3">
                        <label for="senha" class="form-label text-light fs-6">Senha</label>
                        <div class="input-group">
                            <input type="password" class="form-control input-editar" name="senha" required>
                        </div>
                    </div>
                    <div id="ConfirmarSenha" class="my-3">
                        <label for="confirmarSenha" class="form-label text-light fs-6"> Confirmar Senha</label>
                        <div class="input-group w-100">
                            <input type="password" class="form-control input-editar" name="confirmarSenha" required>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center"><button type="submit" name="submit" class="btn btn-primary px-4">Salvar</button></div>
        </div> -->
    </div>
</main>
<?php include(__DIR__ . "/../defaultHtmlEnd.php"); ?>