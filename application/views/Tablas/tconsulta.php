<table class="table table-bordered">
  <thead>
    <tr>
     <th scope="col">Codigo</th>
     <th scope="col">Nombre del Curso</th>
     <th scope="col">Identificación Instructor</th>
     <th scope="col">Nombre Instructor</th>

   </tr>
 </thead>
 <tbody>
  <?php
  if(!empty($tconsulta)){
    foreach ($tconsulta->result() as $data ) {      
      ?>
      <tr>

        <th scope="row">
          <?php
          echo $data->Codigo;
          ?>
        </th>
        <td>
         <?php
         echo $data->nombre_c;
         ?>
       </td>
       <td>
         <?php
         echo $data->identificacion_d;
         ?>
       </td>
       <td>
         <?php
         echo $data->nombre_d;
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
