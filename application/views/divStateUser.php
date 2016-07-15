<form class="form-inline">
        <div class="input-group input-group-sm">
            <p class="alert alert-default form-control"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <strong>Hola!: </strong> <?php echo $this->session->userdata('name') ?> <?php echo $this->session->userdata('surname') ?></p>
        </div>
        <div class="input-group input-group-sm">
            <a class="alert btn btn-danger form-control" href="<?php echo base_url()?>index.php/controlador/close">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Cerrar Sesion</a>
        </div>
</form>