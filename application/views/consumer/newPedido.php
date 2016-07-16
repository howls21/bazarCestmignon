<h1><strong>Mi Carrito RQL:</strong></h1>
<?php foreach ($datos as $fila): ?>
    <div class="col-xs-3">
        <img class="img-circle center-block" src="<?php echo base_url() ?>" width="140" height="140">
        <h4 class="alert alert-success"><span><strong><?php echo $fila['name']; ?></strong></span></h4>
        <p><span><strong>Precio:</strong>$ <?php echo number_format($fila['price']); ?></span></p>
        <h5 class="alert alert-warning"><span><strong>Cantidad:</strong> <?php echo $fila['qty']; ?></span></h5>
        <h5 class="alert alert-danger">
            <span><strong>Subtotal:</strong> $ <?php echo number_format($fila['subtotal']); ?></span></h5>
    </div><!-- /.col-lg-4 -->
    </div><!-- /.col-lg-4 -->
<?php endforeach; ?>
<a class="btn btn-danger btn-lg" id="btn-cancel" role="button" onclick="cancelCart()">Cancelar Carro Ql!</a>
<a class="btn btn-success btn-lg" id="btn-agregarProductos" role="button" onclick="comprarMas()">Seguir Comprando</a>
