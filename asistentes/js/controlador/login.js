//Este Proyecto fue trabajado con codeigniter utilizando el
// MVC(modelo vista controlador)

// en mi vista yo tengo un boton con un onclick el cual hace referencia a esta función es que 
// registrarusuario, lo primero que hago es crear mis variables, que en este caso las inicializamos en 0 o en "",
//despues le decumos que a nuestras variales son iguales al id de los campos que tenemos en nuestra vista
//en donde estamos capturado los datos que vamos a guardar, hago una validación de estos campos para que si estan vacios
//no me deje seguir con el registro, en caso de que nuestros campos tengan datos almacenados entonces
//le digo  que se vaya a la variable ruta en donde esta es igual a la url con el contralador clogin en donde tengo una 
//funcion llamada registrarusuario. de aqui con vamos al contralador

function registarUsuario(){
   var acum = 0;
  var identificacion = 0;
  var nombre = "";
  var apellido = "";
  var contrasena = "";
  var tipousuario = "";
  var ruta = "";

  identificacion = document.getElementById("identificacionU").value;
  nombre = document.getElementById("nombreU").value;
  apellido = document.getElementById("apellidoU").value;
  contrasena = document.getElementById("contrasenaU").value;  
  tipousuario = document.getElementById("tipousuario").value;  

  if(!identificacion||!nombre||!apellido||!contrasena||!tipousuario){
   acum++;
 }

 if(acum<1){

  ruta=url+clogin+'registarUsuario';

  $.ajax({
    'url'  : ruta,
    'data' : {
      'identificacion': identificacion ,
      'nombre': nombre,
      'apellido': apellido ,
      'contrasena': contrasena,
      'tipousuario': tipousuario
    },
    'type' : 'POST',
    'statusCode': {
       404: function() {
          alertify.error("La Ruta de la pagina no es la correcta" );
        }
      }
    }).done(function( data ) {
      if(data == 1){
        limpiarUsuario();
        Swal.fire({
          icon: 'success',
          title: 'Usuario Registrado con Exito!!',
          showConfirmButton: false,
          timer: 900
        })
        
      }else{
       Swal.fire(
         'Error al guardar, Intenta nuevamente!!',
         '',
         'error')
     }
     
   }).fail(function() {

     Swal.fire(
       'Error, el código del programa de formación ya existe',
       '',
       'error')
   });
   

 }else{
  Swal.fire(
   'Error, campos vacios',
   '',
   'error')
}  

}

//este metodo es limpiar todos unestro input

function limpiarUsuario(){
    $("#identificacionU").val("");
    $("#nombreU").val("");
    $("#apellidoU").val(""); 
    $("#contrasenaU").val("");  
    $("#tipousuario").val("");  
}


//este metodo es para ingresar a nuestro sistema, por medio de nuestro login


function ingresar() {
    var acum = 0;
    var user = ""; 
    var pass = ""; 
    var ruta = "";
    user = document.getElementById("Usuario").value;   
    pass =document.getElementById("Pass").value;

    if(!user||!pass){
   acum++;
 }

 if(acum<1){

    ruta = url + clogin + 'ingresar';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'user': user,
                    'pass': pass 
        },
        'type' : 'POST',
        'statusCode': {
           404: function() {
          alertify.error("La Ruta de la pagina no es la correcta" );
        }
      }
    }).done(function( data ) {
      if(data == 1){
    
        Swal.fire({
          icon: 'success',
          title: 'Bienvenido a Online Education!!',
          showConfirmButton: false,
          timer: 900
        })
        location.href= url + con + "inicio"; 
      }else{
       Swal.fire(
         'Sus Credenciales son Incorrectas, Por favor intentelo nuevamente!!',
         '',
         'error')
     }
     
   }).fail(function() {

     Swal.fire(
       'Error',
       '',
       'error')
   });
   

 }else{
  Swal.fire(
   'Por Favor, Ingrese su Usuario y Contraseña ',
   '',
   'error')
}  

}


$('.input-letter').on('input', function () {
  this.value = this.value.replace(/[^a-zA-Z ]/g,'');
});

$('.input-number').on('input', function () {
  this.value = this.value.replace(/[^0-9 ]/g,'');
});
