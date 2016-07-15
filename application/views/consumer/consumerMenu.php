<h3><strong>Tu Menu</strong></h3>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <div class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Pedidos
        </div>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      	<div class="panel alert" role="button" onclick="newPedido();">Carrito de Productos</div>
      	<div class="panel alert" role="button" >Historia de mis Compras</div>
      	<div class="panel alert" role="button" >Mis Pedidos Pagados</div>
      	<div class="panel alert" role="button" >Mis Pedidos Completados</div>
      </div>
    </div>
  </div>
  <div class="panel">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <div role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          Mi Cuenta
        </div>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
      	<div class="panel alert" role="button" onclick="userConsumer();">Mis Datos</div>
      	<div class="panel alert" role="button" onclick="userList();">Cambiar Clave</div>
      </div>
    </div>
  </div>
</div>