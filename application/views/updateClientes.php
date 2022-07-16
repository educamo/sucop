<div class="container">
    <hr>

    <form action="#" method="post" name="updateClientes" id="updateClientes">

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
                <label for="clienteContador" class="form-label">Contrato SAP</label>
                <input type="text" class="form-control" name="clienteContador" id="clienteContador">
            </div>
            <div class="col col-md-2">
                <label for="clienteSap" class="form-label">Contador N°</label>
                <input type="text" class="form-control" name="clienteSap" id="clienteSap">
            </div>
            <div class="col col-md-4">
                <label for="referencia" class="form-label">Referencia</label>
                <input type="text" class="form-control" name="referencia" id="referencia">
            </div>
        </div>

        <div class="row mt-1">
            <div class="col col-md-12">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="direccion" id="direccion">
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row justify-content-md-end mt-2">
            <div class="col col-md-2">
                <label for="cantFact" class="form-label">Cant. Facturas</label>
                <input type="text" name="cantFact" id="cantFact" class="form-control" disabled>
            </div>
            <div class="col col-md-2">
                <label for="total" class="form-label">Total Deuda</label>
                <input type="text" name="total" id="total" class="form-control" disabled value="0">
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
                <button class="btn btn-danger">Limpiar</button>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </div>

    </form>
</div>