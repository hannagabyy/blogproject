<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
        <link rel="icon" href="\blog_project\imagens\favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./style/style.css">
    </head>
    
    <body>
                 
        <main class="w-100 h-100 d-flex align-items-center justify-content-center main-login"> 
                
            <form class="formulario-login p-4 rounded shadow-lg " method="POST">
                <h1 class="text-center mb-3 text-light">LOGIN</h1>
                <p class="text-logo text-center">Blog</p> 
                
                <div id="usuario" class="mb-3 w-50 mx-auto">
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
                    <input type="password" class="form-control" name="senha" required/>
                    </div>
                </div>
                
                <div class="d-flex justify-content-center"><button type="submit" class="btn btn-submit px-4 mt-4 w-50"><span>Entrar</span></button></div>
                <div class="d-flex justify-content-center mt-2"><p>Ainda não tem conta? </p><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"style="color:#5568fe" href="./public/cadastrar.php">Cadastre-se</a></div>
            </form>
            
        </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.2/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="\Blog_project\javascript\alertas.js"></script>
    <script src="https://kit.fontawesome.com/a679630483.js" crossorigin="anonymous"></script>
   
    </body>
</html>