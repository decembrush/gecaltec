<script src="<?php echo base_url(); ?>Scripts/js/Jspages/JsDictum.js"></script>



<div class="contenido">

    <div class="container">
        <div class="section-title">
            <div class="row">
                <div class="col-xs-6">
                    <h2>
                        Dictamenes <br>
                        <small>Cargados en el sistema</small>
                    </h2>
                </div>
                <div class="col-xs-6 text-right cnt-btn">
                    <a href="" class="btn btn-ch" data-toggle="modal" data-target="#mdl_nuevo_dic"> <i class="fa fa-plus"></i> Cargar dictamen</a>
                </div>
            </div>

            <div class="divider"></div>
        </div>


        <div class="table-responsive dt_sitio">
                <div class="alert alert-danger" id="alertMessageDanger2" style="display: none;" role="alert">
                    <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                    <span id="messageDanger2"></span>
                </div>
                <div class="alert alert-success" id="alertMessageSuccess2" style="display: none;" role="alert">
                    <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                    <span id="messageSuccess2"></span>
                </div>
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th># Dictamen</th>
                        <th># Hoja</th>
                        <th>Descripción</th>
                        <th>Fecha de carga</th>
                        <th>Archivo</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="RowDictums">
                    <!--<tr>
                        <td>UXZ</td>
                        <td>000001</td>
                        <td>Conjunto residencial rosales</td>
                        <td>2011/05/25</td>
                        <td><a href="documentos/pdf-test.pdf" target="_blank">hola.jpg</a></td>
                        <td>
                            <div class="cnt_btn_icons">
                                <a href="documentos/pdf-test.pdf" target="_blank" class="btn btn-icon btn-icon-g"><i class="fa fa-eye"></i></a>
                                <a href="" class="btn btn-icon btn-icon-r"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>-->
                </tbody>
            </table>
        </div>


    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="mdl_nuevo_dic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cargar Dictamen</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" id="alertMessageDanger" style="display: none;" role="alert">
                    <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                    <span id="messageDanger"></span>
                </div>
                <div class="alert alert-success" id="alertMessageSuccess" style="display: none;" role="alert">
                    <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                    <span id="messageSuccess"></span>
                </div>
                <form id="form-nDictamen" method="post">
                    <input type="hidden" name="path" id="path" value="<?php echo base_url(); ?>" />
                    <div class="form-ch">
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="nDic_iden"># Dictamen</label>
                                <input id="nDic_iden" name="nDic_iden" type="text" class="form-control" >
                            </div>
                            <div class="col-md-4"> 
                                <label for="nYear">Año</label>
                                <input type="text" class="form-control" id="nYear" name="nYear"  >
                            </div>
                            <div class="col-md-4">
                                <label for="nDic_cod">#Hoja</label>
                                <input type="text" class="form-control" id="nDic_cod" name="nDic_cod" minlength="2" maxlength="8">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nDic_decrip">Descripción</label>
                            <textarea name="nDic_decrip" id="nDic_decrip" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Adjuntar Documento <span class="txtColor">*</span></label>
                            <div>
                                <input type="file" name="file_2" id="file-2" class="inputfile inputfile-2"  />
                                <label for="file-2"><i class="fa fa-upload"></i> <span>Seleccionar Archivo&hellip;</span></label>
                            </div>
                            <p class="help-block">Adjunte archivos .PDF (MAX 5MB)</p>
                        </div>
                        <input type="submit" id="nDic_btnSave" class="btn btn-ch" value="Guardar">
                        <a href="" class="btn btn-ch-gray" data-dismiss="modal">Cancelar</a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<!--[[INICIO]]SCRIPTS(BOOTSTRAP-TABLE)-->


<script>
    $(document).ready(function () {
        $('#example').DataTable({
            //"pagingType": "full_numbers",
            paging: true,
            responsive: true,
            "bFilter": true,
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf'
            ],
            language: {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
        //$('select').material_select();
    });
</script>

