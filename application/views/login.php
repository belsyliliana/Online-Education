
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row" id="cabeza1">
                     <div id="b1">
                        <img src="<?php echo base_url('asistentes/imagenes/logo.png'); ?>" class="img-responsive" >
                    </div>

                    <div id="e1">
                        <div id="compo"></div>
                    </div> 

                    <div id="l1">

                      <p class="nav-link" id="titulo1" ><h5 id="titulo2"><strong id="titulo">ONLINE EDUCATION</strong><br>Bienvenidos</h5><span class="sr-only">(current)</span></p>
                    </div>

                  </div>
                  <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="<?php echo base_url('asistentes/imagenes/fondo.jpg'); ?>"> </div>
                </div>
              </div>
              <div class="col-lg-6">
        <div class="card2 card border-0 px-4 py-5">
           
            <div class="row px-3 mb-4">
                <div class="line"></div> <small class="or text-center" id="titulo2">O</small>
                <div class="line"></div>
            </div>


            <div class="row px-3"> 
            <input class="input-number" type="text" id="Usuario" name="Usuario" placeholder="Digite Su Identificación"> 
          </div>
<br>

            <div class="row px-3">
              <input type="password" name="Pass" id="Pass" placeholder="Digite Su Contraseña"> 
            </div>

            <div class="row px-3 mb-4">
                <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm" id="titulo2">Recordar</label> </div>
            </div>

            <div class="row mb-3 px-3"> 
              <button type="submit" onclick="ingresar()" class="form-control btn btn-register" id="titulo3">Iniciar Sesión</button> 
            </div>

            <div class="row mb-4 px-3"> <small data-toggle="modal" data-target="#exampleModal1" class="font-weight-bold" id="titulo2">¿No te has registrado?<a class="text-primary " id="titulo2"> Registrate</a></small> </div>
        </div>
    </div>

</div>

<div class="bg-blue py-4">

    <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2" id="titulo3">Copyright © Belsy Liliana Rojano Camargo</small>
        <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
    </div>

</div>

</div>

</div>




<!-- Modal registrarse-->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" >
      <div class="modal-header-w">

        <div class="modal-header-logo">
         <img src="asistentes/img/ico.png"> 
       </div>
       <div class="modal-header-titulo">
        <h5 class="modal-title" id="exampleModalLabel" id="titulo2">Iniciar Sesión</h5>
      </div>
      <div class="modal-header-cerrar">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    </div>
    <div class="modal-body">


      <div class="form-group">
         <select class="browser-default custom-select" name="tipousuario" id="tipousuario" placeholder="Selecione su Tipo de usuario" autofocus>
          <option value="" disabled selected>Tipo de Usuario</option>
          <option value="Administrador">Administrador</option>
          <option value="Estudiante">Estudiante</option>
          <option value="Docente">Docente</option>
        </select>
      </div>
      <div class="form-group">
        <input class="input-number" type="text" name="identificacionU" id="identificacionU" tabindex="1" class="form-control" placeholder="Ingrese su Identificación" value="">
      </div>
      <div class="form-group">
        <input class="input-letter" type="text" name="nombreU" id="nombreU" tabindex="2" class="form-control" placeholder="Ingrese su nombre">
      </div>
      <div class="form-group">
        <input class="input-letter" type="text" name="apellidoU"  id="apellidoU" tabindex="2" class="form-control" placeholder="Ingrese su apellido">
      </div>
      <div class="form-group">
        <input type="password" name="contrasenaU"  id="contrasenaU" tabindex="2" class="form-control" placeholder="Ingrese su Contraseña">
      </div>
      

      <p class="letra" id="titulo2"> Al hacer clic en "Registrarte", aceptas nuestras Condiciones, la Política de datos y la Política de Online Education.</p>
      <div class="form-group">

        

<butto type="submit" onclick="registarUsuario();"  class="form-control btn btn-register" >Registrate</button>
        

      </div>

      
</div>
</div>
</div>
</div>


<script type="text/javascript" src="<?php echo base_url('asistentes/js/controlador/login.js');  ?>"></script>

<script type="text/javascript" src="<?php echo base_url('asistentes/js/controlador/app.js');  ?>"></script>