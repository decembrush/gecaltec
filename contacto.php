<?php
	$pageTitle = 'Contacto';
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

				<h2>Contacto</h2>
				<form action="mail/envio_contacto.php" method="post" id="fr_form_contacto" name="form_contacto">
				  	<div class="row off1">
						<div class="grid_6">
							<label for="inp_nombre_contact">Nombre <span class="obligatorio">*</span></label>
							<input type="text" name="nombre_contact" id="inp_nombre_contact" required>
						</div>
						<div class="grid_6">
							<label for="inp_apll_contact">Apellido <span class="obligatorio">*</span></label>
							<input type="text" name="apll_contact" id="inp_apll_contact" required>
						</div>
					</div>
					<div class="row off1">
						<div class="grid_6">
							<label for="inp_correo_contac">Correo Electrónico <span class="obligatorio">*</span></label>
							<input type="email" name="apll_contact" id="inp_correo_contac" required>
						</div>
						<div class="grid_6">
							<label for="inp_tel_contact">Teléfono</label>
							<input type="text" name="tel_contact" id="inp_tel_contact">
						</div>
					</div>
					<div class="row off1">
						<div class="grid_12">
							<label for="inp_mensaje_contact">Mensaje</label>
							<textarea name="mensaje_contact"  id="inp_mensaje_contact" rows="12" required></textarea>
						</div>
						<div class="mfControls grid_12">
							  <input class="btn" type="submit" id="btn_enviar_contacto" name="boton_enviar" value="Contactar">
						</div>
					</div>
				</form>

          </div>
	  </section>

	  <div class="row">


			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.7165710661593!2d-74.07640978566663!3d4.6445605434360715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a3507e4abcb%3A0xfdb82e07e568899b!2sTv.+26+%2353c-28%2C+Bogot%C3%A1%2C+Colombia!5e0!3m2!1ses-419!2ses!4v1478738927206" width="100%" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>

		</div>


  </main>

<?php include ("pie-pagina.php");?>
