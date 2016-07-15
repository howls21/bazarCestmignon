<div class="row">
    <h2><strong>Ingresando Nuevo Usuario</strong></h2>
    <br>
    <div class="form-group">
        <div class="col-lg-4">
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
                <input id="in-adress-new" class="form-control" type="text" placeholder="Direccion" autofocus required>
            </div>
            <br>
        </div>
        <div class="col-lg-4">
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-user" > Usuario:</span></span><br>
                <input id="in-user-new" class="form-control" type="text" placeholder="Usuario" autofocus required>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-lock" > Clave:</span></span><br>
                <input id="in-pass-new" class="form-control" type="password" placeholder="********" autofocus required>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-lock" > Confirma tu Clave:</span></span><br>
                <input id="in-pass-new-confirm" class="form-control" type="password" placeholder="********" autofocus required>
            </div>
            <br>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3">
        <button class="btn btn-sm btn-success" type="submit" onclick="addNewUser()" >Registrar Nuevo Usuario</button>	
        <div id="msj-reg-user"></div>
    </div>
</div>