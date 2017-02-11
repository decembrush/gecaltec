<?php

	$destino = "comercial@gecaltec.com";

	/*INFORMACION DE LA OBRA*/
	$propietario_obra = $_POST["propietario_obra"];
	$nombre_obra = $_POST["nombre_obra"];
	$direccion_obra = $_POST["direccion_obra"];
	$ciudad_obra = $_POST["ciudad_obra"];
	/*PERSONA QUE SOLICITA LA COTIZACION*/
	$nombre_solicita = $_POST["nombre_solicita"];
	$telefono_solicita = $_POST["telefono_solicita"];
	$correo_solicita = $_POST["correo_solicita"];
	$descripcion_obra = $_POST["descripcion_obra"];
	/*RESIDENCIAL*/
	$no_uni_vivienda = $_POST["no_uni_vivienda"];
	$carga_contratada_uni_vivienda = $_POST["carga_contratada_uni_vivienda"];
	$no_torres_residencial = $_POST["no_torres_residencial"];
	$estrato_residencial = $_POST["estrato_residencial"];
	/*COMERCIAL*/
	$no_cuentas_comercial = $_POST["no_cuentas_comercial"];
	$carga_ins_local_comercial = $_POST["carga_ins_local_comercial"];
	$area_construida_comercial = $_POST["area_construida_comercial"];
	/*INDUSTRIAL*/
	$no_acometidas_ind = $_POST["no_acometidas_ind"];
	$no_tableros_ind = $_POST["no_tableros_ind"];
	$no_tableros_baja_ind = $_POST["no_tableros_baja_ind"];
	$no_circuitos_ali_ind = $_POST["no_circuitos_ali_ind"];
	$area_clasificada_ind = $_POST["area_clasificada_ind"];
	$area_construida_ind = $_POST["area_construida_ind"];
	/*TRANSFORMACION*/
	$potencia_kva_trans = $_POST["potencia_kva_trans"];
	$no_trans_trans = $_POST["no_trans_trans"];
	$voltaje_pr_trans = $_POST["voltaje_pr_trans"];
	$voltaje_sc_trans = $_POST["voltaje_sc_trans"];
	$g_medida_trans = $_POST["g_medida_trans"];
	$no_celdas_trans = $_POST["no_celdas_trans"];
	/*DISTRIBUCION*/
	$long_red_mt_dist = $_POST["long_red_mt_dist"];
	$long_red_bt_dist = $_POST["long_red_bt_dist"];
	$no_estructuras_dist = $_POST["no_estructuras_dist"];
	$cajas_paso_dist = $_POST["cajas_paso_dist"];

	/*MENSAJE DEL CORREO*/
	$contenido="INFORMACIÓN DE LA OBRA" . "\nPropietario de la obra: " . $propietario_obra .
	"\nNombre de la obra: " . $nombre_obra .
	"\nDirección de la obra: " . $direccion_obra .
	"\nCiudad: " . $ciudad_obra .
	"\nINFORMACIÓN DEL SOLICITANTE" .
	"\nSolicitante: " . $nombre_solicita .
	"\nTeléfono: " . $telefono_solicita .
	"\nCorreo Electrónico: " . $correo_solicita .
	"\nDescripción de la obra: " . $descripcion_obra .
	"\nINFORMACIÓN RESIDENCIAL" .
	"\nNo. Unidades de vivienda: " . $no_uni_vivienda .
	"\nCarga contratada por unidad de vivienda: " . $carga_contratada_uni_vivienda .
	"\nNo. de torres: " . $no_torres_residencial .
	"\nEstrato: " . $estrato_residencial .
	"\nINFORMACIÓN COMERCIAL" .
	"\nNo. de cuentas: " . $no_cuentas_comercial .
	"\nCarga instalada por local: " . $carga_ins_local_comercial .
	"\nÁrea construida del proyecto (m2): " . $area_construida_comercial .
	"\nINFORMACIÓN INDUSTRIAL" .
	"\nNo. de acometidas: " . $no_acometidas_ind .
	"\nNo. de tableros parciales: " . $no_tableros_ind .
	"\nNo. de tableros en baja tensión: " . $no_tableros_baja_ind .
	"\nNo. de circuitos alimentadores: " . $no_circuitos_ali_ind .
	"\nÁreas clasificadas: " . $area_clasificada_ind .
	"\nÁrea construida del proyecto (m2): " . $area_construida_ind .
	"\nTRANSFORMACIÓN" .
	"\nPotencia KVA: " . $potencia_kva_trans .
	"\nNo. de transformadores: " . $no_trans_trans .
	"\nVoltaje primario: " . $voltaje_pr_trans .
	"\nVoltaje secundario: " . $voltaje_sc_trans .
	"\nGrupo de medida: " . $g_medida_trans .
	"\nNumero de celdas: " . $no_celdas_trans;

	/*
	funcion mail: 1. a quien se le envia el correo, 2. el asunto para el correo, 3. contenido o la variable con el mensaje que va a llegar
	*/
	mail($destino,"Cotizacion", $contenido);

	/*Funcion header sirve para redireccionar el usuario a una pagina una vez se envie el mensaje*/
	header("Location:../cotizacion-gracias.php");
?>
