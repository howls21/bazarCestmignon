<div class="row">
    <div class="form-group">
        <div class="col-xs-2"></div>
        <h2> <strong>Nuevo Usuario Administrador/Consumidor</strong></h2><br>
        <div class="col-xs-2"></div>
        <div class="col-xs-3">
            <h4>Datos Personales</h4>
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-tag" > Nombre:</span></span><br>
                <input id="in-name-new" class="form-control" type="text" placeholder="Nombre" autofocus required>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-list-alt" > Apellido:</span></span><br>
                <input id="in-surname-new" class="form-control" type="text" placeholder="Apellido" autofocus required>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-envelope" > email:</span></span><br>
                <input id="in-email-new" class="form-control" type="text" placeholder="Direccion" autofocus required>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-road" > Direccion:</span></span><br>
                <textarea id="in-adress-new" class="form-control" placeholder="Direccion" autofocus required></textarea>
            </div>
            <br>
        </div>
        <div class="col-xs-3">
            <h4>Datos de Usuario</h4>
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-user" > Usuario:</span></span><br>
                <input id="in-user-new" class="form-control" type="text" placeholder="Usuario" autofocus required>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-lock" > Clave:</span></span><br>
                <input id="in-pass-new" class="form-control" value="1234" type="password" placeholder="********" autofocus required>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-lock" > Confirma tu Clave:</span></span><br>
                <input id="in-pass-new-confirm" class="form-control" value="1234" type="password" placeholder="********" autofocus required>
            </div>
            <br>
            <div class="input-group">
                <label>Tipo de Usuario</label><br>
                <select class="btn btn-sm btn-default form-control" id="in-type-new-user">
                    <option value="1">Administrador</option>
                    <option value="2">Consumidor</option>
                </select>
            </div><br>
            <button class="btn btn-block btn-success" type="submit" onclick="addNewUser();" >Registrar Nuevo Usuario</button>
        </div>
        <div class="col-xs-3">
            <div class="alert alert-info">Clave Por defecto es: "1234"</div>
        </div>
    </div>
</div>