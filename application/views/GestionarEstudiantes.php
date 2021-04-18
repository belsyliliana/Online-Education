  <div class="shadow-lg p-3 mb-5 bg-white rounded container" style=" width: 100%;">
    <div class="con">

      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#registrar" role="tab" aria-controls="registrar" aria-selected="true">Registrar Estudiantes</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mostrar Estudiantes</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Modificar Estudiantes</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#eliminar" role="tab" aria-controls="eliminar" aria-selected="false">Eliminar Estudiantes</a>
        </li>

      </ul>
      <!-- registrar Estudiantes -->

      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="registrar" role="tabpanel" aria-labelledby="home-tab">

          <div class="container p-4">

            <div class="row">

              <div class="col-md-8 mx-auto">

                <div class="card card-body">




                  <div class="form-group">
                   <input class="input-number" type="text" name="Identificacione" id="Identificacione" class="form-control" placeholder="Ingrese su Identificación" autofocus>
                 </div>

                 <div class="form-group">
                   <input class="input-letter" type="text" name="Nombree" id="Nombree" class="form-control" placeholder="Ingrese su Nombre" autofocus>
                 </div>

                 <div class="form-group">
                   <input class="input-letter" type="text" name="Apellidoe" id="Apellidoe" rows="2" class="form-control" placeholder="Ingrese su Apellido" autofocus>
                 </div>

                 <div class="form-group">

                  <div class="form-group">

                   <select class="browser-default custom-select" id="Generoe" placeholder="Ingrese su Genero" autofocus>
                    <option value="" disabled selected>Seleccione su Genero</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                    <option value="Otros">Otros</option>
                  </select>

                </div>
              </div>

              <button type="button" onclick="guardarEstudiante()" class="form-control btn btn-register" style="background: #ff6b00;">Registrar</button>
            </div>

          </div>
        </div>

      </div>

    </div>

    <!-- Mostrar Estudiantes -->

    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">


      <br>
      <br>

      <div id="testudiante">

      </div>


    </div>

    <!-- Modificar Estudiantes -->

    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

      <div class="container p-4">

        <div class="row">

          <div class="col-md-8 mx-auto">

            <div class="card card-body">


              

              <div class="form-group">
               <input class="input-number" type="text" name="Identificacionee" id="Identificacionee" class="form-control" placeholder="Ingrese su Identificación" autofocus>
             </div>

             <div class="form-group">
              <button type="button" class="btn btn-outline-warning form-control" class="btn btn-outline-warning" onclick="Buscarestudiantee()">Buscar</button>
             </div>


             <div class="form-group">
               <input  class="input-letter" type="text" name="Nombreee" id="Nombreee" class="form-control" placeholder="Nombre" autofocus>
             </div>

             <div class="form-group">
               <input  class="input-letter" type="text" name="Apellidoee" id="Apellidoee" rows="2" class="form-control" placeholder="Apellido" autofocus>
             </div>

             <div class="form-group">
               <input type="text" name="Generoee" id="Generoee" rows="3" class="form-control" placeholder="Genero" autofocus>
             </div>

             <button type="button" onclick="ActualizarEstudiante()" class="form-control btn btn-register" style="background: #ff6b00;">
               <span class="glyphicon glyphicon-floppy-disk"></span> Modificar </button>


             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Eliminar Estudiantes -->

     <div class="tab-pane fade" id="eliminar" role="tabpanel" aria-labelledby="profile-tab">

      <div class="container p-4">

        <div class="row">

          <div class="col-md-8 mx-auto">

            <div class="card card-body">




              <div class="form-group">
               <input class="input-number" type="text" name="Identificacioneee" id="Identificacioneee" class="form-control" placeholder="Ingrese su Identificación" autofocus>

             <div class="form-group">
              <button type="button" class="btn btn-outline-warning form-control" class="btn btn-outline-warning" onclick="Buscar()">Buscar</button>
             </div>


             <div class="form-group">
               <input type="text" name="Nombreeeee" id="Nombreeeee" class="form-control" placeholder="Nombre" readonly>
             </div>

             <div class="form-group">
               <input type="text" name="Apellidoeee" id="Apellidoeee" rows="2" class="form-control" placeholder="Apellido" readonly>
             </div>

             <div class="form-group">
               <input type="text" name="Generoeee" id="Generoeee" rows="3" class="form-control" placeholder="Genero" readonly>
             </div>

             <button type="button" onclick="EliminarEstudiante()" class="form-control btn btn-register" >
               <span class="glyphicon glyphicon-floppy-disk"></span> Eliminar </button>

             </div>

           </div>
         </div>

       </div>




     </div>

   </div>

  </div>


  <script type="text/javascript" src="<?php echo base_url('asistentes/js/controlador/app.js');  ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('asistentes/js/componentes/variableglobales.js');  ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('asistentes/js/Librerias/jquery.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('asistentes/js/Librerias/popper.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('asistentes/js/Librerias/bootstrap.min.js');  ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('asistentes/js/controlador/mostrarestudiantes.js');  ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('asistentes/js/controlador/curso.js');  ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('asistentes/js/controlador/docente.js');  ?>"></script>