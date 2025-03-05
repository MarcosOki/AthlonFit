<?php 
if(isset($_GET['success'])){
  echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('section-fale-conosco').scrollIntoView();
            });
            alert('Mensagem enviada com sucesso!');
          </script>";
}else if(isset($_GET["error"])){
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
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bg-dark">
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
                      <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-facebook-f"></i></a>
                      <!-- Dribbble -->
                      <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-dribbble"></i></a>
                      <!-- Twitter -->
                      <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-twitter"></i></a>
                      <!-- Google + -->
                      <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-google-plus-g"></i></a>
                      <!-- Linkedin -->
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
          
          </div>
          <!-- End of .container -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>