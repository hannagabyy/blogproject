<!doctype html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastre-se</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="icon" href="\blog_project\imagens\favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
    </head>

    <body>
        <main class="w-100 h-100 d-flex align-items-center justify-content-center"> 
            <form id="formularioCadastrar" class="formulario-login p-4 rounded" method="post">
                <h1 class="text-center mb-3 text-light">CADASTRE-SE</h1>
                <p class="text-logo text-center">Blog</p> 
                <div id="email" class="mb-3 w-50 mx-auto">
                    <label for="inputEmail" class="form-label text-light fs-6">Email</label>
                    <div class="input-group">      
                        <span class="input-group-text" style="background-color:#252A34;" id="basic-addon1"><i class="fa-solid fa-envelope" style="color: white;"></i></span>
                        <input type="email" class="form-control" name="email" required/>
                    </div>
                </div>

                <div id="usuario" class="mb-3 w-50  mx-auto">
                    <label for="inputUsuario" class="form-label text-light fs-6">Usuário</label>
                    <div class="input-group">      
                        <span class="input-group-text" style="background-color:#252A34;" id="basic-addon1"><i class="fa-solid fa-circle-user" style="color: white;"></i></span>
                        <input type="text" class="form-control" name="usuario" required/>
                    </div>
                </div>

                <div id="senha" class="w-50 mx-auto">
                    <label for="inputSenha" class="form-label text-light fs-6">Senha</label>
                    <div class="input-group">
                        <span class="input-group-text" style="background-color:#252A34;" id="basic-addon2"><i class="fa-solid fa-lock" style="color: white;"></i></span>
                        <input type="password" class="form-control" name="senha" required autocomplete="new-password"/>
                    </div>
                </div>
                <div class="d-flex justify-content-center"><button type="submit" name="submit" class="btn btn-submit mt-4 btn-cadastrar" ><span>Cadastrar</span></button></div>
                <div class="d-flex justify-content-center mt-2"><p>Já possui conta? </p><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="../index.php" style="color:#5568fe"> Entrar</a></div>
            </form>
            
        </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a679630483.js" crossorigin="anonymous"></script>
    <script src="\Blog_project\javascript\cadastrar_usuario.js"></script>
    <script src="\Blog_project\javascript\alertas.js"></script>
    </body>
</html>