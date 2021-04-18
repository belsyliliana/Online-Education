<table class="table table-bordered">
  <thead>
    <tr>
     <th scope="col">Codigo</th>
     <th scope="col">Nombre del Curso</th>
     <th scope="col">Observación</th>

   </tr>
 </thead>
 <tbody>
  <?php
  if(!empty($cursos)){
    foreach ($cursos->result() as $data ) {      
      ?>
      <tr>

        <th scope="row">
          <?php
          echo $data->codigo;
          ?>
        </th>
        <td>
         <?php
         echo $data->nombre_c;
         ?>
       </td>
       <td>
         <?php
         echo $data->observacion_c;
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

