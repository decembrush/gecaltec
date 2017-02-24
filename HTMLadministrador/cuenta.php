<?php
	$pageTitle = 'Cuenta | Administrador';
	include("header.php");
?>

	<div class="contenido">
		<div class="container">
			<div class="cnt-form-sitio">
				<form>
				  <div class="form-ch">
					  <div class="section-title">
						<h4>
							Datos Basicos
						</h4>
						<div class="divider"></div>
					  </div>
					  <div class="form-group">
						<label for="">Nombre de Usuario</label>
						<input type="text" class="form-control" value="Charlie">
					  </div>
					  <div class="form-group">
						<label for="">Correo Electrónico</label>
						<input type="text" class="form-control" value="decembrushdg@gmail.com">
					  </div>
					  <div class="section-title">
						<h4>
							Moficar contraseña
						</h4>
						<div class="divider"></div>
					  </div>

					  <div class="form-group">
						<label for="">Contraseña actual</label>
						<input type="password" class="form-control" >
					  </div>
					  <div class="form-group row">
						<div class="col-xs-6">
							<label for="">Nueva contraseña</label>
							<input type="password" class="form-control" >
						</div>
						<div class="col-xs-6">
							<label for="">Repite la contraseña</label>
							<input type="password" class="form-control" >
						</div>
					  </div>

					  <a href="" class="btn btn-ch">Guardar Cambios</a>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php
	include("footer.php");
?>
