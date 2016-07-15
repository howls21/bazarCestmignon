    <?php
    $i = 0;
    foreach ($datos as $fila):
        ?>
        <div class="col-xs-3">
            <img class="img-circle center-block" src="<?php echo base_url() ?><?php echo $fila->foto; ?>"width="140" height="140">
            <h4 class="alert alert-success"><span><strong><?php echo $fila->nombre; ?></strong></span></h4>
            <p><span><strong>Descripcion:</strong> <?php echo $fila->descripcion; ?></span></p>
            <p><span><strong>Marca:</strong> <?php echo $fila->marca; ?></span></p>
            <p><span><strong>Modelo:</strong> <?php echo $fila->modelo; ?></span></p>
            <p><span><strong>Precio:</strong> <?php echo $fila->precio; ?></span></p>
            <h5 class="alert alert-warning"><span><strong>Stock:</strong> <?php echo $fila->stock; ?></span></h5>
            <p><a class="btn btn-default" role="button" 
            onclick="carProduct(<?php echo $fila->id_producto ?>);">Añadir al  Carro! &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <?php $i++;
    endforeach;
    ?>