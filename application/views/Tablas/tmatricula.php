<table class="table table-bordered">
  <thead>
    <tr>
     <th scope="col">Codigo</th>
     <th scope="col">Nombre del Curso</th>
     <th scope="col">Identificación Estudiante</th>
     <th scope="col">Nombre Estudiante</th>

   </tr>
 </thead>
 <tbody>
  <?php
  if(!empty($tmatricula)){
    foreach ($tmatricula->result() as $data ) {      
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
         echo $data->identificacion_e;
         ?>
       </td>
       <td>
         <?php
         echo $data->nombre_e;
         ?>
       </td>
  
      
       </tr>
       <?php
     }
   }
   ?>
 </tbody>
</table>
