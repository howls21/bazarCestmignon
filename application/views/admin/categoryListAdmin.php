<?php if ($datos == 0): ?>
    <p>No Hay categorias almacenados!</p>
<?php else: ?>
    <div id="alert-table" class="alert"></div>
    <h3>Lista de Categorias</h3>
    <table class="table table-hover">
        <thead>
        <th>Nombre</th>
        <th>Descripcion</th>
        </thead>
    <?php $i = 0;
    foreach ($datos as $fila):
        ?>
        <tbody>
            <tr>
                <td><?php echo $fila->nombre_categoria; ?></td>
                <td><?php echo $fila->detalle_categoria; ?></td>
                <td><button id='editar<?php echo $i ?>' onclick='edCategory(<?php echo $fila->id_categoria ?>)' class="btn btn-sm btn-default" data-toggle="modal" data-target="#editCategory"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar</button></td>
                <td><button id='eliminar<?php echo $i ?>' onclick='deleteCategory(<?php echo $fila->id_categoria ?>)' class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar</button></td>
            </tr>
        </tbody>
        <?php $i++;
    endforeach;
    ?>
    </table>
<?php endif; ?>
<input type="hidden" id='oculto' value='<?php echo $i ?>'/>
<div class="modal fade" id="editCategory">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h3 class="modal-title"><strong>Editar Categoria</strong></h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <form class="form-signin">
                            <label>Identificador</label>
                            <input  id="ed-code-category" class="form-control" disabled="true" autofocus type="text"/>
                            <label>nombre</label>
                            <input  id="ed-name-category" class="form-control" autofocus type="text"/>
                            <label>Descripcion</label>
                            <input id="ed-description-category" class="form-control" type="text"/>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal" onclick="upCategory()"> Editar Categoria</button>
                <button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->