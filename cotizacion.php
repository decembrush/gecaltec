<?php
	$pageTitle = 'Solicitud de Cotización';
	include("cabecera.php");
?>

	<!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
      <main>
        <section class="contenedor_form">
          <div class="container hr">
            <h2>SOLICITUD DE COTIZACIÓN</h2>
            <p><strong>Estimado cliente:</strong>
            Favor suminstrar la Información técnica de la obra, solicitada a continuación.<br>
            <strong>NOTA:</strong> Los campos marcados con (*) son obligatorios
            </p>
          </div>
          <div class="container">
            <form action="mail/envio_cotizacion.php" method="post" id="fr_form_cotizacion" name="form_cotizacion">
              <h3>INFORMACIÓN DE LA OBRA</h3>
              <div class="row off1">

                <div class="grid_3">
                <label for="inp_propietario_obra">Propietario de la obra <span class="obligatorio">*</span></label>
                <input type="text" name="propietario_obra" id="inp_propietario_obra" required>
                </div>

                <div class="grid_3">
                <label for="inp_nombre_obra">Nombre de la obra  <span class="obligatorio">*</span></label>
                <input type="text" name="nombre_obra" id="inp_nombre_obra" required>
                </div>

                <div class="grid_3">
                <label for="inp_direccion_obra">Dirección de la obra <span class="obligatorio">*</span></label>
                <input type="text" name="direccion_obra" id="inp_direccion_obra" required>
                </div>

                <div class="grid_3">
                <label for="slt_ciudaad_obra">Ciudad <span class="obligatorio">*</span></label>
                <select name="ciudad_obra" id="slt_ciudaad_obra" required>
                  <option selected>Bogotá</option>
                  <option>Medellín</option>
                  <option>Cali</option>
                  <option>Barranquilla</option>
                  <option>Manizales</option>
                  <option>Bucaramanga</option>
                  <option>Santa Marta</option>
                  <option>Otra</option>
                </select>
                </div>
              </div>

              <hr/>

              <h3>INFORMACIÓN DEL SOLICITANTE</h3>
              <div class="row off1">


                <div class="grid_6">
                <label for="inp_nombre_solicita">Su nombre <span class="obligatorio">*</span></label>
                <input type="text" name="nombre_solicita" id="inp_nombre_solicita" required>
                </div>

                <div class="grid_6">
                <label for="inp_telefono_solicita">Su teléfono <span class="obligatorio">*</span></label>
                <input type="number" name="telefono_solicita" id="inp_telefono_solicita" required>
                </div>

                <div class="grid_12">
                <label for="inp_correo_solicita">Su correo <span class="obligatorio">*</span></label>
                <input type="email" name="correo_solicita" id="inp_correo_solicita" required>
                </div>
                <div class="grid_12">
                <label for="inp_descripcion_obra">Descripción de la obra <span class="obligatorio">*</span></label>
                <textarea name="descripcion_obra" id="inp_descripcion_obra"></textarea required>
                </div>
              </div>

              <hr/>

              <h3>RESIDENCIAL</h3>
              <div class="row off1">
                <div class="grid_3">
                <label for="inp_no_uni_vivienda">No. Unidades de vivienda</label>
                <input type="number" name="no_uni_vivienda" id="inp_no_uni_vivienda">
                </div>
                <div class="grid_3">
                <label for="inp_carga_contratada_uni_vivienda">Carga contratada por unidad de vivienda</label>
                <input type="text" name="carga_contratada_uni_vivienda" id="inp_carga_contratada_uni_vivienda">
                </div>
                <div class="grid_3">
                <label for="inp_no_torres_residencial">No. de torres</label>
                <input type="number" name="no_torres_residencial" id="inp_no_torres_residencial">
                </div>
                <div class="grid_3">
                <label for="inp_estrato_residencial">Estrato</label>
                <input type="number" name="estrato_residencial" id="inp_estrato_residencial">
                </div>
              </div>

              <hr/>

              <h3>COMERCIAL</h3>
              <div class="row off1">
                <div class="grid_4">
                <label for="inp_no_cuentas_comercial">No. de cuentas</label>
                <input type="number" name="no_cuentas_comercial" id="inp_no_cuentas_comercial">
                </div>
                <div class="grid_4">
                <label for="inp_carga_ins_local_comercial">Carga instalada por local</label>
                <input type="text" name="carga_ins_local_comercial" id="inp_carga_ins_local_comercial">
                </div>
                <div class="grid_4">
                <label for="inp_area_construida_comercial">Área construida del proyecto (m2)</label>
                <input type="number" name="area_construida_comercial" id="inp_area_construida_comercial">
                </div>
              </div>

              <hr/>

              <h3>INDUSTRIAL</h3>
              <div class="row off1">
                <div class="grid_4">
                <label for="inp_no_acometidas_ind">No. de acometidas</label>
                <input type="number" name="no_acometidas_ind" id="inp_no_acometidas_ind">
                </div>
                <div class="grid_4">
                <label for="inp_no_tableros_ind">No. de tableros parciales</label>
                <input type="number" name="no_tableros_ind" id="inp_no_tableros_ind">
                </div>
                <div class="grid_4">
                <label for="inp_no_tableros_baja_ind">No. de tableros en baja tensión</label>
                <input type="number" name="no_tableros_baja_ind" id="inp_no_tableros_baja_ind">
                </div>
                <div class="grid_4">
                <label for="inp_no_circuitos_ali_ind">No. de circuitos alimentadores</label>
                <input type="number" name="no_circuitos_ali_ind" id="inp_no_circuitos_ali_ind">
                </div>
                <div class="grid_4">
                <label for="inp_area_clasificada_ind">Áreas clasificadas</label>
                <select name="area_clasificada_ind" id="inp_area_clasificada_ind">
                  <option>Si</option>
                  <option selected>No</option>
                </select>
                </div>
                <div class="grid_4">
                <label for="inp_area_construida_ind">Área construida del proyecto (m2)</label>
                <input type="text" name="area_construida_ind" id="inp_area_construida_ind">
                </div>
              </div>

              <hr/>

             <h3>TRANSFORMACIÓN</h3>
              <div class="row off1">
                <div class="grid_4">
                <label for="inp_potencia_kva_trans">Potencia KVA</label>
                <input type="text" name="potencia_kva_trans" id="inp_potencia_kva_trans">
                </div>
                <div class="grid_4">
                <label for="inp_no_trans_trans">No. de transformadores</label>
                <input type="number" name="no_trans_trans" id="inp_no_trans_trans">
                </div>
                <div class="grid_4">
                <label for="inp_voltaje_pr_trans">Voltaje primario</label>
                <input type="text" name="voltaje_pr_trans" id="inp_voltaje_pr_trans">
                </div>
                <div class="grid_4">
                <label for="inp_voltaje_sc_trans">Voltaje secundario</label>
                <input type="text" name="voltaje_sc_trans" id="inp_voltaje_sc_trans">
                </div>
                <div class="grid_4">
                <label for="inp_g_medida_trans">Grupo de medida</label>
                <select name="g_medida_trans" id="inp_g_medida_trans">
                  <option>Si</option>
                  <option selected>No</option>
                </select>
                </div>
                <div class="grid_4">
                <label for="inp_no_celdas_trans">No. de celdas</label>
                <input type="number" name="no_celdas_trans" id="inp_no_celdas_trans">
                </div>
              </div>
              <hr/>

              <h3>DISTRIBUCIÓN</h3>
              <div class="row off1">
                <div class="grid_3">
                <label for="inp_long_red_mt_dist">Longitud de la red MT (kms)</label>
                <input type="number" name="long_red_mt_dist" id="inp_long_red_mt_dist">
                </div>
                <div class="grid_3">
                <label for="inp_long_red_bt_dist">Longitud de la red BT (kms)</label>
                <input type="number" name="long_red_bt_dist" id="inp_long_red_bt_dist">
                </div>
                <div class="grid_3">
                <label for="inp_no_estructuras_dist">No. de estructuras</label>
                <input type="number" name="no_estructuras_dist" id="inp_no_estructuras_dist">
                </div>
                <div class="grid_3">
                <label for="inp_cajas_paso_dist">No. de cajas de paso</label>
                <input type="number" name="cajas_paso_dist" id="inp_cajas_paso_dist">
                </div>
              </div>

              <p><strong>NOTA</strong>: Favor remitir diagramas unifilares de la obra al correo <a href="mailto:gecaltec16@gmail.com">gecaltec16@gmail.com</a></p>
              <input class="btn" type="submit" id="btn_enviar_cotizacion" name="boton_enviar" value="Cotizar">

            </form>
          </div>
        </section>
      </main>

<?php include ("pie-pagina.php");?>
