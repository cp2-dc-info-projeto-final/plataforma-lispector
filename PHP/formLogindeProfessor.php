<!doctype html>
<html lang="en">

  <head>
    <title>Login de Professores</title>
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
                  <li class="active"><a href="index.html" class="nav-link">Home</a></li>
                  <li><a href="formCadastrodeAlunos.php" class="nav-link">Cadastro de Alunos</a></li>
                  <li><a href="formCadastrodeProfessores.html" class="nav-link">Cadastro de Professores</a></li>
                  <li><a href="formLogindeAlunos.html" class="nav-link">Login de Alunos</a></li>
                  <li><a href="formLogindeProfessor.html" class="nav-link">Login de Professores</a></li>                 
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
          <h2>Login do Profesor</h2>
          <p>Seja muito bem-vindo(a). Entre! </div>
      </div>
        <div class="row">
          <div class="col-lg-8 mb-5" >
            <form action="P_loginCtrl.php" method="post">
              <div class="form-group row">
  
                <div class="col-md-6">
                <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu E-mail">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua Senha">
                </div>
              </div>
            
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class=" btn-primary text-white py-3 px-5" value="Cadastrar">
                </div>
                <p class="message">Não é cadastrado? <a href="formCadastrodeProfessores.html">Cadastre-se!</a></p>
                <?php
                    session_start();
                    if(array_key_exists('erro', $_SESSION) == true){
                        $erro = $_SESSION["erro"];
                        echo "<br><b>$erro</b>";
                        session_unset();
                    }
                ?>
              </div>
            </form>
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
            <h2 class="footer-heading mb-3">Esqueci minha senha...</h2>
                <p class="mb-5">Esqueceu sua senha? Não se preocupe, a Plataforma Lispector, lhe enviará outra. Basta preencher o campo abaixo, com seu e-mail.</p>
                <h2 class="footer-heading mb-4">Digite seu E-mail:</h2>
                <form action="#" class="d-flex" class="subscribe"> <!--qual a função desse form action? 15/12/2019 relembrando!!-->
                  <input type="text" class="form-control mr-3" placeholder="Email">
                  <input type="submit" value="Enviar" class="btn btn-primary">
                </form>
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

