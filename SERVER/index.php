<?php 
require_once("codePhp/connexion.php");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Pollution de l'Air au Senegal</title>
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"> -->
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <link  href="fontawesome/js/all.js">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.lite.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css" src="style.css"> </style>
  <script type="text/javascript" src="script.js"></script>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">
      <a class="navbar-brand" href="" >
        <strong>SEN'AIR</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Acceuill
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" target="_blank">Dispositifs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/graphe" target="_blank">Analyse & Bilan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="footer" target="_blank">Apropos de SEN'AIR</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="https://www.facebook.com/" class="nav-link" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://twitter.com/" class="nav-link" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://snapchat.com/" class="nav-link" target="_blank">
              <i class="fab fa-snapchat-ghost"></i>
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('img/3.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center" style="margin-top: 50px">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center text-md-left">

            <h1 class="display-4 font-weight-bold">SEN’AIR,prévision de la qualité de l’air</h1>

            <hr class="hr-light">

            <p>
              <strong>SEN’AIR, plate-forme nationale de prévision de la qualité de l’air</strong>
            </p>

            <p class="mb-4 d-none d-md-block">
              <strong>SEN’AIR, plate-forme nationale de prévision de la qualité de l’air, est l’une des composantes du dispositif français de surveillance et de gestion de la qualité de l’air, en complément des informations fournies par les réseaux de mesure et d’observation « physiques ».</strong>
            </p>

            <!-- <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-indigo btn-lg">
              <i class="fas fa-graduation-cap ml-2"></i>
            </a> -->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">

            <!--Card-->
            <div class="card" >

              <!--Card content-->
              <div class="card-body">

                <!-- Form -->
                <!-- Material form login -->

  <!--Card content-->
    <!-- Form -->
    <form class="text-center" style="color: #757575;" id="authentication" action="codePhp/recup.php" method="POST">
      <h5 class="card-header info-color white-text text-center py-4">
    <strong>Authentification</strong>
  </h5>
      <!-- Email -->
      <div class="md-form">
        <input type="text" id="materialLoginFormEmail" class="form-control" name="login" required>
        <label for="materialLoginFormEmail" style="margin-left: -20px">Login</label>
      </div>
      <!-- Password -->
      <div class="md-form">
        <input type="password" id="materialLoginFormPassword" class="form-control" name="password" required>
        <label for="materialLoginFormPassword" style="margin-left: -45px">Mot de passe</label>
      </div>
      <div class="d-flex justify-content-around" >
        <!-- <div style="margin-left: 175px">
          Forgot password
          <a href="" >Forgot password?</a>
        </div> -->
      </div>
      <!-- Sign in button -->
      <button class="btn btn-info" type="submit">Valider</button>
      
      <!-- Register -->
      <p style="margin-left: 65px">Je ne suis pas membre ?
        <a href="codePhp/inscription.php"> S'inscrire</a>
      </p>
    </form>
    <!-- Form -->

</div>
<!-- Material form login -->
                <!-- Form -->

              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
      <!-- Content -->

    </div>
  
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank" role="button">Download MDB
        <i class="fas fa-download ml-2"></i>
      </a>
      <a class="btn btn-outline-white" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Start free tutorial
        <i class="fas fa-graduation-cap ml-2"></i>
      </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/mdbootstrap" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/MDBootstrap" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
        <i class="fab fa-google-plus-g mr-3"></i>
      </a>

      <a href="https://dribbble.com/mdbootstrap" target="_blank">
        <i class="fab fa-dribbble mr-3"></i>
      </a>

      <a href="https://pinterest.com/mdbootstrap" target="_blank">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

      <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
        <i class="fab fa-github mr-3"></i>
      </a>

      <a href="http://codepen.io/mdbootstrap/" target="_blank">
        <i class="fab fa-codepen mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>
