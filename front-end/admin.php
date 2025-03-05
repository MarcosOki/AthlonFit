<?php

include "database/conexao.php";

if(isset($_GET["pesquisa"]) || !empty($_GET["pesquisa"])){
    $pesquisa = $_GET["pesquisa"];
    $sql = "SELECT * FROM novos WHERE nome LIKE '%$pesquisa%' OR email LIKE '%$pesquisa%'";
    $result = mysqli_query($conexao, $sql);
    
}else{
    $sql = "SELECT * FROM novos";
    $result = mysqli_query($conexao, $sql);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Athlon</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container">
                <img src="img/logos.jpg" class="logo" alt="...">
                <a class="navbar-brand col-md-6 fs-1" href="#">Athlon</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav fs-5">
                        <li class="nav-item">
                            <a class="nav-link active mx-3" aria-current="page" href="#">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-3" href="#">Equipe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-3" href="#">Seviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-3" href="fale-conosco.php">Fale-conosco</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section id="main-admin" class="bg-dark d-flex flex-column " style="height: 90vh;">
        <form method="GET" class="pt-3 d-flex justify-content-center py-5" style="background-image: url('./img/bg-admin.jpg');background-size: cover;">
            <div class=" w-50 d-flex flex-column align-items-center gap-3">
                <label for="exampleFormControlInput1" class="form-label text-white display-3">Pesquisar</label>
                <input type="text" name="pesquisa" class="form-control rounded-pill" id="exampleFormControlInput1" placeholder="Nome">
                <button type="submit" class="btn btn-primary">Pesquisar</button>
            </div>
            </div>
        </form>

        <table class="table table-bordered table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col" class="text-center">Nome</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="w-50 text-center">Mensagem</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $nome = $row['nome'];
                    $email = $row['email'];
                    $mensagem = $row['message'];
                    echo "<tr class='text-center'>
                            <td>$nome</td>
                            <td>$email</td>
                            <td class='text-break'>$mensagem</td>
                            <th class='align-center'><span><button class='btn btn-danger'>Excluir</button></span></th>";
                }
                ?>
            </tbody>
        </table>

    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>