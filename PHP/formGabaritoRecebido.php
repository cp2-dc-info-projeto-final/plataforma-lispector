<!doctype html>
<html lang="en">

  <head>
    <title>Cantinho dos Gabaritos </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700|Indie+Flower" rel="stylesheet">
    

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../css/aos.css">

    <!-- MENU CSS -->

    <link rel="stylesheet" href="../css/style.css">


  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container mb-3">
          <div class="d-flex align-items-center">
            <div class="site-logo mr-auto">
              <a href="#">Plataforma Lispector<span class="text-primary">.</span></a>
            </div>
            <div class="site-quick-contact d-none d-lg-flex ml-auto ">
              <div class="d-flex site-info align-items-center mr-5">
                <span class="block-icon mr-3"><span class="icon-map-marker text-yellow"></span></span>
              </div>
              <div class="d-flex site-info align-items-center">
                <span class="block-icon mr-3"><span class="icon-clock-o"></span></span>
              </div>
              
            </div>
          </div>
        </div>


        <div class="container">
          <div class="menu-wrap d-flex align-items-center">
            <span class="d-inline-block d-lg-none"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-black"></span></a></span>

              

            <nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto ">
                  <li class="active"><a href="../HTML/index.html" class="nav-link">Home</a></li>
                  <li><a href="formCadastrodeAlunos.php" class="nav-link">Cadastro de Alunos</a></li>
                  <li><a href="formCadastrodeProfessores.php" class="nav-link">Cadastro de Professores</a></li>
                  <li><a href="formLogindeAlunos.php" class="nav-link">Login de Alunos</a></li>
                  <li><a href="formLogindeProfessor.php" class="nav-link">Login de Professores</a></li>                 
                  <li><a href="logoutAluno.php" class="nav-link">Sair</a></li>                 

                </ul>
              </nav>
              <div class="top-social ml-auto">
                <a href="#"><span class="icon-facebook text-teal"></span></a>
                <a href="#"><span class="icon-twitter text-success"></span></a>
                <a href="#"><span class="icon-linkedin text-yellow"></span></a>
              </div>
          </div>
        </div>

       

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center ">
             
            <div class="col-md-5 mt-5 pt-5">
              <h1 class="mb-3 font-weight-bold text-teal"></h1>
              <span class="text-cursive h5 text-red">Bem-vindo ao nosso site</span>
              <h1 class="mb-3 font-weight-bold text-teal">Ciep 404 - Clarice Lispector</h1>
            </div>
            <div class="col-md-6 ml-auto align-self-end">
                <img src="../IMAGENS/kid_transparent.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2>Cantinho dos Gabaritos </h2>
<?php
          $connection = mysqli_connect("localhost", "root", "", "plataforma_lispector");

$sql = "SELECT * FROM questao";

$result = mysqli_query($connection, $sql);

while($_POST = $result->fetch_assoc()){

    $nome = $_POST['nome'];
    $disciplina = $_POST['disciplina'];
    $pergunta1 = $_POST['pergunta1'];
    $pergunta2 = $_POST['pergunta2'];
    $pergunta3 = $_POST['pergunta3'];
}


 echo ("Olá, a professora $nome, enviou o gabarito das questões:"); 

 echo ("<BR><BR>Questão 1: $pergunta1<br>"); 
 echo ("Resposta: Pedro Álvares Cabral<br>");
 echo ("Questão 2: $pergunta2<br>");
 echo ("Resposta: 6<br>");
 echo ("Questão 3: $pergunta3<br>");
 echo ("Resposta: Enquanto o sujeito é aquele ou aquilo de que(m) se fala, o predicado é a informação dada sobre o sujeito.<br>");
?>
          </div>
          <div>
             <?php
                  session_start();
                  if (isset($_SESSION["erro"])) {
                    echo $_SESSION["erro"];
                    unset($_SESSION["erro"]);
                  }
                ?> 
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="footer-heading mb-3">Obrigada !</h2>
            <p class="mb-5">A plaraforma lispector, fica feliz em ajudar!
           
          </div>
 
            </div>
          </div>
        </div>
        

        </div>
      </div>
    </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>

