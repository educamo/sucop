 <!-- Begin Page Content -->
 <div class="container-fluid">

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

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Usuarios/Ver</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Lista de Usuarios</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Nombre de Usuario</th>
            <th>Email</th>
            <th>Administrador</th>
            <th>Esta Activo</th>
            <th>Accion</th>
          </tr>
        </thead>
    
        <tbody>
            <?Php
                foreach ($users as $usuario) {
                    if ($usuario->admin == 1) {
                        $administrador = 'Si';
                    }else {
                        $administrador = 'No';
                    }
                    if ($usuario->activo == 1) {
                      $activo = 'Si';
                    }else {
                      $activo = 'No';
                    }
            ?> 
          <tr>
            <td><?=$usuario->userId?></td>
            <td><?=$usuario->userName?></td>
            <td><?=$usuario->mail?></td>
            <td><?=$administrador?></td>
            <td><?= $activo ?></td>
            <td class="text-center">
                <a href="<?= base_url() ?>Administracion/actualizarUsuario/<?=$usuario->userId?>" class="btn btn-warning text-ligth"> <i class="fa fa-edit"></i></a>
                <a href="<?= base_url() ?>Administracion/borrarUsuario/<?=$usuario->userId?>" class="btn btn-danger text-ligth"> <i class="fa fa-trash"></i></a>
            </td>
          </tr>
          <?Php
              }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->