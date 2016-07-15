<?php if ($datos == 0): ?>
    <p>No Hay productos almacenados!</p>
<?php else: ?>
    <div id="alert-table" class="alert"></div>
    <h3>Lista de Productos</h3>
    <table class="table table-hover">
        <thead>
        <th>Identificador</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Precio</th>
        <th>stock</th>
        <th>Fecha Creacion</th>
    </thead>
    <?php $i = 0;
    foreach ($datos as $fila): ?>
        <tbody>
            <tr>
                <td><?php echo $fila->id_producto; ?></td>
                <td><?php echo $fila->nombre; ?></td>
                <td><?php echo $fila->descripcion; ?></td>
                <td><?php echo $fila->marca; ?></td>
                <td><?php echo $fila->modelo; ?></td>
                <td><?php echo $fila->precio; ?></td>
                <td><?php echo $fila->stock; ?></td>
                <td><?php echo $fila->fecha; ?></td>
                <td><button id='editar<?php echo $i ?>' onclick='editProduct(<?php echo $fila->id_producto ?>)' 
                            class="btn btn-sm btn-default" data-toggle="modal" data-target="#editProduct">
                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar</button></td>
                <td><button id='eliminar<?php echo $i ?>' onclick='deleteProduct(<?php echo $fila->id_producto ?>)' 
                            class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar</button></td>
            </tr>
        </tbody>
        <?php $i++;
    endforeach; ?>
    </table>
<?php endif; ?>
<input type="hidden" id='oculto' value='<?php echo $i ?>'/>
<div class="modal fade" id="editProduct">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h3 class="modal-title"><strong>Editar Producto</strong></h3>
            </div>
            <div class="modal-body">
                <div class="row">
    <div class="form-group">
        <div class="col-xs-4">
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-barcode" ></span> identificardor:</span><br>
                <input id="in-id-product-ed" class="form-control" type="text" disabled="true">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-plus" ></span> Nombre:</span><br>
                <input id="in-name-product-ed" class="form-control" type="text" placeholder="Nombre" autofocus required>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-list-alt" ></span> Descripcion:</span><br>
                <textarea id="in-description-product-ed" class="form-control" placeholder="Descripcion" autofocus required></textarea>
            </div>
            <br>
        </div>
        <div class="col-xs-4">
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-tag" ></span> Marca:</span><br>
                <input id="in-marca-product-ed" class="form-control" type="text" placeholder="Marca" autofocus required>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-comment" ></span> Modelo:</span><br>
                <input id="in-model-product-ed" class="form-control" type="text" placeholder="modelo" autofocus required>
            </div>
            <br>
            <!--            <br>
                        <form action="<?php echo base_url(); ?>Controlador/subirImagen" method="POST" enctype="multipart/form-data">
                            <table>
                                <tr>
                                    <td><input type="file" name="fileImagen" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="submit" value="Guardar" class="btn btn-default"></td>
                                </tr>
                            </table>
                        </form>-->
            <div class="input-group">
                <label><span class="glyphicon glyphicon-bookmark"></span> Categoria</label><br>
                <select class="btn btn-block btn-default" id="in-category-product-ed">
                    <?php
                    $i = 0;
                    foreach ($date as $fila):
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
        <div class="col-xs-4">
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-usd" ></span> Precio:</span><br>
                <input id="in-price-product-ed" class="form-control" type="text" placeholder="Precio" autofocus required>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group" ><span class="glyphicon glyphicon-compressed" ></span> Stock:</span><br>
                <input id="in-stock-product-ed" class="form-control" type="text" placeholder="Stock" autofocus required>
            </div><br> 
        </div>
    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-primary" data-dismiss="modal" onclick="updateProduct()">Actualizar Producto</button>
                <button class="btn btn-sm btn-danger" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->