<?php
if (isset($_GET['success'])) {
  echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('section-fale-conosco').scrollIntoView();
            });
            alert('Mensagem enviada com sucesso!');
          </script>";
} else if (isset($_GET["error"])) {
  $msg = $_GET['error'];
  echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('section-fale-conosco').scrollIntoView();
            });
            alert('Error: $msg!');
          </script>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atlhon</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="shortcut icon" href="img/logos.ico">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bg-dark">
  <header>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-1">
      <div class="container d-flex align-items-center">
        <a class="navbar-brand d-flex align-items-center">
          <img src="img/logos.png" class="logo img-fluid me-2" alt="Logo" style="height: 50px;">
          <span class="fs-1 mb-0 ">thlon</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
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
                <li><a class="dropdown-item bg-dark text-light hover:bg-light hover:text-dark" href="performance.html">Dicas de Performance</a></li>
                <li><a class="dropdown-item bg-dark text-light hover:bg-light hover:text-dark" href="nutrição.html">Nutrição</a></li>
                <li><a class="dropdown-item bg-dark text-light hover:bg-light hover:text-dark" href="vestuário.html">Vestimenta Especializada</a></li>
              </ul>
            </li>

            </li>
            <li class="nav-item">
              <a class="nav-link mx-3" href="fale-conosco.php">Fale-conosco</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-3" href="admin.php">Administração</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="main-fale-conosco">
    <div>
      <h1 class="display-1"><strong>Fale Conosco</strong></h1>
      <h2 class="display-6 lead">Seja qual for a sua dúvida, a Athlon tem o suporte ideal para você.</h2>
    </div>
  </section>

  <section class="bg-dark" id="section-fale-conosco">
    <form action="database/req/create-message.php" method="POST">
      <p class="text-white display-5">Nos envie sua dúvida!</p>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-white">Nome</label>
        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-white">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label text-white">Mensagem</label>
        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </section>
  <footer class="w-100 bg-dark">
    <div class="container ">

      <footer class="text-white text-center text-lg-start bg-dark">
        <!-- Grid container -->
        <div class="container p-4">
          <!--Grid row-->
          <div class="row mt-4">
            <!--Grid column-->
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
              <h5 class="text-uppercase mb-4">Quem Somos ?</h5>

              <p>
                Somos uma empresa comprometida em oferecer produtos de alta qualidade para atletas e entusiastas do fitness, promovendo saúde e desempenho.
                Nosso objetivo é inspirar e apoiar cada jornada, ajudando você a alcançar seu melhor.
              </p>

              <p>
                Siga a <strong>Athlon</strong> nas redes sociais.
              </p>

              <div class="mt-4">
                <!-- Facebook -->
                <a type="button" href="https://www.facebook.com/athlonsports" class="btn btn-floating text-light btn-lg border border-0" style="background-color: #3b5998;">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <!-- Instagram -->
                <a type="button" href="https://www.instagram.com/athlonsports/" class="btn btn-floating text-light btn-lg border border-0" style="background-color: #c13584;">
                  <i class="fab fa-instagram"></i>
                </a>
                <!-- X -->
                <a type="button" href="https://x.com/AthlonSports" class="btn btn-floating text-light btn-lg border border-0" style="background-color: #141414;">
                  <i class="fab fa-x-twitter"></i>
                </a>
                <!-- YouTube -->
                <a type="button" href="https://www.youtube.com/@Athlon_Sports" class="btn btn-floating text-light btn-lg border border-0" style="background-color: #d11111;">
                  <i class="fab fa-youtube"></i>
                </a>
              </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase mb-4 pb-1">Onde Estamos</h5>



              <ul class="fa-ul" style="margin-left: 1.65em;">
                <li class="mb-3">
                  <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Itaquatiara, 222-344 - Maguari, Ananindeua - PA, 67146-263, Brasil.</span>
                </li>
                <li class="mb-3">
                  <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Maguari, Ananindeua - PA, 67145-100, Brasil.</span>
                </li>
                <li class="mb-3">
                  <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">athloncontato@gmail.com</span>
                </li>
                <li class="mb-3">
                  <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+55 91 98500-4141</span>
                </li>
              </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase mb-4">Horários</h5>

              <table class="table text-center text-white">
                <tbody class="fw-normal">
                  <tr>
                    <td>seg - sex:</td>
                    <td>06:00 - 23:00</td>
                  </tr>
                  <tr>
                    <td>Sábado:</td>
                    <td>07:00 - 22:00</td>
                  </tr>
                  <tr>
                    <td>Domingo:</td>
                    <td>07:00 - 13:00</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2025 Copyright:
          <a class="text-white" href="https://github.com/MarcosOki/UepaAvaliacao">Daniel Marim - Marcos Okita - Fillipe Martins</a>
        </div>
        <!-- Copyright -->
      </footer>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>