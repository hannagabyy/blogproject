<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>

    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="\blog_project\style\style.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
    <link rel="icon" href="\blog_project\imagens\favicon.ico" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  

</head>

<body>
    <script src="https://kit.fontawesome.com/a679630483.js" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg nav-bar-dark bg-transparent menu-nav w-100 ">
        <div class="container-fluid fs-4">
            <a class="text-logo navbar-brand fs-1 text-light" href="#">Blog</a>
            <button class="navbar-toggler border-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars" style="color: #ecedef;"></i></span>
            </button>

            <div class="offcanvas offcanvas-end text-bg-dark " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="text-logo offcanvas-title" id="offcanvasDarkNavbarLabel">Blog</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                    <div class="offcanvas-body">
                        <p class="nome-usuario-nav"> Olá, <?= $_SESSION['user'] ?> !</p>


                        <ul class="navbar-nav">

                            <div class="dropdown">

                                <li class="nav-item dropdown bg-dark">

                                    <a class="nav-link dropdown-toggle text-light btn bg-secondary badge " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-gear" style="color: #fff;"></i>
                                        Configurações
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="/Blog_project/public/meu_perfil.php">Perfil</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
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