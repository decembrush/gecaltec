<?php
	$pageTitle = 'Contacto';
	include("cabecera.php");
?>


<main>
	<div class="container">
		<div class="buscador_dictamen">
			<div class="row">
				<div class="grid_6">
					<input type="text" placeholder="Buscar dictamen..." class="grid_6"/>
				</div>
				<div class="grid_6">
					<a href="#" onclick="cambiar('ejemplo'); return false;" class="btn">Buscar</a>
				</div>
			</div>
		</div>
		<div id="ejemplo" style="display: none;">
		ESTE DICTAMEN NO HA SIDO EXPEDIDO POR GECALTEC S.A.S.
		</div>
	</div>
</main>

<?php include ("pie-pagina.php");?>
