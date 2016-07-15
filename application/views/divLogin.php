<form class="form-inline">
    <div id="dv-login" class="form-group">
        <div class="input-group input-group-sm">
            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
            <input id="in-user" class="form-control" type="text" placeholder="Usuario" autofocus required>
        </div>
        <div class="input-group input-group-sm">
            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
            <input id="in-pass" class="form-control" type="password" placeholder="********" required>
        </div>
        <div class="input-group input-group-sm">
        <button class="alert btn btn-success form-control" type="submit" id="btn-login">Ingresa</button>
        </div>
        <div class="input-group input-group-sm">
        <a class="alert btn btn-danger form-control" data-toggle="modal" data-target="#modalRegistro" id="basic-addon"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span> Registrate</a>
        </div>
    </div>
</form>
<!-- Modal Registro y validacion-->
<div class="modal fade" id="modalRegistro" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel"><strong> Registrate con nosotros!</strong></h3>
            </div>
            <div class="modal-body">
                <div class="row">
                <div class="form-group">
                    <div class="col-xs-1"></div>
                    <h4><strong>Ingresa tus Datos</strong></h4><br>
                    <div class="col-xs-1"></div>
                    <div class="col-xs-4">
                        <div class="input-group">
                            <span class="input-group" ><span class="glyphicon glyphicon-tag" > Nombre:</span></span>
                            <input id="in-name-new-consumer" class="form-control" type="text" placeholder="Nombre" autofocus required>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group" ><span class="glyphicon glyphicon-tags" > Apellido:</span></span>
                            <input id="in-surname-new-consumer" class="form-control" type="text" placeholder="Apellido" autofocus required>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group" ><span class="glyphicon glyphicon-envelope" > email:</span></span>
                            <input id="in-email-new-consumer" class="form-control" type="text" placeholder="Direccion" autofocus required>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group" ><span class="glyphicon glyphicon-road" > Direccion:</span></span>
                            <input id="in-adress-new-consumer" class="form-control" type="text" placeholder="Direccion" autofocus required>
                        </div>
                        <br>
                    </div>
                    <div class="col-xs-1"></div>
                    <div class="col-lg-4">
                        <div class="input-group">
                            <span class="input-group" ><span class="glyphicon glyphicon-user" > Usuario:</span></span>
                            <input id="in-user-new-consumer" class="form-control" type="text" placeholder="Usuario" autofocus required>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group" ><span class="glyphicon glyphicon-lock" > Clave:</span></span>
                            <input id="in-pass-new-consumer" class="form-control" type="password" placeholder="********" autofocus required>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group" ><span class="glyphicon glyphicon-lock" > Confirma tu Clave:</span></span>
                            <input id="in-pass-new-confirm-consumer" class="form-control" type="password" placeholder="********" autofocus required>
                        </div>
                        <br>
                         
                    </div>
                </div>
                </div>
                <!---->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-success" onclick="newConsumer();"> Registrar</button> 
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>