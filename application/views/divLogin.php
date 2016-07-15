<form class="form-inline">
    <div id="dv-login" class="form-group">
        <div class="input-group input-group-sm">
            <div class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalRegistro"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span> Registrate</div>
            </div>
        <div class="input-group input-group-sm">
            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
            <input id="in-user" class="form-control" type="text" placeholder="Usuario" autofocus required>
        </div>
        <div class="input-group input-group-sm">
            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
            <input id="in-pass" class="form-control" type="password" placeholder="********" required>
        </div>
        <button class="btn btn-sm btn-success" type="submit" id="btn-login">Ingresar</button>
    </div>
</form>
 <!-- Modal Registro y validacion-->
        <div class="modal fade bs-example-modal-sm" id="modalRegistro" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h1 class="modal-title" id="myModalLabel"><strong>Ooops!</strong></h1>
                                </div>
                                <div class="modal-body">
                                    <strong>Recuerda Rellenar con tu nombre y numero de cliente</strong>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-block btn-primary hvr-glow" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>