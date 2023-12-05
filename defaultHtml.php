<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link rel="stylesheet" href="../style/home.css">
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
                            <li class="nav-item mx-2">
                                <a class="nav-link active text-light" aria-current="page" href="#">Página inicial</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link text-light" href="../posts/post.php">Posts</a>
                             </li>
                             <li class="nav-item mx-2">
                                <a class="nav-link text-light" href="../posts/post.php">Meus posts</a>
                             </li>
                             
                        </ul>
                        <form class="d-flex g-3" role="search">
                            <input class="form-control m-2" type="search" placeholder="Digite aqui" aria-label="Search">
                            <button class="pesquisa__submit border border-secondary bg- transparent rounded-3" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                </svg>
                             </button>
                        </form>
                        
                            <div class="offcanvas-body">
                                <ul class="navbar-nav">
                                    <div class="dropdown">
                                    <li class="nav-item dropdown">
                                            <button class="btn btn-secondary  btn-sm m-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-gear" style="color: #fff;"></i>
                                                Configurações
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="../logout.php">Sair</a></li>
                                            </ul>
                                    </li>
                                    </div>
                                </ul>  
                            </div>
                          
                    </div>
                </div>
            </div>

        </nav>
        
     
 