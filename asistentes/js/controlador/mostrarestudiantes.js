  
// esta es la función para mostrar nuestra tabla estudiante.
    function testudiante(){
      var ruta = "";
      var id_html = "";
      ruta=url+cestudiante+"testudiante";
      id_html = "testudiante";
      cargar_tabla(ruta,id_html);
    }

    function cargar_tabla(ruta, id_html){
      $.ajax({
        'url'  : ruta,
        'statusCode': {
          404: function() {
            alertify.error("La Ruta de la pagina no es la correcta" );
          }
        }
      }).done(function( data ) { 
        $("#"+id_html).html(data);            
      }).fail(function() {
        alertify.error( "error" );
      })
    }

    $(document).ready(function(){
      testudiante();
    });


// en mi vista yo tengo un boton con un onclick el cual hace referencia a esta función es que 
// guardarestudiate, lo primero que hago es crear mis variables, que en este caso las inicializamos en 0 o en "",
//despues le decumos que a nuestras variales son iguales al id de los campos que tenemos en nuestra vista
//en donde estamos capturado los datos que vamos a guardar, hago una validación de estos campos para que si estan vacios
//no me deje seguir con el registro, en caso de que nuestros campos tengan datos almacenados entonces
//le digo  que se vaya a la variable ruta en donde esta es igual a la url con el contralador cestudiante en donde tengo una 
//funcion llamada guardarestudiate. de aqui con vamos al contralador



    function guardarEstudiante(){
      var acum = 0;
      var identificacion = 0;
      var nombre = "";
      var apellido = "";
      var genero = "";
      
      var ruta = "";

      identificacion = $("#Identificacione").val();
      nombre = $("#Nombree").val();
      apellido = $("#Apellidoe").val();
      genero = $("#Generoe").val();  

       if(!identificacion||!nombre||!apellido||!genero){
   acum++;
 }

 if(acum<1){

      ruta=url+cestudiante+'guardarEstudiante';
      
      $.ajax({
        'url'  : ruta,
        'data' : {
          'identificacion': identificacion ,
          'nombre': nombre,
          'apellido': apellido ,
          'genero': genero

        },
        'type' : 'POST',
        'statusCode': {
         404: function() {
          alertify.error("La Ruta de la pagina no es la correcta" );
        }
      }
    }).done(function( data ) {
      if(data == 1){
        testudiante();
        limpiarEstudiantes();
        Swal.fire({
          icon: 'success',
          title: 'Estudiante Registrado con Exito!!',
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
       'Error, Por Favor verifique sus datos',
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


// esta función es para limpiar los campos de registrar estudiantes

function limpiarEstudiantes(){
    $("#Identificacione").val("");
    $("#Nombree").val("");
    $("#Apellidoe").val(""); 
    $("#Generoe").val("");  
  }


//





// aqui es en donde buscamos al estudiante para modificar sus datos

  function Buscarestudiantee() {
     var acum = 0;
    var identificacion = 0;  
    var ruta = "";

    identificacion = $("#Identificacionee").val(); 

     if(!identificacion){
   acum++;
 }

 if(acum<1){

    ruta=url+cestudiante+'Buscarestudiantee';

    $.ajax({
      'url'  : ruta,
      'data' : {
        'identificacion': identificacion 
      },
      'type' : 'POST',
      'statusCode': {
        404: function() {
          alertify.error("La Ruta de la pagina no es la correcta" );
        }
      }
    }).done(function( data ) {

     var respuesta = "";
     var obj = "";
     respuesta ='{"respuesta": ['+data+']}';
     obj = JSON.parse(respuesta);
     if(obj.respuesta[0]!= false){
      $("#Nombreee").val(obj.respuesta[0].nombre_e);
      $("#Apellidoee").val(obj.respuesta[0].apellido_e);
      $("#Generoee").val(obj.respuesta[0].genero_e);  

     Swal.fire({
          icon: 'success',
          title: 'Estudiante Encontrado con Exito!!',
          showConfirmButton: false,
          timer: 900
        })
        
      }else{
        limpiarE();
       Swal.fire(
        'Error, El Estudiante No Ha Sido Encontrado',
         '',
         'error')
     }
     
   }).fail(function() {

     Swal.fire(
       'Error al Buscar, Intenta nuevamente!!',
       '',
       'error')
   });
   

 }else{
  Swal.fire(
   'Error, Por Favor Ingrese el Numero de Identificación del Estudiante',
   '',
   'error')
}  

}

    function limpiarE(){
    $("#Nombreee").val("");
    $("#Apellidoee").val(""); 
    $("#Generoee").val("");  
  }


//


//ESTA FUNCIÓN ES PARA MODIFICAR LOS DATOS DEL ESTUDIANTE

  function ActualizarEstudiante() {
        var acum = 0;
        var identificacion = 0;
        var nombre = "";
        var apellido = "";
        var genero = "";

        var ruta = "";

        identificacion = $("#Identificacionee").val();
        nombre = $("#Nombreee").val();
        apellido = $("#Apellidoee").val();
        genero = $("#Generoee").val();  
        
           if(!identificacion||!nombre||!apellido||!genero){
   acum++;
 }

 if(acum<1){
        
        ruta = url + cestudiante + 'ActualizarEstudiante';
        
        $.ajax({
          'url'  : ruta,
          'data' : {
            'identificacion': identificacion ,
            'nombre': nombre,
            'apellido': apellido ,
            'genero': genero


          },
          'type' : 'POST',
          'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
        }).done(function( data ) {
          if(data == 1){
            testudiante();
            limpiarEstudiante();
           Swal.fire({
          icon: 'success',
          title: 'Datos Actualizados con Exito!!',
          showConfirmButton: false,
          timer: 900
        })
        
      }else{
       Swal.fire(
         'Error al Actualizar los Datos, Intenta nuevamente!!',
         '',
         'error')
     }
     
   }).fail(function() {

     Swal.fire(
       'Error, Por Favor verifique sus datos',
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



  function limpiarEstudiante(){
    $("#Identificacionee").val("");
    $("#Nombreee").val("");
    $("#Apellidoee").val(""); 
    $("#Generoee").val("");  
  }


 // ESTA FUNCIÓN ES PARA ELIMINAR AL ESTUDIANTE    
      
      function EliminarEstudiante() {
        var acum = 0;
        var identifiacion = 0;
        var ruta ="";

        identificacion = $("#Identificacioneee").val();

            if(!identificacion){
   acum++;
 }

 if(acum<1){
        
        ruta=url+cestudiante+'EliminarEstudiante';
        
        $.ajax({
          'url'  : ruta,
          'data' : {
            'identificacion': identificacion 
            
          },
          'type' : 'POST',
          'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
        }).done(function( data ) {
          if(data == 1){

            testudiante();
            limpiarEstudiantee();
           Swal.fire({
          icon: 'success',
          title: 'Datos Eliminados con Exito!!',
          showConfirmButton: false,
          timer: 900
        })
        
      }else{
       Swal.fire(
         'Error al Eliminar los Datos, Intenta nuevamente!!',
         '',
         'error')
     }
     
   }).fail(function() {

     Swal.fire(
       'Error, Por Favor verifique sus datos',
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

  function limpiarEstudiantee(){
    $("#Identificacioneee").val("");
    $("#Nombreeeee").val("");
    $("#Apellidoeee").val(""); 
    $("#Generoeee").val("");  
  }



  //AQUI BUSCAMOS AL ESTUDIANTE PARA ELIMINARLOS.


      function Buscar() {
        var acum = 0;
        var identificacion = 0;  
        var ruta = "";

        identificacion = $("#Identificacioneee").val();

        if(!identificacion){
   acum++;
 }

 if(acum<1){

        ruta=url+cestudiante+'Buscarestudiante';
        
        $.ajax({
          'url'  : ruta,
          'data' : {
            'identificacion': identificacion 
          },
          'type' : 'POST',
          'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
        }).done(function( data ) {

         var respuesta = "";
         var obj = "";
         respuesta ='{"respuesta": ['+data+']}';
         obj = JSON.parse(respuesta);
         if(obj.respuesta[0]!= false){
          $("#Nombreeeee").val(obj.respuesta[0].nombre_e);
          $("#Apellidoeee").val(obj.respuesta[0].apellido_e);
          $("#Generoeee").val(obj.respuesta[0].genero_e);             
          Swal.fire({
          icon: 'success',
          title: 'Estudiante Encontrado con Exito!!',
          showConfirmButton: false,
          timer: 900
        })
        
      }else{
        limpiarEs();
       Swal.fire(
        'Error, El Estudiante No Ha Sido Encontrado',
         '',
         'error')
     }
     
   }).fail(function() {

     Swal.fire(
       'Error al Buscar, Intenta nuevamente!!',
       '',
       'error')
   });
   

 }else{
  Swal.fire(
   'Error, Por Favor Ingrese el Numero de Identificación del Estudiante',
   '',
   'error')
}  

}

 function limpiarEs(){
    $("#Nombreeeee").val("");
    $("#Apellidoeee").val(""); 
    $("#Generoeee").val("");  
  }



//





