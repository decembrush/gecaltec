<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $pageTitle ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>Content/img/favicon.ico">
	<!--[[INICIO]]SCRIPTS-->

	<link rel="stylesheet" href="<?php echo base_url();?>Content/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo base_url();?>Content/fonts/material-icons.css">
	<link rel="stylesheet" href="<?php echo base_url();?>Content/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo base_url();?>Content/datatables/media/css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>Content/datatables/extensions/Buttons/css/buttons.dataTables.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>Content/datatables/extensions/Buttons/css/buttons.bootstrap.min.css">


	<link rel="stylesheet" href="<?php echo base_url();?>Content/css/estilo.css">


	<!--[[FIN]]SCRIPTS-->

	<!--[[INICIO]]SCRIPTS-->
	<script src="<?php echo base_url();?>Scripts/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>Scripts/js/plugins/jquery.validate.min.js"></script>
	<script src="<?php echo base_url();?>Scripts/js/bootstrap.min.js"></script>

	<script src="<?php echo base_url();?>Content/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>Content/datatables/media/js/dataTables.bootstrap.min.js"></script>

	<script src="<?php echo base_url();?>Content/datatables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
	<script src="<?php echo base_url();?>Content/datatables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>Content/datatables/extensions/Buttons/js/buttons.flash.min.js"></script>
	<script src="<?php echo base_url();?>Scripts/js/plugins/jszip.min.js"></script>
	<script src="<?php echo base_url();?>Scripts/js/plugins/pdfmake.min.js"></script>
	<script src="<?php echo base_url();?>Scripts/js/plugins/vfs_fonts.js"></script>
	<script src="<?php echo base_url();?>Content/datatables/extensions/Buttons/js/buttons.html5.min.js"></script>
	<script src="<?php echo base_url();?>Content/datatables/extensions/Buttons/js/buttons.print.min.js"></script>


</head>
<body class="cuerpo">

	<nav class="navbar  cabeceraFija1 navbar-ch">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<a class="" href="<?php echo base_url();?>Dictum/"> <img src="<?php echo base_url();?>Content/img/logo.png" class="logo" alt=""> </a>
				</div>
				<ul class="nav navbar-nav col-md-8 col-sm-8 col-xs-8 ">
						<li class="dropdown pull-right">
							<a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bienvenido <br> <small><?php $data = $this->session->userdata('logged_in'); echo $data["User"]; ?></small> <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url();?>Account/">Mi cuenta</a></li>
								<li><a href="<?php echo base_url();?>Dictum/">Dictamenes</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="<?php echo base_url();?>Login/logout">Cerrar Sesión</a></li>
							</ul>
						</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
    
    <?php echo $content; ?>
    
    <footer class="footer">
		Gecaltec © <?=date('Y')?>. Todos los derechos reservados. Realizado por Applet S.A.S
    </footer>

    <script src="<?php echo base_url();?>Scripts/js/script.js"></script>
    <script src="<?php echo base_url();?>Scripts/js/validaciones.js"></script>
</body>
</html>
