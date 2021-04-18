//Este Proyecto fue trabajado con codeigniter utilizando el
// MVC(modelo vista controlador)

function curso() {
    var ruta = "";
    var id_html = "";
    ruta = url + matricula + "curso";
    id_html = "curso";
    cargarcombo(ruta, id_html);
}

function cargarcombo(ruta, id_html) {
    $.ajax({
        'url': ruta,
        'statusCode': {
            404: function () {
                alertify.error("La Ruta de la pagina no es la correcta");
            }
        }
    }).done(function (data) {
        $("#" + id_html).html(data);
    }).fail(function () {
        alert("error");
    })
}


$(document).ready(function(){
curso();
})
$("#curso").change(function(){

  });

//esta función es para buscar al estudiante  que le vamos asignar el curso

function Buscarestudiantem() {
    var acum=0;
    var identificacion = 0;  
    var ruta = "";

    identificacion = $("#Identificaciond_m").val();

     if(!identificacion){
   acum++;
 }

 if(acum<1){

    ruta=url+matricula+'Buscarestudiantem';

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
      $("#id_e").val(obj.respuesta[0].id_e);
      $("#Nombred_m").val(obj.respuesta[0].nombre_e);
      $("#Apellidod_m").val(obj.respuesta[0].apellido_e);
      $("#Generod_m").val(obj.respuesta[0].genero_e);             
      Swal.fire({
          icon: 'success',
          title: 'Estudiante Encontrado con Exito!!',
          showConfirmButton: false,
          timer: 900
        })
        
      }else{
        limpiarEd();
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

    function limpiarEd(){
    $("#id_e").val("");
    $("#Nombred_m").val(""); 
    $("#Apellidod_m").val("");  
     $("#Generod_m").val("");  
  }






   $('#curso').change( function() {
   var ruta = "";
   var curso="";

   curso=$("#curso").val();
   ruta = url + matricula + 'Mostraridc';

   $.ajax({
    'url'  : ruta,
    'data' : {
      'curso': curso 
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
    $("#id_c").val(obj.respuesta[0].id_c);           
              // alertify.success("Dato Encontrado");
            }else{

              alertify.error("El Estudiante No Ha Sido Encontrado");
            }            
          }).fail(function() {
            alertify.error( "error" );
          }) 
        });

// ESTA FUNCIÓN ES PARA ASIGNAR UN CURSO A UN ESTUDIANTE

  function matricular(){

    var acum=0;
    var id_c = 0;
    var id_e = 0;

    var ruta = "";

    id_c = $("#id_c").val();
    id_e = $("#id_e").val();

      if(!id_c||!id_e){
   acum++;
 }

 if(acum<1){

    ruta=url+matricula+'matricular';

    $.ajax({
      'url'  : ruta,
      'data' : {
        'id_c': id_c ,
        'id_e': id_e


      },
      'type' : 'POST',
      'statusCode': {
        404: function() {
          alertify.error("La Ruta de la pagina no es la correcta" );
        }
      }
    }).done(function( data ) {
      if(data == 1){

        tmatricula();
         limpiarmatricula();
         Swal.fire({
          icon: 'success',
          title: 'Docente Asignado con Exito!!',
          showConfirmButton: false,
          timer: 900
        })
        
      }else{
       Swal.fire(
         'Error al Asignar, Intenta nuevamente!!',
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
   'Error, campos vacios',
   '',
   'error')
}  

}



  function limpiarmatricula(){
    $("#Identificaciond_m").val("");
    $("#Nombred_m").val("");
    $("#Apellidod_m").val(""); 
    $("#Generod_m").val("");  
    $("#id_e").val(""); 
    $("#curso").val("");  
    $("#id_c").val("");  
  }


   function tmatricula(){
    var ruta = "";
    var id_html = "";
    ruta=url+matricula+"tmatricula";
    id_html = "tmatricula";
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
    tmatricula();
  });

