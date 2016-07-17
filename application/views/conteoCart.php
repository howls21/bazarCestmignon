<form class="form-inline">
    <div class="input-group input-group-sm">
        <p class="alert alert-default  form-control" onclick='verCarrito();'><strong>Carrito <span class="glyphicon glyphicon-shopping-cart"></span></strong>
            <span class="badge"> <?php echo $this->cart->total_items() ?></span></p>
    </div>
</form>
