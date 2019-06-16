<?php 
require_once('../codePhp/connexion.php');                                
require_once("../codePhp/securite.php");
require_once("../codePhp/roleadmin.php");
?>


 
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <link  href="fontawesome/js/all.js">
  <!-- Bootstrap core CSS -->
  <link href="../codePhp/css/bootstrap.min.css" rel="stylesheet">
  <link href="../codePhp/css/mdb.lite.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../codePhp/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../codePhp/css/style.min.css" rel="stylesheet">
	<title>Highcharts Example</title>
	</head>
	
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="highcharts.js"></script>
<script src="exporting.js"></script>
<script src="../../code/modules/export-data.js"></script>
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
            <li style="margin-top: 8px; margin-right:-70px"><a href="../codePhp/logout.php"><strong><span class="glyphicon glyphicon-log-in"> Log<?php echo((isset($_SESSION['PROFILE']))?"Out":"In")?>[<?php echo((isset($_SESSION['PROFILE']))? ($_SESSION['PROFILE']['login']):"")?>]</span></strong></a>
                    </li>
          </strong>
           
        </ul>
      

      </div>

    </div>
  </nav>
 <div class="view full-page-intro" style="background-image: url('../img/6.jpg'); background-repeat: no-repeat; background-size: cover;">

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto;margin-top: 80px"></div>



		<script type="text/javascript">
{

        Highcharts.chart('container', {
            chart: {
                zoomType: 'x'
            },
            title: {
                text: 'Particules en suspension (PM10, PM2,5)'
            },
            subtitle: {
                text: document.ontouchstart === undefined ?
                    'Click et glisser pour zoomer ' : 'Pinch the chart to zoom in'
            },
            xAxis: {
                type: 'datetime'
            },
            yAxis: {
                title: {
                    text: 'PM10'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0.35, Highcharts.getOptions().colors[8]],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[3]).setOpacity(4).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },

            series: [{
                type: 'area',
                name: 'Valeur PM',
                data: [<?php $ps = $pdo->prepare("SELECT UNIX_TIMESTAMP(dateCollecte),pm FROM collecte");
                                        $ps->execute();      
                                        while($row=$ps->fetch(PDO::FETCH_ASSOC))
                                     { extract($row);
                                        //echo "<br>";
                                        echo  "[".$row['UNIX_TIMESTAMP(dateCollecte)'].",".$row['pm']."],";} ?>]
            }]
        });
    }

		</script>
	</body>
</html>
