<?php

	$destino = "calidad@gecaltec.com.co";
	//decembrushdg@gmail.com

	/*VARIABLES PARA CONTACTO*/
	$interponer = $_POST["lista_tipo"];
	$ciudad = $_POST["ciudad"];
	$nombre = $_POST["nombre"];
	$no_documento = $_POST["no_documento"];
	$telefono = $_POST["telefono"];
	$correo = $_POST["correo"];
	$nombre_proyecto = $_POST["nombre_proyecto"];
	$direccion_pro = $_POST["direccion_pro"];
	$no_cotizacion = $_POST["no_cotizacion"];
	$mensaje_queja = $_POST["mensaje_queja"];

	$nombre_contact = $_POST["nombre_contact"];
	$apll_contact = $_POST["apll_contact"];
	$correo_contac = $_POST["correo_contac"];
	$tel_contact = $_POST["tel_contact"];
	$mensaje_contact = $_POST["mensaje_contact"];


	/*MENSAJE DEL CORREO*/
	$contenido="Se ha interpuesto una: " . $interponer .
	"\nCiudad: " . $ciudad .
	"\nNombre: " . $nombre .
	"\nNumero de Documento: " . $no_documento .
	"\nTelefono: " . $telefono .
	"\nCorreo: " . $correo .
	"\nNombre del Proyecto: " . $nombre_proyecto .
	"\nDirección del Proyecto: " . $direccion_pro .
	"\nNumero de Cotizacion: " . $no_cotizacion .
	"\nMensaje: " . $mensaje_queja;

	/*
	funcion mail: 1. a quien se le envia el correo, 2. el asunto para el correo, 3. contenido o la variable con el mensaje que va a llegar
	*/
	mail($destino,"Queja o apelación desde la página de Gecaltec", $contenido);

	/*Funcion header sirve para redireccionar el usuario a una pagina una vez se envie el mensaje*/
	header("Location:../cotizacion-gracias.php");
?>
