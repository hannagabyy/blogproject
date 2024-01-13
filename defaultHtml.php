<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.2/dist/sweetalert2.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link rel="stylesheet" href="\blog_project\style\style.css">
         <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
    </head>
    
    <body>
        <script src="https://kit.fontawesome.com/a679630483.js" crossorigin="anonymous"></script>
        <nav class="navbar navbar-expand-lg nav-bar-light bg-transparent menu-nav w-100 ">
            <div class="container-fluid fs-4">
                <a class="text-logo navbar-brand fs-1 text-light" href="#">Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span ><i class="fa-solid fa-bars" style="color: #ecedef;"></i></span>
                </button>
                
                <div class="offcanvas offcanvas-end text-bg-dark " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="text-logo offcanvas-title" id="offcanvasLightNavbarLabel">Blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    
                    <div class="offcanvas-body">
                        <ul class="navbar-nav mx-auto border border-secondary rounded-3 mb-2">
                            <li class="nav-item mx-2 nav-menu-item ">
                                <a class="nav-link active text-light " aria-current="page" href="/Blog_project/public/home.php">Página inicial</a>
                            </li>
                            <li class="nav-item mx-2 nav-menu-item">
                                <a class="nav-link text-light " href="\Blog_project\public\amigos\meus_amigos.php">Amigos</a>
                             </li>
                             <li class="nav-item mx-2 nav-menu-item">
                                <a class="nav-link text-light " href="\Blog_project\public\post\meus_posts.php">Meus posts</a>
                             </li>
                             
                        </ul>
                        <form class="d-flex g-3" role="search" method="post">
                            <input class="form-control m-2" type="search" placeholder="Digite aqui" aria-label="Search" name="busca_amigo" id="busca_amigo" onkeyup="buscarAmigo(this.value)">
                            <button class="btn btn-outline-success w-40 h-70 m-auto" name="botao_pesquisar" id="botao_pesquisar"> <i class="fa-solid fa-magnifying-glass"></i></button>
                            <div style="display: none;">Resultados</div>
                        </form>
                        
                            <div class="offcanvas-body">
                                <ul class="navbar-nav">
                                    <div class="dropdown">
                                    <li class="nav-item dropdown">
                                            <button class="btn btn-secondary btn-sm m-1 mx-3 m-auto" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-gear" style="color: #fff;"></i>
                                                Configurações
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="./public/perfil.php">Perfil</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="\Blog_project\logout.php">Sair</a></li>
                                            </ul>
                                    </li>
                                    </div>
                                </ul>  
                            </div>
                          
                    </div>
                </div>
            </div>

        </nav>
        
     
 