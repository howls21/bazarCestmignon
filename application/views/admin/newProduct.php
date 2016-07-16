<div class="row">
    <h2><strong>Ingresando Nuevo Producto</strong></h2>
    <br>
    <!---->
    <div class="form-group">
        <div class="col-xs-3">
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-plus" ></span> Nombre:</span><br>
                <input id="in-name-product-new" class="form-control" type="text" placeholder="Nombre" autofocus required>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-list-alt" ></span> Descripcion:</span><br>
                <textarea id="in-description-product-new" class="form-control" placeholder="Descripcion" autofocus required></textarea>
            </div>
            <br>
            <div class="input-group">
                <label><span class="glyphicon glyphicon-bookmark"></span> Categoria</label><br>
                <select class="btn btn-block btn-default form-control" id="in-category-product-new">
                    <?php
                    $i = 0;
                    foreach ($datos as $fila):
                        ?>
                        <option value="<?php echo $fila->id_categoria; ?>"><?php echo $fila->nombre_categoria; ?></option>
                        <?php
                        $i++;
                    endforeach;
                    ?>
                </select>
                <input type="hidden" id='oculto' value='<?php echo $i ?>'/>
            </div><br>
        </div>
        <div class="col-xs-3">
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-tag" ></span> Marca:</span><br>
                <input id="in-marca-product-new" class="form-control" type="text" placeholder="Marca" autofocus required>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-comment" ></span> Modelo:</span><br>
                <input id="in-model-product-new" class="form-control" type="text" placeholder="modelo" autofocus required>
            </div>
            <br>
            <br>
<!--            <form action="<?php echo base_url(); ?>Controlador/subirImagen" method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><input type="file" name="fileImagen" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Guardar" class="btn btn-default"></td>
                    </tr>
                </table>
            </form>-->
        </div>
        <div class="col-xs-3">
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-usd" ></span> Precio:</span><br>
                <input id="in-price-product-new" class="form-control" type="text" placeholder="Precio" autofocus required>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-compressed" ></span> Stock:</span><br>
                <input id="in-stock-product-new" class="form-control" type="text" placeholder="Stock" autofocus required>
            </div><br>
            <button class="btn btn-block btn-success" onclick="adProduct();" >Guardar Producto Nuevo </button>
        </div>
    </div>
    <!---->
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="">
            <form enctype="multipart/form-data" class="formulario">
                <label>Subir un archivo</label><br />
                <input name="archivo" type="file" id="imagen" class="form-control"/><br /><br />
                <input type="button" value="Subir imagen" class="btn btn-warning" /><br />
            </form>
            <!--div para visualizar mensajes-->
            <div class="messages"></div><br /><br />
            <!--div para visualizar en el caso de imagen--> 
            <div class="showImage"></div>
        </div>
        <div id="msj-reg-user"></div>
    </div>
</div>