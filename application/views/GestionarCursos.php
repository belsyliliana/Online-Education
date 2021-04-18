<div class="shadow-lg p-3 mb-5 bg-white rounded container" style=" width: 100%;">
    <div class="con">
     
  <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#registrar" role="tab" aria-controls="registrar" aria-selected="true">Registrar Cursos</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mostrar Cursos</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Modificar Cursos</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#eliminar" role="tab" aria-controls="eliminar" aria-selected="false">Eliminar Cursos</a>
  </li>
  
</ul>
 <!-- registrar Cursos -->

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="registrar" role="tabpanel" aria-labelledby="home-tab">
    
    <div class="container p-4">

<div class="row">

<div class="col-md-8 mx-auto">

<div class="card card-body">




  <div class="form-group">
       <input class="input-number"  type="text" name="codigo" id="codigo" class="form-control" placeholder="Ingrese codigo del curso" autofocus>
      </div>

        <div class="form-group">
       <input class="input-letter" type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre del curso" autofocus>
      </div>
          
      <div class="form-group">
       <input type="text" name="observacion" id="observacion" rows="2" class="form-control" placeholder="Observación" autofocus>
      </div>

      <button type="button" onclick="Guardarcursos()" class="form-control btn btn-register">Registrar Cursos </button>

</div>

</div>
</div>

</div>


  </div>

<!-- Mostrar Cursos -->

  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    

<br>
<br>
<div id="tcursos">

    </div>
  

  </div>

<!-- Modificar Cursos -->

  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    
    <div class="container p-4">

<div class="row">

<div class="col-md-8 mx-auto">

<div class="card card-body">




  <div class="form-group">
       <input class="input-number" type="text" name="codigoc" id="codigoc" class="form-control" placeholder="Ingrese codigo del curso" autofocus>
      </div>
          
           <div class="form-group">
              <button type="button" class="btn btn-outline-warning form-control" class="btn btn-outline-warning" onclick="Buscarcursos()">Buscar</button>
             </div>

        <div class="form-group">
       <input class="input-letter" type="text" name="nombrec" id="nombrec" class="form-control" placeholder="Nombre del curso" autofocus>
      </div>
          
      <div class="form-group">
       <input type="text" name="observacionc" id="observacionc" rows="2" class="form-control" placeholder="Observación" autofocus>
      </div>

     

      <button type="button" onclick="Actualizarcursos()" class="form-control btn btn-register"> Actualizar </button>

    






</div>

</div>
</div>

</div>


  </div>

<!-- Eliminar Cursos -->

  <div class="tab-pane fade" id="eliminar" role="tabpanel" aria-labelledby="profile-tab">
    

    <div class="container p-4">

<div class="row">

<div class="col-md-8 mx-auto">

<div class="card card-body">




  <div class="form-group">
       <input class="input-number" type="text" name="codigocu" id="codigocu" class="form-control" placeholder="Ingrese codigo del curso" autofocus>
      </div>
          
          <div class="form-group">
              <button type="button" class="btn btn-outline-warning form-control" class="btn btn-outline-warning" onclick="Buscarcursoscu()">Buscar</button>
             </div>

        <div class="form-group">
       <input type="text" name="nombrecu" id="nombrecu" class="form-control" placeholder="Nombre del curso" readonly>
      </div>
          
      <div class="form-group">
       <input type="text" name="observacioncu" id="observacioncu" rows="2" class="form-control" placeholder="Observación" readonly>
      </div>

      <button  type="button" onclick="Eliminarcursos()" class="form-control btn btn-register">Eliminar </button>
    


</div>

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
<script type="text/javascript" src="<?php echo base_url('asistentes/js/controlador/cursos.js');  ?>"></script>