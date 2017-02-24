<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Recordar Contraseña</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>Content/img/favicon.ico">

        <!--[[INICIO]]SCRIPTS-->

        <link rel="stylesheet" href="<?php echo base_url(); ?>Content/css/bootstrap.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>Content/fonts/material-icons.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>Content/css/font-awesome.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>Content/css/estilo.css">


        <!--[[FIN]]SCRIPTS-->

        <!--[[INICIO]]SCRIPTS-->
        <script src="<?php echo base_url(); ?>Scripts/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>Scripts/js/plugins/jquery.validate.min.js"></script>
        <script src="<?php echo base_url(); ?>Scripts/js/bootstrap.min.js"></script>

        <script src="<?php echo base_url(); ?>Scripts/js/script.js"></script>
        <!--[[FIN]]SCRIPTS-->

        <script src="<?php echo base_url(); ?>Scripts/js/Jspages/JsRememberPassword.js"></script>

    </head>
    <body class="cuerpo">

        <nav class="navbar  cabeceraFija1 navbar-ch">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a class="" href="/"> <img src="<?php echo base_url(); ?>Content/img/logo.png" class="logo" alt=""> </a>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </nav>

        <div class=" fullHeight bg-login">
            <div class="seccion-overlay">
                <div class="seccion-island">
                    <div class="container">
                        <div class="cnt-login">
                            <div class="section-title">
                                <h4>
                                    Recordar Contraseña
                                </h4>
                                <p>Ingresa el correo electrónico registrado para recordar la contraseña.</p>
                                <div class="divider"></div>
                            </div>
                            <form id="form-rec">
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
                                    <div class="form-group">
                                        <label for="recEmail">Correo Electrónico</label>
                                        <input type="email" class="form-control" id="recEmail" name="recEmail" required>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" id="btnRecordar" class="btn btn-ch" value="Recordar Contraseña">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <footer class="footer">
            Gecaltec © <?= date('Y') ?>. Todos los derechos reservados. Realizado por Applet S.A.S
        </footer>

        <script src="<?php echo base_url(); ?>Scripts/js/validaciones.js"></script>

    </body>
</html>