<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gecaltec | Administrador</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, 
              initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>Content/img/favicon.ico">
	<!--[[INICIO]]SCRIPTS-->

	<link rel="stylesheet" href="<?php echo base_url();?>Content/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo base_url();?>Content/fonts/material-icons.css">
	<link rel="stylesheet" href="<?php echo base_url();?>Content/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo base_url();?>Content/css/estilo.css">


	<!--[[FIN]]SCRIPTS-->

	<!--[[INICIO]]SCRIPTS-->
	<script src="<?php echo base_url();?>Scripts/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>Scripts/js/plugins/jquery.validate.min.js"></script>
	<script src="<?php echo base_url();?>Scripts/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>Scripts/js/script.js"></script>
	<!--[[FIN]]SCRIPTS-->
        
        <script src="<?php echo base_url();?>Scripts/js/Jspages/JsLogin.js"></script>

</head>
<body class="cuerpo">

	<nav class="navbar  cabeceraFija1 navbar-ch">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<a class="" href="/index"> <img src="<?php echo base_url();?>Content/img/logo.png" class="logo" alt=""> </a>
				</div>

			</div>
		</div><!-- /.container-fluid -->
	</nav>

	<div class=" fullHeight bg-login">
		<div class="seccion-overlay">
			<div class="seccion-island">
				<div class="container">
					<div class="cnt-login">
						<div class="section-title">
							<h4>
								Iniciar Sesión
							</h4>
							<div class="divider"></div>
						</div>
                                            <form id="form-login" type="post" action="">
                                                <div class="alert alert-danger" id="alertMessage" style="display: none;" role="alert">
                                                    <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                                                    <span id="message"></span>
                                                </div>
                                                <input type="hidden" name="path" id="path" value="<?php echo base_url(); ?>" />
						  <div class="form-ch">
							  <div class="form-group">
								<label for="lgUsuario">Usuario ó Correo Electrónico</label>
								<input type="text" class="form-control" id="lgUsuario" name="lgUser" required >
							  </div>
							  <div class="form-group">
								<label for="lgPsw">Contraseña</label>
								<input type="password" class="form-control" id="lgPsw" name="lgPsw" required>
							  </div>
							  <div class="text-center mg-bottom">
								<a href="<?php echo base_url();?>RememberPassword/">¿Olvidaste tu contraseña?</a>
							  </div>
							  <div class="text-center">
							  	<input type="submit" id="btnIniciarSesion" class="btn btn-ch" value="Iniciar Sesión">

							  </div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>


	</div>

	<footer class="footer">
		Gecaltec © <?=date('Y')?>. Todos los derechos reservados. Realizado por Applet S.A.S
	</footer>

	<script src="<?php echo base_url();?>Scripts/js/validaciones.js"></script>



</body>
</html>
