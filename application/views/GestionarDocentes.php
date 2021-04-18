  <div class="shadow-lg p-3 mb-5 bg-white rounded container" style=" width: 100%;">
    <div class="con">

      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#registrar" role="tab" aria-controls="registrar" aria-selected="true">Registrar Docentes</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mostrar Docentes</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Modificar Docentes</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#eliminar" role="tab" aria-controls="eliminar" aria-selected="false">Eliminar Docentes</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#matricular" role="tab" aria-controls="matricular" aria-selected="false">Asignar Curso a Docentes</a>
        </li>
      </ul>
      <!-- registrar Docente -->

      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="registrar" role="tabpanel" aria-labelledby="home-tab">

          <div class="container p-4">

            <div class="row">

              <div class="col-md-8 mx-auto">

                <div class="card card-body">




                  <div class="form-group">
                   <input class="input-number" type="text" name="Identificacion" id="Identificaciond" class="form-control" placeholder="Ingrese su Identificación" autofocus>
                 </div>


                 <div class="form-group">
                   <input class="input-letter" type="text" name="nombre" id="Nombred" class="form-control" placeholder="Ingrese su Nombre" autofocus>
                 </div>

                 <div class="form-group">
                   <input class="input-letter" type="text" name="Apellido" id="Apellidod" rows="2" class="form-control" placeholder="Ingrese su Apellido" autofocus>
                 </div>

                 <div class="form-group">

                  <div class="form-group">

                   <select class="browser-default custom-select" id="Generod" placeholder="Ingrese su Genero" autofocus>
                    <option value="" disabled selected>Seleccione su Genero</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                    <option value="Otros">Otros</option>
                  </select>

                </div>
              </div>

              <button type="button" onclick="guardarDocente()" class="form-control btn btn-register" style="background: #ff6b00;">
              Registrar</button>

            </div>

          </div>
        </div>

      </div>
      
    </div>

    <!-- Mostrar Docente -->

    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">


      <br>
      <br>

      <div id="tdocentes">

      </div>


    </div>

    <!-- ModificarDocente -->

    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

     <div class="container p-4">

      <div class="row">

        <div class="col-md-8 mx-auto">

          <div class="card card-body">




            <div class="form-group">
             <input class="input-number" type="text" name="Identificacion_d" id="Identificacion_d" class="form-control" placeholder="Ingrese su Identificación" autofocus>
           </div>
            
             <div class="form-group">
              <button type="button" class="btn btn-outline-warning form-control" class="btn btn-outline-warning" onclick="Buscar_docente()">Buscar</button>
             </div>

           <div class="form-group">
             <input class="input-letter" type="text" name="Nombre_d" id="Nombre_d" class="form-control" placeholder="Nombre" autofocus>
           </div>
           
           <div class="form-group">
             <input class="input-letter" type="text" name="Apellido_d" id="Apellido_d" rows="2" class="form-control" placeholder="Apellido" autofocus>
           </div>

           <div class="form-group">
             <input  type="text" name="Genero_d" id="Genero_d" rows="3" class="form-control" placeholder="Ingrese su Genero" autofocus>
           </div>

           <button type="button" onclick="Actualizardocente()" class="form-control btn btn-register" style="background: #ff6b00;">
             <span class="glyphicon glyphicon-floppy-disk"></span> Actualizar </button>


           </div>

         </div>
       </div>

     </div>



   </div>

   <!-- Eliminar Docente -->

   <div class="tab-pane fade" id="eliminar" role="tabpanel" aria-labelledby="profile-tab">


    <div class="container p-4">

<div class="row">

<div class="col-md-8 mx-auto">

<div class="card card-body">




  <div class="form-group">
       <input class="input-number" type="text" name="Identificaciond_d" id="Identificaciond_d" class="form-control" placeholder="Ingrese su Identificación" autofocus>
      </div>
    
     <div class="form-group">
              <button type="button" class="btn btn-outline-warning form-control" class="btn btn-outline-warning" onclick="Buscardocente_d()">Buscar</button>
             </div>

        <div class="form-group">
       <input type="text" name="Nombred_d" id="Nombred_d" class="form-control" placeholder="Nombre" readonly>
      </div>
      
      <div class="form-group">
       <input type="text" name="Apellidod_d" id="Apellidod_d" rows="2" class="form-control" placeholder="Apellido" readonly>
      </div>

      <div class="form-group">
       <input type="text" name="Generod_d" id="Generod_d" rows="3" class="form-control" placeholder="Genero" readonly>
      </div>

      <button type="button" onclick="EliminarDocente()" class="form-control btn btn-register" >
                           <span class="glyphicon glyphicon-floppy-disk"></span> Eliminar </button>


</div>

</div>
</div>

</div>
   </div>

   <!-- Asignas curso a Docente -->

   <div class="tab-pane fade" id="matricular" role="tabpanel" aria-labelledby="contact-tab">
 <br>
  <br>
  <div class="panel-body">
      <div class="form-group row">
        <div class="col-md-3" >
          <input class="input-number" type="text" class="form-control input-sm" id="Identificaciond_a" placeholder="Identificacion del Docente" required>
        </div><button type="button" class="btn btn-outline-secondary" onclick="Buscardocente_a()">Buscar</button>
        <div class="col-md-2">
          <input type="text" class="form-control input-sm" id="Nombred_a" placeholder="Docente" readonly>
        </div>


        <div class="col-md-3">
          <input type="text" class="form-control input-sm" id="Apellidod_a" placeholder="Apellido" readonly>
        </div>

        <div class="col-md-3">
          <input type="text" class="form-control input-sm" id="Generod_a" placeholder="Genero" readonly>
        </div>
        <div class="col-md-3">
          <input type="hidden" class="form-control input-sm" id="id_d" placeholder="id" readonly>
        </div>

      </div>
      <br>
      <br>
      <div class="form-group row">
        <label type="input" id="codigo" class="col-md-1 control-label"></label>
        <label for="empresa" class="col-md-1 control-label">Cursos</label>

        <div class="col-md-3">

          <select class="form-control input-sm" id="combocursos" placeholder="Genero" >
            <option >Elige un Curso...</option>
          </select>
        </div>
        <label for="tel2" class="col-md-1 control-label">Fecha</label>
        <div class="col-md-2">
          <input type="text" class="form-control input-sm" id="fecha" value="<?php echo date("d/m/Y");?>" readonly>
        </div>

        <div class="col-md-2">
         <button onclick="asignar()" type="button" class="btn btn-outline-warning">Asignar</button>
       </div>

       <div class="col-md-3">
        <input type="hidden" class="form-control input-sm" id="id_c" placeholder="id" readonly>
      </div>

    </div>

  </div>

 <br>
 <br>
  <div id="tconsulta">

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
  <script type="text/javascript" src="<?php echo base_url('asistentes/js/controlador/docente.js');  ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('asistentes/js/controlador/cursos.js');  ?>"></script>