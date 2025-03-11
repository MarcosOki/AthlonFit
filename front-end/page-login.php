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
                    <span class="fs-1 mb-0">thlon</span>
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
    <section class="bg-dark" id="section-login">
        <form action="database/req/login.php" method="POST" class="form-group d-flex flex-column align-items-center">
            <div>
                <div class="mb-3 col-lg-12 col-md-6 col-sm-12">
                    <label for="usuario">Usuário</label>
                    <input id="usuario" type="text" name="usuario" class="form-control">
                </div>
            </div>
            <div>
                <div class="mb-3 col-lg-12 col-md-6 col-sm-12">
                    <label for="senha">Senha</label>
                    <input id="senha" type="password" name="senha" class="form-control">
                </div>
            </div>
            <div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </section>
</body>

</html>