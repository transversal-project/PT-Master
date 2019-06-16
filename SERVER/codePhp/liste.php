<?php
require_once("securite.php");
require_once("roleadmin.php");
require_once("connexion.php");
$req = "SELECT id,nom,prenom,role,login,password,inscription FROM users "; 
$ps=$pdo->prepare($req); 
$ps->execute(); 
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
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
      <a href="" class="navbar-brand"  target="_blank" >
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
            <a class="nav-link"  disabled>Acceuill
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" target="_blank">Dispositifs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../graphe" target="_blank">Analyse & Bilan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" target="_blank">Apropos de SEN'AIR</a>
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
          </li><strong>
            <li style="margin-top: 8px; margin-right:-70px"><a href="logout.php"><strong><span class="glyphicon glyphicon-log-in"> Log<?php echo((isset($_SESSION['PROFILE']))?"Out":"In")?>[<?php echo((isset($_SESSION['PROFILE']))? ($_SESSION['PROFILE']['login']):"")?>]</span></strong></a>
                    </li>
          </strong>
           
        </ul>
      

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('../img/2.jpg'); background-repeat: no-repeat; background-size: cover;">
      <div class="mask rgba-black-light d-flex justify-content-center align-items-center" style="margin-top: 50px">
      <div class="container" >
        <div class="row wow fadeIn">
          <div class="col-md-6 mb-4 white-text text-center text-md-left">
            <!-- <div class="view hm-black-strong "> -->
                <div class="card " style="width: 60rem;">
                    <div class="card-block">
                        <table id="dt-select" class="table table-striped table-bordered" cellspacing="0" width="100%">
                          <thead >
                        <tr>
                            <th><strong>Nom</strong></th>
                            <th><strong>Prenom</strong></th>
                            <th><strong>Role</strong></th>
                            <th><strong>Login</strong></th>
                            <th><strong>Password</strong></th>
                            <th><strong>Validation</strong></th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($et=$ps->fetch()) { ?>
                        <tr>
                            <td name="id" hidden>
                                <?php echo($et['id'])?>
                            </td>
                            <td name="nom" value="ho">
                                <?php echo($et['nom'])?>
                            </td>
                            <td name="prenom">
                                <?php echo($et['prenom'])?>
                            </td>
                            <td name="role">
                                <?php echo($et['role'])?>
                            </td>
                            <td name="login">
                                <?php echo($et['login'])?>
                            </td>
                            <td name="password">
                                <?php echo($et['password'])?>
                            </td>
                            <td name="inscription">
                                <a href="updateInscription.php?code=<?php echo($et['id']) ?>"  >
                                <input type="button" name="Valider" id="inscription" value="<?php if($et['inscription']) echo "Desinscrire"; else echo "Valider"; ?> "></a>
                                <!-- <input type="button" name="Valider" id="Valider" value="Valider" hidden>
                                <input type="button" name="Desinscrire" id="Desinscrire" value="Desinscrire" hidden> -->


                            </td>
                            
                        </tr>
                        <?php } ?>
                        
                    </tbody>
                        </table>
                    </div>
                </div>
              <!-- </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
    <!-- Mask & flexbox options-->

  
  <!-- Full Page Intro -->
  <!--Footer-->
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
