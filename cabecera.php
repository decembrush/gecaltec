<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $pageTitle ?></title>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/camera.css">
	<link rel="stylesheet" href="css/owl-carousel.css">
	<link rel="stylesheet" href="css/mailform.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script><!--[if lt IE 9]>
	<html class="lt-ie9">
	  <div style="clear: both; text-align:center; position: relative;"><a href="http://windows.microsoft.com/en-US/internet-explorer/.."><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
	</html>
	<script src="js/html5shiv.js"></script><![endif]-->
	<script src="js/device.min.js"></script>

	<!--estilo tabs-->

	<link href='css/tabulous.css' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="page">

	<!--
      ========================================================
      							HEADER
      ========================================================


      -->
      <header>
        <div class="container">
          <div class="brand">
			<a href="./" title="Volver al Inicio">
				<img class="logo-site" src="images/logo.png" alt="Gecaltec" />
			</a>
          </div>
		  <a href="callto:#" class="fa-phone">+[57][1] 756-85-86</a>
          <p>Comunícate con nosotros y descubre ahora porque somos tu mejor opción.</p>
        </div>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
              <ul data-type="navbar" class="sf-menu">
                <li class="active"><a href="./">INICIO</a>
                </li>
				<li><a href="javascript: void(0)">NOSOTROS</a>
                  <ul>
                    <li><a href="presentacion-empresa.php">PRESENTACIÓN DE LA EMPRESA</a></li>
                    <li><a href="independencia-e-integridad.php">INDEPENDENCIA E INTEGRIDAD</a></li>
                    <li><a href="sabia-que.php">SABIA USTED QUE</a></li>
                    <!--
					<li><a href="#">Elit sed do eiusmod
                        <ul>
                          <li><a href="#">Lorem ipsum</a></li>
                          <li><a href="#">Conse adipisicing</a></li>
                          <li><a href="#">Sit amet dolore</a></li>
                        </ul></a>
					</li>
					-->
                  </ul>
                </li>
                <li><a href="publicaciones.php">PUBLICACIONES</a>
                </li>
                <li><a href="cultura-retie-y-retilap.php">CULTURA RETIE <!--Y RETILAP--></a>
					<ul>
						<li><a href="cultura-retie.php">CULTURA RETIE</a></li>
						<!--<li><a href="cultura-retilap.php">CULTURA RETILAP</a></li>-->
						<li><a href="capacitacion.php">CAPACITACIÓN</a></li>
					</ul>
                </li>
                <li><a href="portafolio.php">PORTAFOLIO</a>
					<ul>
						<li><a href="retie.php">RETIE</a></li>
						<!--<li><a href="retilap.php">RETILAP</a></li>-->

   					</ul>
                </li>
				<li><a href="consulta-dictamen.php">CONSULTAR DICTAMEN</a>
                </li>
				<li><a href="javascript: void(0)">CONTÁCTENOS</a>
					<ul>
						<li><a href="contacto.php">CONTÁCTENOS</a></li>
						<li><a href="cotizacion.php">SOLICITUD DE COTIZACIÓN</a></li>
					</ul>
                </li>

              </ul>
            </nav>
			<script>
				$(document).ready(function() {
					$(".sf-menu li").on("click", function() {
						$(".sf-menu li").removeClass("active");
						$(this).addClass("active");
					});
				});
			</script>
          </div>
        </div>
      </header>
