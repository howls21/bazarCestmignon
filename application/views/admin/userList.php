<div class="row">
    <div class="col-xs-1"></div>
    <div class="col-xs-6">
        <?php if ($datos == 0): ?>
            <p>No Hay Usuarios almacenados!</p>
        <?php else: ?>
            <div id="alert-table" class="alert"></div>
            <h3>Lista de Usuarios</h3>
            <table class="table table-hover">
                <thead>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>email</th>
                <th>Dirección</th>
                <th>Usuario</th>
                <th>Tipo</th>
                </thead>
                <?php $i = 0;
                foreach ($datos as $fila):
                    ?>
                    <tbody>
                        <tr>        
                            <td><?php echo $fila->id_usuario; ?></td>
                            <td><?php echo $fila->nombre; ?></td>
                            <td><?php echo $fila->apellido; ?></td>
                            <td><?php echo $fila->email; ?></td>
                            <td><?php echo $fila->direccion; ?></td>
                            <td><?php echo $fila->usuario; ?></td>
                            <td><?php echo $fila->tipo_usuario; ?></td>
                            <td><button id='editar<?php echo $i ?>' 
                                        onclick='editUser(<?php echo $fila->id_usuario ?>)' 
                                        class="btn btn-sm btn-default" data-toggle="modal" 
                                        data-target="#editarUser">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar</button></td>
                            <td><button id='eliminar<?php echo $i ?>' 
                                        onclick='deleteUser(<?php echo $fila->id_usuario ?>)' 
                                        class="btn btn-sm btn-danger">
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar</button></td>
                        </tr>
                    </tbody>
                    <?php $i++;
                endforeach;
                ?>
            </table>
<?php endif; ?>
        <input type="hidden" id='oculto' value='<?php echo $i ?>'/>
        <div class="modal fade" id="editarUser">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true"><span class="glyphicon glyphicon-remove" 
                                                 aria-hidden="true"></span></button>
                        <h3 class="modal-title"><strong>Editar Usuario</strong></h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <form class="form-signin">
                                    <label>Identificador</label>
                                    <input  id="in-code-admin" class="form-control" 
                                            disabled="true" autofocus type="text"/>
                                    <label>nombre</label>
                                    <input  id="in-name-admin" class="form-control" autofocus type="text"/>
                                    <label>Apellido</label>
                                    <input id="in-surname-admin" class="form-control" type="text"/>
                                    <label>email</label>
                                    <input id="in-email-admin" class="form-control" type="text"/>
                                    <label>Dirección</label>
                                    <textarea id="in-adress-admin" class="form-control" type="text"></textarea>
                                    <label>Usuario</label>
                                    <input id="in-user-admin" class="form-control" type="text" />
                                </form>
                            </div>
                            <div class="col-md-4">
                                <form class="form-signin">
                                    <label>Tipo de Usuario</label>
                                    <select class="btn dropdown-toggle" id="in-type-admin-user">
                                        <option value="1">Administrador</option>
                                        <option value="2">Consumidor</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-danger" data-dismiss="modal">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar</button>
                        <button class="btn btn-sm btn-primary" data-dismiss="modal" 
                                onclick="upDateUser()">Actualizar Usuario</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
</div>