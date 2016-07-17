<h1><strong>Mis Pedidos:</strong></h1>
<div class="row">
    <?php foreach ($datos as $fila): ?>
        <div class="col-xs-3">
            <h4 class="alert form-control" align="center"><span><strong><?php echo $fila['name']; ?></strong></span></h4>
            <p class="form-control" align="center"><span><strong>Precio:</strong>$ <?php echo number_format($fila['price']); ?></span></p>
            <div class="input-group input-group-sm">
                <span class="input-group-addon" id="basic-addon1" aria-hidden="true">Cantidad: </span>
                <input class="form-control" type="number" value="<?php echo $fila['qty']; ?>" />
            </div><br>
            <h5 class="alert alert-success">
                <span><strong>Subtotal:</strong> $ <?php echo number_format($fila['subtotal']); ?></span></h5>
            <p><a class="btn btn-block btn-danger" onclick="deletProductCart(<?php echo $fila['rowid'];?>)">Eliminar Producto</a></p>
        </div><!-- /.col-xs-3 -->
    <?php endforeach; ?>
</div>
<div class="input-group input-group-sm">
    <h5 class="alert alert-success">
        <span><strong>Total: </strong> $ <?php echo number_format($this->cart->Total()); ?></span>
    </h5>
</div>
<div class="row">
    <br>
    <a class="btn btn-danger btn-sm" id="btn-cancel" role="button" onclick="cancelCart()">Cancelar Todo!</a>
    <a class="btn btn-success btn-sm" id="btn-agregarProductos" role="button" onclick="comprarMas()">Seguir Comprando</a>
</div>