<?php

$pageTitle = 'Consultar Dictamen';
include("cabecera.php");
?>

<script src="projecGecaltec/Scripts/js/Jspages/JsDictum.js"></script>
<main>
    <div class="container">
        <div class="buscador_dictamen">
            <div class="alert alert-danger" id="alertMessageDanger" style="display: none;" role="alert">
                                    <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                <span id="messageDanger"></span>
            </div>
            <div class="alert alert-success" id="alertMessageSuccess" style="display: none;" role="alert">
                <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                <span id="messageSuccess"></span>
            </div>
            <form method="post" id="form_consult_dictum">
                <input type="hidden" name="path" id="path" value="http://localhost:8000/git/gecaltec/projecGecaltec/" />
                <div class="row">
                    <div class="grid_6">
                        <label for="inp_no_dictamen">Número de Dictamen</label>
                        <input type="text" placeholder="Ej. 001-17" id="inp_no_dictamen" name="inp_no_dictamen">
                    </div>
                    <div class="grid_6" id="hiddenNumberSheet" style="display:none;">
                        <label for="inp_no_hoja">Número de Hoja</label>
                        <input type="text" placeholder="Ej. 24" id="inp_no_hoja" name="inp_no_hoja">
                    </div>
                    <div class="mfControls grid_12">
                        <input type="submit" class="btn" id="btn_consulta" value="Consultar Dictamen"  >
                    </div>
                </div>
            </form>
            <ul class="row product-list" id="hiddenResultDocument" style="display: none;">
                <li class="grid_4">
                    <div class="box wow fadeInRight">
                        <div class="box_aside">
                            <div class="icon fa-download"></div>
                        </div>
                        <div class="box_cnt__no-flow">
                            <h3><span id="url_dictum"><a href="" target="_blank">Dictamen 001-17-24.</a></span></h3>
                            <p><span id="description_dictum">Descripción del dictamen.</span> <br> 
                                <span id="url2_dictum"><a href="" target="_blank" >Descargar Aquí</a></span></p>

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

<?php include ("pie-pagina.php"); ?>
