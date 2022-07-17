<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Usuarios/Actualizar</h1>
    </div>

    <div class="row">

    <?Php
        if ($this->session->flashdata('status')) :
    ?> 

    <div class="alert alert-success">
        <?=$this->session->flashdata('status');?>

        
    </div>

    <?Php

        header('Refresh: 2');
        endif;
    ?> 


        <div class="row">

            <div class="col-lg-12">

                <!-- Default Card Example -->
                <div class="card mb-4">
                    <div class="card-header">
                        Actualizar Datos del Usuario
                    </div>
                    <div class="card-body">
                    <form id="frmActualizar" action="<?= base_url() ?>Administracion/updateUsuario" method="post" onsubmit="funcionSubmit(event)">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="userId" class="form-label">Cedula del Usuario</label>
                                        <input type="text" id="userId" name="userId" class="form-control" required pattern="[0-9]+" minlength="7" maxlength="8" value="<?=$usuario->userId?>">
                                        <input type="hidden" id="cedula" name="cedula" class="form-control" required pattern="[0-9]+" minlength="7" maxlength="8" value="<?=$usuario->userId?>">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="userName" class="form-label">Nombre del Usuario</label>
                                        <input type="text" id="userName" name="userName" class="form-control" required pattern="[a-zA-Z\s]*" minlength="2" maxlength="20" value="<?=$usuario->userName?>">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="mail" class="form-label">Email</label>
                                        <input type="email" name="mail" id="mail" class="form-control" required value="<?=$usuario->mail?>">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="direccion" class="form-label">Dirección</label>
                                        <input type="text" id="direccion" name="direccion" class="form-control" value="<?=$usuario->direccion?>">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="activo" class="form-label">Activo</label>
                                        <select name="activo" id="activo" class="form-select">
                                            <option value="0" <?php if ($usuario->activo == 0)  echo 'selected'?>>Desactivado</option>
                                            <option value="1" <?php if ($usuario->activo == 1)  echo 'selected'?>>Activo</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="admin" class="form-label">Administrador</label>
                                        <select name="admin" id="admin" class="form-select">
                                            <option value="0" <?php if ($usuario->admin == 0)  echo 'selected'?>>Usuario</option>
                                            <option value="1" <?php if ($usuario->admin == 1)  echo 'selected'?>>Administrador</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-center mt-4">
                                    <input type="submit" class="btn btn-success" value="Guardar">
                                    <a href="<?=base_url('Administracion/listUsuario')?>" class="btn btn-danger">Cancelar</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>



            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
</div>
    <!-- End of Main Content -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>