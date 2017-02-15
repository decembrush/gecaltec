<?php
	$pageTitle = 'Consultar Dictamen';
	include("cabecera.php");
?>


<main>
	<div class="container">
		<div class="buscador_dictamen">
			<div class="row">
				<div class="grid_6">
					<label for="inp_no_dictamen">Número de Dictamen</label>
					<input type="text" placeholder="Ej. 001-17" id="inp_no_dictamen">
				</div>
				<div class="grid_6" id="hiddenNumberSheet" style="display:none;">
					<label for="inp_no_hoja">Número de Hoja</label>
					<input type="text" placeholder="Ej. -24" id="inp_no_hoja">
				</div>
				<div class="mfControls grid_12">
					<a href="#" class="btn" id="btn_consulta">Consultar Dictamen</a>
				</div>

			</div>
			<ul class="row product-list">
              <li class="grid_4">
				<div class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-download"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="documentos/publicaciones/retie_2013.pdf" target="_blank">Dictamen 001-17-24.</a></h3>
                    <p>Descripción del dictamen. <br> <a href="documentos/publicaciones/retie_2013.pdf" target="_blank" >Descargar Aquí</a></p>

                  </div>
                </div>


              </li>
			</ul>
		</div>
		<div id="ejemplo" style="display: none;">
		ESTE DICTAMEN NO HA SIDO EXPEDIDO POR GECALTEC S.A.S.
		</div>
	</div>
</main>

<?php include ("pie-pagina.php");?>
