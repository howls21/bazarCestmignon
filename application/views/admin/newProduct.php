<div class="row">
    <h2><strong>Ingresando Nuevo Producto</strong></h2>
    <br>
    <!---->
    <div class="form-group">
        <div class="col-xs-3">
            <div class="input-group">
                <span class="input-group"><span class="glyphicon glyphicon-plus"></span> Nombre:</span><br>
                <input id="in-name-product-new" class="form-control" type="text" placeholder="Nombre" autofocus
                       required>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group"><span class="glyphicon glyphicon-list-alt"></span> Descripcion:</span><br>
                <textarea id="in-description-product-new" class="form-control" placeholder="Descripcion" autofocus
                          required></textarea>
            </div>
            <br>
            <div class="input-group">
                <label><span class="glyphicon glyphicon-bookmark"></span> Categoria</label><br>
                <select class="btn btn-block btn-default" id="in-category-product-new">
                    <?php
                    $i = 0;
                    foreach ($datos as $fila):
                        ?>
                        <option
                            value="<?php echo $fila->id_categoria; ?>"><?php echo $fila->nombre_categoria; ?></option>
                        <?php
                        $i++;
                    endforeach;
                    ?>
                </select>
                <input type="hidden" id='oculto' value='<?php echo $i ?>'/>
            </div>
            <br>
        </div>
        <div class="col-xs-3">
            <div class="input-group">
                <span class="input-group"><span class="glyphicon glyphicon-tag"></span> Marca:</span><br>
                <input id="in-marca-product-new" class="form-control" type="text" placeholder="Marca" autofocus
                       required>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group"><span class="glyphicon glyphicon-comment"></span> Modelo:</span><br>
                <input id="in-model-product-new" class="form-control" type="text" placeholder="modelo" autofocus
                       required>
            </div>
            <br>
            <br>
        </div>
        <div class="col-xs-3">
            <div class="input-group">
                <span class="input-group"><span class="glyphicon glyphicon-usd"></span> Precio:</span><br>
                <input id="in-price-product-new" class="form-control" type="text" placeholder="Precio" autofocus
                       required>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group"><span class="glyphicon glyphicon-compressed"></span> Stock:</span><br>
                <input id="in-stock-product-new" class="form-control" type="text" placeholder="Stock" autofocus
                       required>
            </div>
            <br>
            <button class="btn btn-block btn-success" onclick="adProduct();">Guardar Producto Nuevo</button>
        </div>
    </div>
    <!---->
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="">
            <!--div para visualizar en el caso de imagen-->
            <div class="showImage">
                <img id="imageUploaded" class="img-thumbnail" src="#"
                     width="140" height="140">
            </div>
            <form id="uploadImage"  enctype="multipart/form-data" method="post">
                <label>Subir una imagen</label><br/>
                <input type="file" id="file" onchange="imagePreview();" class="file" name="userfile" size="20"/>
                <button type="submit" class="btn btn-success">Subir Imagen</button>
            </form>
            <!--div para visualizar mensajes-->
            <div class="messages"></div>
        </div>
        <div id="msj-reg-user"></div>
    </div>
</div>