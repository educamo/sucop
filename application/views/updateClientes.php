<div class="container">
    <hr>
    <?Php
    $cant = 0;
    $deuda = 0;
    ?>

    <form action="#" method="post" name="updateClientes" id="updateClientes">

        <div class="row">
            <div class="col col-md-2">
                <label for="clienteId" class="form-label">Cédula</label>
                <input type="text" class="form-control" name="clienteId" id="clienteId" value="<?= $clienteId ?>">
                <input type="hidden" class="form-control" name="clienteId2" id="clienteId2" value="<?= $clienteId ?>">
            </div>
            <div class="col col-md-4">
                <label for="clienteName" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="clienteName" id="clienteName" value="<?= $clienteName ?>">
            </div>
            <div class="col col-md-2">
                <label for="teléfono" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="telefono" id="telefono" value="<?= $telefono ?>">
            </div>
            <div class="col col-md-4">
                <label for="mail" class="form-label">Email</label>
                <input type="text" class="form-control" name="mail" id="mail" value="<?= $mail ?>">
            </div>
        </div>

        <div class="row mt-1">
            <div class="col col-md-2">
                <label for="clienteRif" class="form-label">RIF</label>
                <input type="text" class="form-control" name="clienteRif" id="clienteRif" value="<?= $clienteRif ?>">
            </div>
            <div class="col col-md-2">
                <label for="clienteNic" class="form-label">NIC</label>
                <input type="text" class="form-control" name="clienteNic" id="clienteNic" value="<?= $clienteNic ?>">
            </div>
            <div class="col col-md-2">
                <label for="clienteSap" class="form-label">Contrato SAP</label>
                <input type="text" class="form-control" name="clienteSap" id="clienteSap" value="<?= $clienteSap ?>">
            </div>
            <div class="col col-md-2">
                <label for="clienteContador" class="form-label">Contador N°</label>
                <input type="text" class="form-control" name="clienteContador" id="clienteContador" value="<?= $clienteContador ?>">
            </div>
            <div class="col col-md-4">
                <label for="referencia" class="form-label">Referencia</label>
                <input type="text" class="form-control" name="referencia" id="referencia" value="<?= $referencia ?>">
            </div>
        </div>

        <div class="row mt-1">
            <div class="col col-md-8">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="direccion" id="direccion" value="<?= $direccion ?>">
            </div>
            <div class="col col-md-2">
                <label for="lat" class="form-label">Latitud</label>
                <input type="text" class="form-control" name="lat" id="lat" value="<?= $lat ?>">
            </div>
            <div class="col col-md-2">
                <label for="lng" class="form-label">Longtud</label>
                <input type="text" class="form-control" name="lng" id="lng" value="<?= $lng ?>">
            </div>
        </div>

        <!-- datatable -->
        <div class="row mt-4">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 15%;">N° Factura</th>
                            <th style="width: 10%;">Fecha</th>
                            <th style="width: 20%;">Monto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?Php
                        foreach ($facturas as $factura) {
                            $cant = $cant + 1;
                            $deuda = $deuda + $factura->total;
                        ?>
                            <tr>
                                <td><?= $factura->facturaN ?></td>
                                <td><?= $factura->fecha ?></td>
                                <td><?= $factura->total ?></td>
                            </tr>
                        <?Php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row justify-content-md-end mt-2">
            <div class="col col-md-2">
                <label for="cantFact" class="form-label">Cant. Facturas</label>
                <input type="text" name="cantFact" id="cantFact" class="form-control" disabled value="<?= $cant ?>">
            </div>
            <div class="col col-md-2">
                <label for="total" class="form-label">Total Deuda</label>
                <input type="text" name="total" id="total" class="form-control" disabled value="<?= $deuda ?>">
            </div>
        </div>

        <hr>

        <p>Datos Técnicos del Medidor</p>

        <div class="row">
            <div class="col col-md-2">
                <label for="ruta" class="form-label">Ruta</label>
                <input type="text" name="ruta" id="ruta" class="form-control" value="<?= $ruta ?>">
            </div>
            <div class="col col-md-2">
                <label for="itinerario" class="form-label">Itinerario</label>
                <input type="text" name="itinerario" id="itinerario" class="form-control" value="<?= $itinerario ?>">
            </div>
            <div class="col col-md-2">
                <label for="aol" class="form-label">AOL</label>
                <input type="text" name="aol" id="aol" class="form-control" value="<?= $aol ?>">
            </div>
            <div class="col col-md-2">
                <label for="unidadL" class="form-label">Unidad L.</label>
                <input type="text" name="unidadL" id="unidadL" class="form-control" value="<?= $unidadL ?>">
            </div>
            <div class="col col-md-2">
                <label for="instalacion" class="form-label">Instalación</label>
                <input type="text" name="instalacion" id="instalacion" class="form-control" value="<?= $instalacion ?>">
            </div>
            <div class="col col-md-2">
                <label for="dac" class="form-label">D.A.C.</label>
                <input type="text" name="dac" id="dac" class="form-control" value="<?= $dac ?>">
            </div>
        </div>

        <div class="row mt-1">
            <div class="col col-md-2">
                <label for="serial" class="form-label">Serial</label>
                <input type="text" name="serial" id="serial" class="form-control" value="<?= $serial ?>">
            </div>
            <div class="col col-md-6">
                <label for="fabricante" class="form-label">Fabricante</label>
                <input type="text" name="fabricante" id="fabricante" class="form-control" value="<?= $fabricante ?>">
            </div>
            <div class="col col-md-4">
                <label for="tarifa" class="form-label">Tarifa</label>
                <input type="text" name="tarifa" id="tarifa" class="form-control" value="<?= $tarifaId ?>">
            </div>
        </div>

        <div class="row mt-4 text-center">
            <div class="col col-md-12">
                <button class="btn btn-danger" id="refrescar" id="limpiar" name="limpiar">Limpiar</button>
                <button type="submit" class="btn btn-success" id="guardar" name="guardar">Guardar</button>
            </div>
        </div>

    </form>

    <div class="row"><button class="btn btn-info" style="width: auto; height: 50px;" id="mostrarMapa"><i class="fas fa-fw fa-location-arrow"></i> Mapa</button></div>

    <div class="row" id="mapa">
        <div class="col col-md-12 text-center">
            <div id="map" style="height: 450px; width: 600px; margin: 15px;"></div>
        </div>
    </div>
    <!--
     The `defer` attribute causes the callback to execute after the full HTML
     document has been parsed. For non-blocking uses, avoiding race conditions,
     and consistent behavior across browsers, consider loading using Promises
     with https://www.npmjs.com/package/@googlemaps/js-api-loader.
    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-9znh882W6XVLDiYQIyeb0t2mix3_ji0&callback=initMap&v=weekly" defer></script>




</div>

<script>
    //Cuando la página esté cargada
    $(document).ready(function() {
        //Creamos el evento click del botón
        $("#refrescar").click(function() {
            //Actualizamos la página
            location.reload();
        });

        $("#updateClientes").submit(function(event) {

            // Prevent the form from submitting
            event.preventDefault();


            //creo variable con la url del ajax
            var urlajax = "<?= base_url(); ?>" + "Administracion/updateCliente";

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
                    $("#mensaje").html("se actualizaron los datos del cliente");
                    setTimeout("location.reload(true);", 3000);
                }
            })
        });
        $('#mapa').attr('style', 'display:none;');

    });

    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: {
                lat: <?= $lat ?>,
                lng: <?= $lng ?>
            },
            zoom: 19,
        });

        $("#mostrarMapa").on( "click", function() {	 
	        $('#mapa').toggle();
	         });
    }

</script>