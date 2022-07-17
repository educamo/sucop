<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Usuarios/Nuevo</h1>
    </div>

    <div class="row">

        <?Php
        if ($this->session->flashdata('status')) :
        ?>

            <div class="alert alert-success">
                <?= $this->session->flashdata('status'); ?>


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
                        Agregar usuario
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url() ?>Administracion/guardarUsuario" method="post">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="userId" class="form-label">Cedula del Usuario</label>
                                        <input type="text" id="userId" name="userId" class="form-control" required pattern="[0-9]+" minlength="7" maxlength="8">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="userName" class="form-label">Nombre del Usuario</label>
                                        <input type="text" id="userName" name="userName" class="form-control" required pattern="[a-zA-Z\s]*" minlength="2" maxlength="20">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="password" class="form-label">clave</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="mail" class="form-label">Email</label>
                                        <input type="email" name="mail" id="mail" class="form-control" required>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="direccion" class="form-label">Dirección</label>
                                        <input type="text" name="direccion" id="direccion" class="form-control" required>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="admin" class="form-label">Administrador</label>
                                        <select name="admin" id="admin" class="form-select">
                                            <option value="0">Usuario</option>
                                            <option value="1">Administrador</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-center mt-4">
                                    <input type="submit" class="btn btn-success" value="Guardar">
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