 <!-- Begin Page Content -->
 <div class="container">
   <hr>
   <h3>Lista de Clientes</h3>

   <!-- DataTales Example -->
   <div class="table-responsive">
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
       <thead>
         <tr>
           <th>Nombre del Cliente</th>
           <th>Cédula de Identidad</th>
           <th>RIF</th>
           <th>NIC</th>
           <th>Contrato SAP</th>
           <th>Contador N°</th>
         </tr>
       </thead>

       <tbody>
         <?Php
          foreach ($clientes as $cliente) {
          ?>
           <tr>
             <td><?= $cliente->clienteName ?></td>
             <td><?= $cliente->clienteId ?></td>
             <td><?= $cliente->clienteRif ?></td>
             <td><?= $cliente->clienteNic ?></td>
             <td><?= $cliente->clienteSap ?></td>
             <td><?= $cliente->clienteContador ?></td>
           </tr>
         <?Php
          }
          ?>
       </tbody>
     </table>
   </div>


 </div>
 <!-- /.container -->