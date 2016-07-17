    <?php
    $i = 0;
    foreach ($datos as $fila):
        ?>
        <div class="col-xs-3">
            <img class="img-circle center-block" src="<?php echo base_url() ?><?php echo $fila->foto; ?>"width="140" height="140">
            <h4 class="alert form-control" align="center"><span><strong><?php echo $fila->nombre; ?></strong></span></h4>
            <p class="form-control" align="center"><span><strong>Precio: </strong>$ <?php echo number_format($fila->precio); ?></span></p>
            <h5 class="alert form-control" align="center"><span><strong>Stock:</strong> <span class="badge"> <?php echo $fila->stock; ?></span></h5>
            <div class="input-group input-group-sm"></div><br>
            <p><a class="btn btn-block btn-success" role="button"
            onclick="addProductCar(<?php echo $fila->id_producto ?>);">Añadir! 
                    <span class="glyphicon glyphicon-shopping-cart"></span>
                </a></p>
        </div><!-- /.col-lg-4 -->
        <?php $i++;
    endforeach;
    ?>