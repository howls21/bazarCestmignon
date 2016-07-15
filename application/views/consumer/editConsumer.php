<?php if ($datos == 0): ?>
    <p>No Hay Usuarios almacenados!</p>
<?php else: ?>
    <div id="alert-table" class="alert"></div>
    <h3>Mis Datos</h3>
    <table class="table table-hover">
        <thead>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>email</th>
        <th>Dirección</th>
        <th>Usuario</th>
    </thead>
    <?php $i = 0;
    foreach ($datos as $fila): ?>
        <tbody>
            <tr>
                <td><?php echo $fila->nombre; ?></td>
                <td><?php echo $fila->apellido; ?></td>
                <td><?php echo $fila->email; ?></td>
                <td><?php echo $fila->direccion; ?></td>
                <td><?php echo $fila->usuario; ?></td>
                <td><button id='editar<?php echo $i ?>' onclick='editUserConsumer(<?php echo $fila->id_usuario ?>)' class="btn btn-sm btn-default" data-toggle="modal" data-target="#editarConsumer"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar</button></td>
                <td><button id='eliminar<?php echo $i ?>' onclick='deleteUserConsumer(<?php echo $fila->id_usuario ?>)' class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar</button></td>
            </tr>
        </tbody>
        <?php $i++;
    endforeach; ?>
    </table>
<?php endif; ?>
<input type="hidden" id='oculto' value='<?php echo $i ?>'/>
<div class="modal fade" id="editarConsumer">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h3 class="modal-title"><strong>Editar Usuario</strong></h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <form class="form-signin">
                            <label>nombre</label>
                            <input  id="in-name-consumer" class="form-control" autofocus type="text"/>
                            <label>Apellido</label>
                            <input id="in-surname-consumer" class="form-control" type="text"/>
                            <label>email</label>
                            <input id="in-email-consumer" class="form-control" type="text"/>
                            <label>Dirección</label>
                            <input id="in-adress-consumer" class="form-control" type="text"/>
                            <label>Usuario</label>
                            <input id="in-user-consumer" class="form-control" type="text" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal" onclick="updateUserConsumer()"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Editar</button>
                <button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->