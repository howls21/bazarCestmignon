<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Bazar C'est Mignon</title>
        <!--Carga de hojas de estilo-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/default.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/bazar.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>css/jquery.fileupload.css">
        <!--Carga de javaScripts-->
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/bazar.js"></script>
        <script type="text/javascript">var base_url = "<?php echo base_url() ?>index.php/";</script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.iframe-transport.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.fileupload.js"></script>

    </head>
    <body>
        <!-- Static navbar -->
        <nav class="navbar navbar-default">
            <div class="container container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url() ?>index.php/"><img src="<?php echo base_url() ?>img/cestlogon.jpg" width="100"></a>
                    <a class="navbar-brand">Bazar C'est Mignon</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a id="user-Pedido">
                                
                            </a>
                        </li>
                        <li><a id="user-active"></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <!-- Cuerpo de Pagina-->
        <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-2">
                <div id="alert-user" class="alert"></div>
                <div id="menu" class=""></div>
                <div id="info-left"></div>
            </div>
            <div class="col-xs-8">
                <div class="row">
                    <div id="message-success" class="alert alert-success" role="alert">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    </div>
                    <div id="message-error" class="alert alert-danger" role="alert">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    </div>
                </div>
                <div id="info-center"></div>
                <div id="footer"></div>
            </div>
            <div class="col-xs-1"></div>
        </div>
    </body>
</html>