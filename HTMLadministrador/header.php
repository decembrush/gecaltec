<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $pageTitle ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<!--[[INICIO]]SCRIPTS-->

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="fonts/material-icons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link rel="stylesheet" href="datatables/media/css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="datatables/extensions/Buttons/css/buttons.dataTables.min.css">
	<link rel="stylesheet" href="datatables/extensions/Buttons/css/buttons.bootstrap.min.css">


	<link rel="stylesheet" href="css/estilo.css">


	<!--[[FIN]]SCRIPTS-->

	<!--[[INICIO]]SCRIPTS-->
	<script src="js/jquery.min.js"></script>
	<script src="js/plugins/jquery.validate.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script src="datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="datatables/media/js/dataTables.bootstrap.min.js"></script>

	<script src="datatables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
	<script src="datatables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
	<script src="datatables/extensions/Buttons/js/buttons.flash.min.js"></script>
	<script src="js/plugins/jszip.min.js"></script>
	<script src="js/plugins/pdfmake.min.js"></script>
	<script src="js/plugins/vfs_fonts.js"></script>
	<script src="datatables/extensions/Buttons/js/buttons.html5.min.js"></script>
	<script src="datatables/extensions/Buttons/js/buttons.print.min.js"></script>


</head>
<body class="cuerpo">

	<nav class="navbar  cabeceraFija1 navbar-ch">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<a class="" href="dictamenes.php"> <img src="img/logo.png" class="logo" alt=""> </a>
				</div>
				<ul class="nav navbar-nav col-md-8 col-sm-8 col-xs-8 ">
						<li class="dropdown pull-right">
							<a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bienvenido <br> <small>charlie</small> <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="cuenta.php">Mi cuenta</a></li>
								<li><a href="dictamenes.php">Dictamenes</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="index.php">Cerrar Sesión</a></li>
							</ul>
						</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
