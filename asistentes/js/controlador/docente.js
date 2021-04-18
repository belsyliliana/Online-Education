//Este Proyecto fue trabajado con codeigniter utilizando el
// MVC(modelo vista controlador)

  // EN ESTA FUNCIÓN ES EN DONDE REGISTRAMOS AL DOCENTE.

    function guardarDocente(){
      var acum=0;
      var identificacion = 0;
      var nombre = "";
      var apellido = "";
      var genero = "";

      var ruta = "";

      identificacion = $("#Identificaciond").val();
      nombre = $("#Nombred").val();
      apellido = $("#Apellidod").val();
      genero = $("#Generod").val(); 

      if(!identificacion||!nombre||!apellido||!genero){
   acum++;
 }

 if(acum<1){
 

      ruta=url+cdocente+'guardarDocente';

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
          tdocentes();
         limpiarDocente();
         Swal.fire({
          icon: 'success',
          title: 'Docente Registrado con Exito!!',
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

    function limpiarDocente(){
    $("#Identificaciond").val("");
    $("#Nombred").val("");
    $("#Apellidod").val(""); 
    $("#Generod").val("");  
  }

 // finaliza la función de registrar docente


  function limpiarDocentes1(){
    $("#Nombre_d").val("");
    $("#Apellido_d").val(""); 
    $("#Genero_d").val("");  
  }

//ESTA ES LA FUNCIÓN EN DONDE MANDAMOS A VISUALIZAR LA TABLA EN DONDE ESTAN REGISTRADOS TODOS LOS DOCENTES
  function tdocentes(){
    var ruta = "";
    var id_html = "";
    ruta=url+cdocente+"tdocentes";
    id_html = "tdocentes";
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
    tdocentes();
  });

//AQUI  FINALIZAR 


  function Buscardocente() {
    var identificacion = 0;  
    var ruta = "";

    identificacion = $("#Identificaciond").val();   
    ruta=url+cdocente+'Buscardocente';

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
      $("#id_d").val(obj.respuesta[0].id_d);
      $("#Nombred").val(obj.respuesta[0].nombre_d);
      $("#Apellidod").val(obj.respuesta[0].apellido_d);
      $("#Generod").val(obj.respuesta[0].genero_d);             
      alertify.success("Dato Encontrado");
    }else{
      limpiarDocentes();
      alertify.error("El Estudiante No Ha Sido Encontrado");
    }            
  }).fail(function() {
    alertify.error( "error" );
  })  



  }

//ESTA FUNCIÓN ES PARA BUSCAR AL DOCENTE QUE LE VAMOS ASIGNAR UNO DE NUESTROS CURSOS


 function Buscardocente_a() {
    var acum=0;
    var identificacion = 0;  
    var ruta = "";

    identificacion = $("#Identificaciond_a").val(); 
    
     if(!identificacion){
   acum++;
 }

 if(acum<1){
 

    ruta=url+cdocente+'Buscardocente_a';

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
      $("#id_d").val(obj.respuesta[0].id_d);
      $("#Nombred_a").val(obj.respuesta[0].nombre_d);
      $("#Apellidod_a").val(obj.respuesta[0].apellido_d);
      $("#Generod_a").val(obj.respuesta[0].genero_d);             
      Swal.fire({
          icon: 'success',
          title: 'Docente Encontrado con Exito!!',
          showConfirmButton: false,
          timer: 900
        })
        
      }else{
        limpiarDoces();
       Swal.fire(
        'Error, El Docente No Ha Sido Encontrado',
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
   'Error, Por Favor Ingrese el Numero de Identificación del Docente',
   '',
   'error')
}  

}

  function limpiarDoces(){
    $("#id_d").val("");
    $("#Nombred_a").val(""); 
    $("#Apellidod_a").val("");  
     $("#Generod_a").val(""); 
  }



//ESTA ES LA FUNCIÓN LA ACTUALIZAR LOS DATOS EL DOCENTE

  function Actualizardocente() {

        var acum=0;
        var identificacion = 0;
        var nombre = "";
        var apellido = "";
        var genero = "";

        var ruta = "";

        identificacion = $("#Identificacion_d").val();
        nombre = $("#Nombre_d").val();
        apellido = $("#Apellido_d").val();
        genero = $("#Genero_d").val();  

           if(!identificacion||!nombre||!apellido||!genero){
   acum++;
 }

 if(acum<1){

        
        ruta = url + cdocente + 'Actualizardocente';
        
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
             tdocentes();
            limpiarDocentes();
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



function limpiarDocentes(){
    $("#Identificacion_d").val("");
    $("#Nombre_d").val("");
    $("#Apellido_d").val(""); 
    $("#Genero_d").val("");  
  }


  //ESTA FUNCIÓN  ES PARA ELIMINAR AL DOCENTE


      function EliminarDocente() {
        var acum=0;
        var identifiacion = 0;
        var ruta ="";

        identificacion = $("#Identificaciond_d").val();


            if(!identificacion){
   acum++;
 }

 if(acum<1){

        ruta = url + cdocente + 'EliminarDocente';
        
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

           tdocentes();
            limpiarDocentes1();
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

  function limpiarDocentes1(){
     $("#Identificaciond_d").val("");
    $("#Nombred_d").val("");
    $("#Apellidod_d").val(""); 
    $("#Generod_d").val("");  
  }


//ESTA ES LA FUNCIÓN BUSCAR PARA MODIFICAR LOS DATOS DEL DOCENTE

function Buscar_docente() {
    var acum=0;
    var identificacion = 0;  
    var ruta = "";

    identificacion = $("#Identificacion_d").val();  
    
     if(!identificacion){
   acum++;
 }

 if(acum<1){
 

    ruta=url+cdocente+'Buscar_docente';

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
      $("#Nombre_d").val(obj.respuesta[0].nombre_d);
      $("#Apellido_d").val(obj.respuesta[0].apellido_d);
      $("#Genero_d").val(obj.respuesta[0].genero_d);             
      Swal.fire({
          icon: 'success',
          title: 'Docente Encontrado con Exito!!',
          showConfirmButton: false,
          timer: 900
        })
        
      }else{
        limpiarD();
       Swal.fire(
        'Error, El Docente No Ha Sido Encontrado',
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
   'Error, Por Favor Ingrese el Numero de Identificación del Docente',
   '',
   'error')
}  

}

function limpiarD(){
    $("#Nombre_d").val("");
    $("#Apellido_d").val(""); 
    $("#Genero_d").val("");  
  }


  //

  //ESTA ES LA FUNCIÓN PARA BUSCAR AL DOCENTE Y ELIMINARLO

function Buscardocente_d() {
    var acum=0;
    var identificacion = 0;  
    var ruta = "";

    identificacion = $("#Identificaciond_d").val();  

      if(!identificacion){
   acum++;
 }

 if(acum<1){

    ruta=url+cdocente+'Buscardocente_d';

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
      $("#Nombred_d").val(obj.respuesta[0].nombre_d);
      $("#Apellidod_d").val(obj.respuesta[0].apellido_d);
      $("#Generod_d").val(obj.respuesta[0].genero_d);             
      Swal.fire({
          icon: 'success',
          title: 'Docente Encontrado con Exito!!',
          showConfirmButton: false,
          timer: 900
        })
        
      }else{
        limpiarDoc();
       Swal.fire(
        'Error, El Docente No Ha Sido Encontrado',
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
   'Error, Por Favor Ingrese el Numero de Identificación del Docente',
   '',
   'error')
}  

}


function limpiarDoc(){
    $("#Nombred_d").val("");
    $("#Apellidod_d").val(""); 
    $("#Generod_d").val("");  
  }
