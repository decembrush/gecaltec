
<script src="<?php echo base_url(); ?>Scripts/js/Jspages/JsAccount.js"></script>

<div class="contenido">
    <div class="container">
        <div class="cnt-form-sitio">
            <form id="form-account">
                <div class="alert alert-danger" id="alertMessageDanger" style="display: none;" role="alert">
                    <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                    <span id="messageDanger"></span>
                </div>
                <div class="alert alert-success" id="alertMessageSuccess" style="display: none;" role="alert">
                    <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                    <span id="messageSuccess"></span>
                </div>

                <input type="hidden" name="path" id="path" value="<?php echo base_url(); ?>" />
                <div class="form-ch">
                    <div class="section-title">
                        <h4>
                            Datos Basicos
                        </h4>
                        <div class="divider"></div>
                    </div>
                    <div class="form-group">
                        <label for="">Nombre de Usuario</label>
                        <input type="text" name="nameUser" id="nameUser" class="form-control" value="<?= $User; ?>">
                        <input type="hidden" name="nameUserHidden" id="nameUserHidden" value="<?= $User; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Correo Electrónico</label>
                        <input type="text" class="form-control" name="mailUser" id="mailUser" value="<?= $Mail; ?>">
                        <input type="hidden" name="mailUserHidden" id="mailUserHidden" value="<?= $Mail; ?>">
                    </div>
                    <div class="section-title">
                        <h4>
                            Moficar contraseña
                        </h4>
                        <div class="divider"></div>
                    </div>

                    <div class="form-group">
                        <label for="">Contraseña actual</label>
                        <input type="password" name="passwordUserOld" id="passwordUserOld" class="form-control" >
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-6">
                            <label for="">Nueva contraseña</label>
                            <input type="password" name="passwordUserNew" id="passwordUserNew"  class="form-control" >
                        </div>
                        <div class="col-xs-6">
                            <label for="">Repite la contraseña</label>
                            <input type="password" name="passwordUserNewRepeat" id="passwordUserNewRepeat"  class="form-control" >
                        </div>
                    </div>
                    <input type="submit" id="btn_accountUser" class="btn btn-ch" value="Guardar Cambios">

                </div>
            </form>
        </div>
    </div>
</div>