 
  <div class="shadow-lg p-3 mb-5 bg-white rounded container" style=" width: 100%;">
    <div class="con">
     <div class="container-fluid">
      <div class="row">
        <div class="col-m-4 head">
          <div class="panel-heading-facture" >   
            <h1 style=" color: ##C2BECC; "></i>Asignar Docente</h1>

          </div>
        </div>

      </div>
    </div>

    <div class="panel-body">


      <div class="form-group row">
        <div class="col-md-3" >
          <input type="text" class="form-control input-sm" id="Identificaciond" placeholder="Identificacion del Docente" required>
        </div><button type="button" class="btn btn-outline-secondary" onclick="Buscardocente()">Buscar</button>
        <div class="col-md-2">
          <input type="text" class="form-control input-sm" id="Nombred" placeholder="Docente" readonly>
        </div>


        <div class="col-md-3">
          <input type="text" class="form-control input-sm" id="Apellidod" placeholder="Apellido" readonly>
        </div>

        <div class="col-md-3">
          <input type="text" class="form-control input-sm" id="Generod" placeholder="Genero" readonly>
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
         <button onclick="asignar()" type="button" class="btn btn-success">Asignar</button>
       </div>

       <div class="col-md-3">
        <input type="hidden" class="form-control input-sm" id="id_c" placeholder="id" readonly>
      </div>

    </div>

  </div>
<br>
<br>
<br>
<br>
  <div id="tconsulta">

  </div>

  </div>

  </div>



<script type="text/javascript" src="<?php echo base_url('asistentes/js/controlador/app.js');  ?>"></script>
<script type="text/javascript" src="<?php echo base_url('asistentes/js/componentes/variableglobales.js');  ?>"></script>
<script type="text/javascript" src="<?php echo base_url('asistentes/js/Librerias/jquery.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('asistentes/js/Librerias/popper.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('asistentes/js/Librerias/bootstrap.min.js');  ?>"></script>
<script type="text/javascript" src="<?php echo base_url('asistentes/datatables/datatables.min.js');  ?>"></script>
<script type="text/javascript" src="<?php echo base_url('asistentes/js/controlador/cursos.js');  ?>"></script>

<script type="text/javascript" src="<?php echo base_url('asistentes/js/controlador/mostrarestudiantes.js');  ?>"></script>