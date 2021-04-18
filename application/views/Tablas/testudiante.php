
<table class="table table-bordered">
  <thead>
    <tr>
     <th scope="col">Identificación</th>
     <th scope="col">Nombre</th>
     <th scope="col">Apellido</th>
     <th scope="col">Genero</th>

   </tr>
 </thead>
 <tbody>
  <?php
  if(!empty($estudiante)){
    foreach ($estudiante->result() as $data ) {      
      ?>
      <tr>

        <th scope="row">
          <?php
          echo $data->identificacion_e;
          ?>
        </th>
        <td>
         <?php
         echo $data->nombre_e;
         ?>
       </td>
       <td>
         <?php
         echo $data->apellido_e;
         ?>
       </td>
       <td>
         <?php
         echo $data->genero_e;
         ?>
       </td>
      
      
       </tr>
       <?php
     }
   }
   ?>
 </tbody>
</table>



<script type="text/javascript" src="<?php echo base_url('asistentes/js/controlador/app.js');  ?>"></script>

<script type="text/javascript" src="<?php echo base_url('asistentes/js/componentes/variableglobales.js');  ?>"></script>

<script type="text/javascript" src="<?php echo base_url('asistentes/js/Librerias/jquery.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('asistentes/js/Librerias/popper.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('asistentes/js/Librerias/bootstrap.min.js');  ?>"></script>

