<?php
	$pageTitle = 'Quejas y Apelaciones';
	include("cabecera.php");
?>

	<!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
      <main>


        <section class="contenedor_form">
          <div class="container">

				<h2 class="hr">QUEJAS Y APELACIONES</h2>
				<form action="mail/envio_queja_apelacion.php" method="post" id="fr_form_queja" name="form_queja">

				  	<div class="row off1">
				  		<div class="grid_6">
				  			<label for="sl_lista_tipo">¿Que deseas interponer? <span class="obligatorio">*</span></label>
				  			<select name="lista_tipo" id="sl_lista_tipo" required>
				  				<option value="">[[Seleccione...]]</option>
				  				<option value="QUEJA">Queja</option>
				  				<option value="APELACIÓN">Apelación</option>
				  			</select>
				  		</div>
				  		<div class="grid_6">
				  			<label for="inp_ciudad">Ciudad <span class="obligatorio">*</span></label>
				  			<input type="text" name="ciudad" id="inp_ciudad" required>
				  		</div>
				  	</div>

				  	<hr>

				  	<h3>DATOS DE LA PERSONA</h3>

				  	<div class="row off1">
				  		<div class="grid_6">
				  			<label for="inp_nombre">Nombre <span class="obligatorio">*</span></label>
				  			<input type="text" name="nombre" id="inp_nombre" required>
				  		</div>
				  		<div class="grid_6">
				  			<label for="inp_no_documento">No. Documento <span class="obligatorio">*</span></label>
				  			<input type="text" name="no_documento" id="inp_no_documento" required>
				  		</div>
				  	</div>
				  	<div class="row off1">
				  		<div class="grid_6">
				  			<label for="inp_telefono">Telefono<span class="obligatorio">*</span></label>
				  			<input type="text" name="telefono" id="inp_telefono" required>
				  		</div>
				  		<div class="grid_6">
				  			<label for="">Correo Electrónico<span class="obligatorio">*</span></label>
				  			<input type="email" name="correo" id="inp_correo" required>
				  		</div>
				  	</div>

				  	<hr>

					<h3>INFORMACIÓN DEL PROYECTO</h3>

					<div class="row off1">
						<div class="grid_6">
							<label for="inp_nombre_proyecto">Nombre del Proyecto<span class="obligatorio">*</span></label>
							<input type="text" name="nombre_proyecto" id="inp_nombre_proyecto" required>
						</div>
					</div>

					<div class="row off1">
						<div class="grid_6">
							<label for="inp_direccion_pro">Dirección</label>
							<input type="text" name="direccion_pro" id="inp_direccion_pro">
						</div>
						<div class="grid_6">
							<label for="inp_no_cotizacion">Número de cotización<span class="obligatorio">*</span></label>
							<input type="text" name="no_cotizacion" id="inp_no_cotizacion" required>
						</div>
					</div>

			  		<hr>

					<h3>DESCRIPCIÓN DE LA QUEJA O APELACIÓN</h3>

					<div class="row off1">
						<div class="grid_12">
							<label for="inp_mensaje_queja">Mensaje <span class="obligatorio">*</span></label>
							<textarea name="mensaje_queja"  id="inp_mensaje_queja" rows="12" required></textarea>
						</div>

						<div class="mfControls grid_12">
							  <input class="btn" type="submit" id="btn_enviar_queja" name="boton_enviar" value="Enviar">
						</div>
					</div>
				</form>

          </div>
	  </section>




  </main>

<?php include ("pie-pagina.php");?>
