    <?php
    $i = 0;
    foreach ($datos as $fila):
        ?>
        <div class="col-xs-4">
            <img class="img-circle center-block" src="<?php echo base_url() ?><?php echo $fila->foto; ?>"width="140" height="140">
            <h4 class="alert alert-success"><span><strong><?php echo $fila->nombre; ?></strong></span></h4>
            <p><span><strong>Descripcion:</strong> <?php echo $fila->descripcion; ?></span></p>
            <p><span><strong>Marca:</strong> <?php echo $fila->marca; ?></span></p>
            <p><span><strong>Modelo:</strong> <?php echo $fila->modelo; ?></span></p>
            <p><span><strong>Precio: </strong>$ <?php echo number_format($fila->precio); ?></span></p>
            <h5 class="alert alert-warning"><span><strong>Stock:</strong> <?php echo $fila->stock; ?></span></h5>
            <p><span><srtong>Cantidad:</srtong></span></p>
            <p><input id="cantidad<?php echo $fila->id_producto ?>" type="number" value="0" min="0" max="<?php echo $fila->stock ?>" class="form-group btn btn-default"/input></p>
            <p><a class="btn btn-default" role="button"
            onclick="addProductCar(<?php echo $fila->id_producto ?>);">Añadir al  Carro! &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <?php $i++;
    endforeach;
    ?>