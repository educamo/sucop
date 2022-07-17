<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Clientes/Nuevo</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Crear nuevo Cliente</h6>
        </div>
        <div class="card-body">
            <hr>

            <form action="#" method="post" name="nuevoCliente" id="nuevoCliente">

                <div class="row">
                    <div class="col col-md-2">
                        <label for="clienteId" class="form-label">Cédula</label>
                        <input type="text" class="form-control" name="clienteId" id="clienteId">
                    </div>
                    <div class="col col-md-4">
                        <label for="clienteName" class="form-label">Usuario</label>
                        <input type="text" class="form-control" name="clienteName" id="clienteName">
                    </div>
                    <div class="col col-md-2">
                        <label for="teléfono" class="form-label">Telefono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono">
                    </div>
                    <div class="col col-md-4">
                        <label for="mail" class="form-label">Email</label>
                        <input type="text" class="form-control" name="mail" id="mail">
                    </div>
                </div>

                <div class="row mt-1">
                    <div class="col col-md-2">
                        <label for="clienteRif" class="form-label">RIF</label>
                        <input type="text" class="form-control" name="clienteRif" id="clienteRif">
                    </div>
                    <div class="col col-md-2">
                        <label for="clienteNic" class="form-label">NIC</label>
                        <input type="text" class="form-control" name="clienteNic" id="clienteNic">
                    </div>
                    <div class="col col-md-2">
                        <label for="clienteSap" class="form-label">Contrato SAP</label>
                        <input type="text" class="form-control" name="clienteSap" id="clienteSap">
                    </div>
                    <div class="col col-md-2">
                        <label for="clienteContador" class="form-label">Contador N°</label>
                        <input type="text" class="form-control" name="clienteContador" id="clienteContador">
                    </div>
                    <div class="col col-md-4">
                        <label for="referencia" class="form-label">Referencia</label>
                        <input type="text" class="form-control" name="referencia" id="referencia">
                    </div>
                </div>

                <div class="row mt-1">
                    <div class="col col-md-8">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" name="direccion" id="direccion">
                    </div>
                    <div class="col col-md-2">
                        <label for="lat" class="form-label">Latitud</label>
                        <input type="text" class="form-control" name="lat" id="lat">
                    </div>
                    <div class="col col-md-2">
                        <label for="lng" class="form-label">Longtud</label>
                        <input type="text" class="form-control" name="lng" id="lng">
                    </div>
                </div>

                <hr>

                <p>Datos Técnicos del Medidor</p>

                <div class="row">
                    <div class="col col-md-2">
                        <label for="ruta" class="form-label">Ruta</label>
                        <input type="text" name="ruta" id="ruta" class="form-control">
                    </div>
                    <div class="col col-md-2">
                        <label for="itinerario" class="form-label">Itinerario</label>
                        <input type="text" name="itinerario" id="itinerario" class="form-control">
                    </div>
                    <div class="col col-md-2">
                        <label for="aol" class="form-label">AOL</label>
                        <input type="text" name="aol" id="aol" class="form-control">
                    </div>
                    <div class="col col-md-2">
                        <label for="unidadL" class="form-label">Unidad L.</label>
                        <input type="text" name="unidadL" id="unidadL" class="form-control">
                    </div>
                    <div class="col col-md-2">
                        <label for="instalacion" class="form-label">Instalación</label>
                        <input type="text" name="instalacion" id="instalacion" class="form-control">
                    </div>
                    <div class="col col-md-2">
                        <label for="dac" class="form-label">D.A.C.</label>
                        <input type="text" name="dac" id="dac" class="form-control">
                    </div>
                </div>

                <div class="row mt-1">
                    <div class="col col-md-2">
                        <label for="serial" class="form-label">Serial</label>
                        <input type="text" name="serial" id="serial" class="form-control">
                    </div>
                    <div class="col col-md-6">
                        <label for="fabricante" class="form-label">Fabricante</label>
                        <input type="text" name="fabricante" id="fabricante" class="form-control">
                    </div>
                    <div class="col col-md-4">
                        <label for="tarifa" class="form-label">Tarifa</label>
                        <input type="text" name="tarifa" id="tarifa" class="form-control">
                    </div>
                </div>

                <div class="row mt-4 text-center">
                    <div class="col col-md-12">
                        <button class="btn btn-danger" id="refrescar" id="limpiar" name="limpiar">Limpiar</button>
                        <button type="submit" class="btn btn-success" id="guardar" name="guardar">Guardar</button>
                    </div>
                </div>

            </form>


        </div>
    </div>
</div>

<script>
    //Cuando la página esté cargada
    $(document).ready(function() {
        //Creamos el evento click del botón
        $("#refrescar").click(function() {
            //Actualizamos la página
            location.reload();
        });

        $("#nuevoCliente").submit(function(event) {

            // Prevent the form from submitting
            event.preventDefault();


            //creo variable con la url del ajax
            var urlajax = "<?= base_url(); ?>" + "Administracion/guardarCliente";

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
                    var cargando = '<div class="d-flex align-items-center"><strong>Guardando... </strong><div class="spinner-border ms-auto text-primary " role="status" aria-hidden="true"></div></div>';
                    $("#mensaje").html(cargando);
                    $("#guardar").attr('disabled', 'disabled');
                    $("#limpiar").attr('disabled', 'disabled');
                },
                success: function(data) {
                    $("#mensaje").html("se guardaron los datos del cliente");
                    setTimeout("location.reload(true);", 3000);
                }
            })
        });

    });
</script>