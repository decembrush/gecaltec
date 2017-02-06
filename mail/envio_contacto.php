<?php

	$destino = "gecaltec16@gamil.com";

	/*VARIABLES PARA CONTACTO*/
	$nombre_contact = $_POST["nombre_contact"];
	$apll_contact = $_POST["apll_contact"];
	$correo_contac = $_POST["correo_contac"];
	$tel_contact = $_POST["tel_contact"];
	$mensaje_contact = $_POST["mensaje_contact"];


	/*MENSAJE DEL CORREO*/
	$contenido="Nombre: " . $nombre_contact .
	"\nApellido: " . $apll_contact .
	"\nCorreo Electronico: " . $correo_contac .
	"\nTeléfono: " . $tel_contact .
	"\nMensaje: " . $mensaje_contact;

	/*
	funcion mail: 1. a quien se le envia el correo, 2. el asunto para el correo, 3. contenido o la variable con el mensaje que va a llegar
	*/
	mail($destino,"Contacto en Gecaltec", $contenido);

	/*Funcion header sirve para redireccionar el usuario a una pagina una vez se envie el mensaje*/
	header("Location:../cotizacion-gracias.php");
?>
