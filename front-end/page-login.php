<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>

    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-1">
            <div class="container d-flex align-items-center">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="img/logos.png" class="logo img-fluid me-2" alt="Logotipo da Athlon Fitness, Que é a Letra 'A'." style="height: 50px;">
                    <!-- <span class="fs-1 mb-0">thlon</span>--> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav fs-5 ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active mx-3" aria-current="page" href="index.html">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-3" href="equipe.html">Equipe</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDesempenho" role="button" data-bs-toggle="dropdown" aria-expanded="false">Desempenho</a>
                            <ul class="dropdown-menu bg-dark text-light" aria-labelledby="navbarDesempenho">
                                <li><a class="dropdown-item bg-dark text-light" href="performance.html">Dicas de Performance</a></li>
                                <li><a class="dropdown-item bg-dark text-light" href="nutrição.html">Nutrição</a></li>
                                <li><a class="dropdown-item bg-dark text-light" href="vestuário.html">Vestimenta Especializada</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-3" href="fale-conosco.php">Fale Conosco</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-3" href="admin.php">Administração</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class=" text-white d-flex align-items-center justify-content-evenly px-5 overflow-hidden"  id="section-login-page">
        <div class="d-flex flex-column justify-content-around" style="height: 90vh;">
            <div class="w-50">
                <h1 class="display-1">ATHLON</h1>
                <h2 >Painel de Administração para Gerenciamento de Dúvidas da Athlon.</h2>
            </div>
            <button type="button" class="btn btn-outline-light w-25 py-3" data-bs-toggle="modal" data-bs-target="#loginModal" style="border-radius: 50px;">
                Acesso Restrito
            </button>
        </div>

        <img src="img/imagem-page-admin.png" alt="imagem-page-admin" class="">

        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-dark text-white">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="database/req/login.php" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Usuário</label>
                                <input type="text" class="form-control" name="usuario" autocomplete="off" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Senha</label>
                                <input type="password" class="form-control" name="senha" id="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>