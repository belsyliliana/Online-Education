
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
  if(!empty($docente)){
    foreach ($docente->result() as $data ) {      
      ?>
      <tr>

        <th scope="row">
          <?php
          echo $data->identificacion_d;
          ?>
        </th>
        <td>
         <?php
         echo $data->nombre_d;
         ?>
       </td>
       <td>
         <?php
         echo $data->apellido_d;
         ?>
       </td>
       <td>
         <?php
         echo $data->genero_d;
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

