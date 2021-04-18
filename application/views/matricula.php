  <div class="shadow-lg p-3 mb-5 bg-white rounded container" style=" width: 100%;">
    <div class="con">
      
  <br>
  <br>

  <div class="panel-body">
      <div class="form-group row">
        <div class="col-md-3" >
          <input  class="input-number" type="text" class="form-control input-sm" id="Identificaciond_m" placeholder="Identificacion del Estudiante" required>
        </div><button onclick="Buscarestudiantem()" type="button" class="btn btn-outline-secondary" >Buscar</button>
        <div class="col-md-2">
          <input type="text" class="form-control input-sm" id="Nombred_m" placeholder="Estudiante" readonly>
        </div>


        <div class="col-md-3">
          <input type="text" class="form-control input-sm" id="Apellidod_m" placeholder="Apellido" readonly>
        </div>

        <div class="col-md-3">
          <input type="text" class="form-control input-sm" id="Generod_m" placeholder="Genero" readonly>
        </div>
        <div class="col-md-3">
          <input type="hidden" class="form-control input-sm" id="id_e" placeholder="id" readonly>
        </div>

      </div>
      <br>
      <br>
      <div class="form-group row">
        <label type="input" id="codigo" class="col-md-1 control-label"></label>
        <label for="empresa" class="col-md-1 control-label">Cursos</label>

        <div class="col-md-3">

          <select class="form-control input-sm" id="curso" placeholder="Genero" >
            <option >Elige un Curso...</option>
          </select>
        </div>
        <label for="tel2" class="col-md-1 control-label">Fecha</label>
        <div class="col-md-2">
          <input type="text" class="form-control input-sm" id="fecha" value="<?php echo date("d/m/Y");?>" readonly>
        </div>

        <div class="col-md-2">
         <button onclick="matricular()" type="button" class="btn btn-outline-warning">Matricular</button>
       </div>

       <div class="col-md-3">
        <input type="hidden" class="form-control input-sm" id="id_c" placeholder="id" readonly>
      </div>

    </div>

  </div>

  <br>
  <br>

  <div id="tmatricula">
    
  </div>

     </div>

  </div>

<script type="text/javascript" src="<?php echo base_url('asistentes/js/controlador/app.js');  ?>"></script>
<script type="text/javascript" src="<?php echo base_url('asistentes/js/componentes/variableglobales.js');  ?>"></script>
<script type="text/javascript" src="<?php echo base_url('asistentes/js/Librerias/jquery.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('asistentes/js/Librerias/popper.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('asistentes/js/Librerias/bootstrap.min.js');  ?>"></script>
<script type="text/javascript" src="<?php echo base_url('asistentes/js/controlador/matricula.js');  ?>"></script>
