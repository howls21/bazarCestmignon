<ul class="grid">
    <?php
    $i = 0;
    foreach ($datos as $fila):
        ?>
        <div class="col-lg-6">
            <img class="img-circle" src="<?php echo base_url() ?><?php echo $fila->foto; ?>"width="140" height="140">
            <h4 class="alert alert-info"><span><strong><?php echo $fila->nombre; ?></strong></span></h4>
            <p><span><strong>Descripcion:</strong> <?php echo $fila->descripcion; ?></span></p>
            <p><span><strong>Marca:</strong> <?php echo $fila->marca; ?></span></p>
            <p><span><strong>Modelo:</strong> <?php echo $fila->modelo; ?></span></p>
            <p><span><strong>Precio:</strong> <?php echo $fila->precio; ?></span></p>
            <h5 class="alert alert-success"><span><strong>Stock:</strong> <?php echo $fila->stock; ?></span></h5>
            <p><a class="btn btn-default" href="#" role="button">al Carro! &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <?php $i++;
    endforeach;
    ?>
</ul>