<h3><strong> Menu</strong></h3>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <div role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Usuarios
                </div>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="panel alert" role="button" onclick="newUser();">Nuevo Usuario</div>
                <div class="panel alert" role="button" onclick="userList();">Listar Usuarios</div>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
                <div class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Estadisticas
                </div>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <div class="panel alert" role="button">Estadisticas</div>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
                <div class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Productos
                </div>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
                <div class="panel alert" role="button" onclick="newCategory();">Nueva Categoria</div>
                <div class="panel alert" role="button" onclick="categoryList();">Lista Categorias</div>
                <div class="panel alert" role="button" onclick="newProduct();">Nuevo Producto</div>
                <div class="panel alert" role="button" onclick="productListAdmin();">Lista Productos</div>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="panel-heading" role="tab" id="headingfor">
            <h4 class="panel-title">
                <div class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefor" aria-expanded="false" aria-controls="collapsefor">
                    Pedidos
                </div>
            </h4>
        </div>
        <div id="collapsefor" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfor">
            <div class="panel-body">
                <div class="panel alert" role="button">Listar Pedidos</div>
                <div class="panel alert" role="button">Pedidos Pagados</div>
                <div class="panel alert" role="button"">Pedidos Anulados</div>
            </div>
        </div>
    </div>
</div>