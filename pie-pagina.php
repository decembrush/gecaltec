		<!--
		========================================================
								FOOTER
		========================================================
		-->
		<footer>
			<section class="well3">
				<div class="container">
					<ul class="row contact-list">
					  <li class="grid_4">
						<div class="box">
						  <div class="box_aside">
							<div class="icon2 fa-map-marker"></div>
						  </div>
						  <div class="box_cnt__no-flow">
							<address>Transv. 26 No. 53C - 28<br/> Bogotá, Colombia</address>
						  </div>
						</div>
						<div class="box">
						  <div class="box_aside">
							<div class="icon2 fa-envelope"></div>
						  </div>
						  <div class="box_cnt__no-flow"><a href="mailto:comercial@nacionaldecertificaciones.com">comercial@gecaltec.com</a></div>
						</div>
					  </li>
					  <li class="grid_4">
						<div class="box">
						  <div class="box_aside">
							<div class="icon2 fa-phone"></div>
						  </div>
						  <div class="box_cnt__no-flow">+[57][1] 756-85-86</div>
						</div>
						<div class="box">

						</div>
					  </li>
					  <li class="grid_4">
						<div class="box">
						  <div class="box_aside">
							<div class="icon2 fa-facebook"></div>
						  </div>
						  <div class="box_cnt__no-flow"><a href="#" >Siguenos en facebook</a></div>
						</div>
						<div class="box">
						  <div class="box_aside">
							<div class="icon2 fa-twitter"></div>
						  </div>
						  <div class="box_cnt__no-flow"><a href="#">Siguenos en Twitter</a></div>
						</div>
					  </li>
					</ul>
				</div>
			</section>
			<section>
			  <div class="container">
				<div class="copyright">Gecaltec © <span id="copyright-year"></span>. Todos los derechos reservados. Realizado por <a rel="nofollow" href="http://www.applet.com.co" target="_blank">Applet S.A.S</a>
				</div>
			  </div>
			</section>
		</footer>

	</div>
    <script src="js/script.js"></script>
	<script type="text/javascript" src="js/tabulous.js"></script>
	<script type="text/javascript" src="js/tabulousjs.js"></script>
	<script type="text/javascript">
		function cambiar(esto)
			{
				vista=document.getElementById(esto).style.display;
				if (vista=='none')
					vista='block';
				else
					vista='none';

				document.getElementById(esto).style.display = vista;
			}
	</script>
	<!--<script type="text/javascript">
		(function(){
			var formulario = document.getElementById('fr_form_cotizacion'),
			elementos = formulario.elements,
			boton = document.getElementById('btn_enviar_cotizacion');

			var validarNombre = function(){
				if (formulario.propietario_obra.value == 0){
					alert("Complete el campo propietario de la obra")
				}
			}

			var validar = function(){
				validarNombre();
			};

			formulario.addEventListener("submit", validar);
		}())
	</script>-->
  </body>
</html>
