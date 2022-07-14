<!-- Begin Page Content -->
<div class="container-fluid">

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

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Clientes/Actualización</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Consultar Cliente</h6>
        </div>
        <div class="card-body">
            <form action="#" method="post" name="consulta" id="consulta">
                <div class="row">
                    <div class="col-md-4">
                        <fieldset>
                            <legend>Elige un metodo de filtrar</legend>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="filtro" id="cedula" value="cedula" checked>
                                <label class="form-check-label" for="cedula">
                                    Cedula de Identidad
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="filtro" id="rif" value="rif">
                                <label class="form-check-label" for="rif">
                                    R.I.F.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="filtro" id="nic" value="nic">
                                <label class="form-check-label" for="nic">
                                    N.I.C.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="filtro" id="contrato" value="contrato">
                                <label class="form-check-label" for="contrato">
                                    Contrato SAP
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="filtro" id="contador" value="contador">
                                <label class="form-check-label" for="contador">
                                    Contador N°
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-8">
                        <label for="numero">Introduzca el numero a consultar</label>
                        <input class="form-control" type="text" aria-label="Introduzca el numero" name="numero" id="numero">
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-md-6 align-self-end">
                        <button type="submit" class="btn btn-primary mb-3">Consultar Cliente</button>
                    </div>
                </div>
            </form>
            <div class="row" id="mensaje"></div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script>
    $(document).ready(function() {
        var urlbase = "<?= base_url(); ?>";
        $("#consulta").submit(function(event) {

            // Prevent the form from submitting
            event.preventDefault();


            //creo variable con la url del ajax
            var urlajax = urlbase + "Administracion/consultarCliente";

            // Run $.ajax() here
            // Using the core $.ajax() method
            $.ajax({

                    // The URL for the request
                    url: urlajax,

                    // The data to send (will be converted to a query string)
                    data: $(this).serializeArray(),

                    // Whether this is a POST or GET request
                    type: "POST",


                    beforeSend: function(objeto) {
                        $("#mensaje").html("Mensaje: Cargando...");
                    },
                    success: function(data) {
                        $("#mensaje").html(data);
                    }
                })
        });

    });
</script>