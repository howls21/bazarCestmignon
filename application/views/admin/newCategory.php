<div class="row">
    <div class="form-group">
        <div class="col-xs-1"></div>
        <h2><strong>Ingresando Nueva Categoria</strong></h2><br>
        <div class="col-xs-1"></div>
        <div class="col-xs-3">
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-tag" > Nombre:</span></span><br>
                <input id="in-name-category" class="form-control" type="text" placeholder="Nombre" autofocus required>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-comment" > Descripcion:</span></span><br>
                <input id="in-description-category" class="form-control" type="text" placeholder="Descripcion" autofocus required>
            </div><br>
            <button class="btn btn-block btn-success" type="submit" onclick="adCategory();" >Guardar Categoria</button>
            <div id="msj-reg-user"></div>
        </div>      
    </div>
</div>