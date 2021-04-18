//Este Proyecto fue trabajado con codeigniter utilizando el
// MVC(modelo vista controlador)


  function combocursos() {
    var ruta = "";
    var id_html = "";
    ruta = url + cursos + "combocursos";
    id_html = "combocursos";

    cargarcombocursos(ruta, id_html);
  }

  function cargarcombocursos(ruta, id_html) {
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

 
// ESTA FUNCIÓN ES PARA REGISTRAR LOS CURSOS

  function Guardarcursos(){
    var acum=0;

    var codigo = 0;
    var nombre = "";
    var observacion = "";

    var ruta = "";

    codigo = $("#codigo").val();
    nombre = $("#nombre").val();
    observacion = $("#observacion").val();

      if(!codigo||!nombre||!observacion){
   acum++;
 }

 if(acum<1){
 

    ruta=url+cursos+'Guardarcursos';

    $.ajax({
      'url'  : ruta,
      'data' : {
        'codigo': codigo ,
        'nombre': nombre,
        'observacion': observacion

      },
      'type' : 'POST',
      'statusCode': {
        404: function() {
          alertify.error("La Ruta de la pagina no es la correcta" );
        }
      }
    }).done(function( data ) {
      if(data == 1){
        tcursos();
         limpiarcursos();
         Swal.fire({
          icon: 'success',
          title: 'Curso Registrado con Exito!!',
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
  function limpiarcursos(){
    $("#codigo").val("");
    $("#nombre").val("");
    $("#observacion").val(""); 
  }

//



//ESTA FUNCION ES LA  DE BUSCAR EL CURSO PARA MODIFICAR SU INFORMACIÓN
  function Buscarcursos() {
    var acum=0;
    var codigo = 0;  
    var ruta = "";

    codigo = $("#codigoc").val();   
    
      if(!codigo){
   acum++;
 }

 if(acum<1){
 

    ruta=url+cursos+'Buscarcursos';

    $.ajax({
      'url'  : ruta,
      'data' : {
        'codigo': codigo 
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
      $("#nombrec").val(obj.respuesta[0].nombre_c);
      $("#observacionc").val(obj.respuesta[0].observacion_c);             
      Swal.fire({
          icon: 'success',
          title: 'Curso Encontrado con Exito!!',
          showConfirmButton: false,
          timer: 900
        })
        
      }else{
        limpiarcur();
       Swal.fire(
        'Error, El Curso No Ha Sido Encontrado',
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
   'Error, Por Favor Ingrese el Codigo del Curso',
   '',
   'error')
}  

}

  function limpiarcur(){
    $("#nombrec").val("");
    $("#observacionc").val(""); 
  }

//

//ESTA FUNCIÓN ES PARA MODIFICAR LOS DATOS DEL CURSO

  function Actualizarcursos() {
   var acum=0;
   var codigo = 0;
   var nombre = "";
   var observacion = "";

   var ruta = "";

   codigo = $("#codigoc").val();
   nombre = $("#nombrec").val();
   observacion = $("#observacionc").val();

        if(!codigo||!nombre||!observacion){
   acum++;
 }

 if(acum<1){

   ruta=url+cursos+'Actualizarcursos';
   $.ajax({
    'url'  : ruta,
    'data' : {
     'codigo': codigo ,
     'nombre': nombre,
     'observacion': observacion

   },
   'type' : 'POST',
   'statusCode': {
    404: function() {
      alertify.error("La Ruta de la pagina no es la correcta" );
    }
  }
  }).done(function( data ) {
    if(data == 1){
  tcursos();
            limpiarcursos2();
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
   function limpiarcursos2(){
    $("#codigoc").val("");
    $("#nombrec").val("");
    $("#observacionc").val(""); 
  }

  //

 

// ESTA FUNCIÓN ES PARA ELIMINAR EL CURSO
  function Eliminarcursos() {
    var acum=0;
    var codigo = 0;
    var ruta ="";

    codigo = $("#codigocu").val();
            if(!codigo){
   acum++;
 }

 if(acum<1){


    ruta = url + cursos + 'Eliminarcursos';

    $.ajax({
      'url'  : ruta,
      'data' : {
        'codigo': codigo 

      },
      'type' : 'POST',
      'statusCode': {
        404: function() {
          alertify.error("La Ruta de la pagina no es la correcta" );
        }
      }
    }).done(function( data ) {
      if(data == 1){
  tcursos();
            limpiarcursos2c();
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

  function limpiarcursos2c(){
    $("#codigocu").val("");
    $("#nombrecu").val("");
    $("#observacioncu").val(""); 
  }

//


  function tcursos(){
    var ruta = "";
    var id_html = "";
    ruta=url+cursos+"tcursos";
    id_html = "tcursos";
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
    tcursos();
    combocursos();
    tconsulta();
  });




  $('#combocursos').change( function() {
   var ruta = "";
   var curso="";

   curso=$("#combocursos").val();
   ruta = url + cursos + 'Mostrarid';

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


// ESTA FUNCIÓN ES PARA ASIGNARLE UN  CURSO  A NUESTRSOS DOCENTE.

  function asignar(){

    var acum=0;
    var id_c = 0;
    var id_d = 0;

    var ruta = "";

    id_c = $("#id_c").val();
    id_d = $("#id_d").val();

    if(!id_c||!id_d){
   acum++;
 }

 if(acum<1){

    ruta=url+cursos+'asignar';

    $.ajax({
      'url'  : ruta,
      'data' : {
        'id_c': id_c ,
        'id_d': id_d


      },
      'type' : 'POST',
      'statusCode': {
        404: function() {
          alertify.error("La Ruta de la pagina no es la correcta" );
        }
      }
    }).done(function( data ) {
      if(data == 1){
  tconsulta();
         limpiar();
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


function limpiar(){
  $("#Identificaciond").val("");
  $("#Nombred").val("");
  $("#Apellidod").val("");
  $("#Generod").val("");
  $("#id_d").val("");
  $("#combocursos").val("");
  $("#id_c").val("");
}

//



function tconsulta(){
    var ruta = "";
    var id_html = "";
    ruta=url+cursos+"tconsulta";
    id_html = "tconsulta";
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

//ESTA ES PARA BUSCAR Y PODER ELIMINAR EL CURSO 
  function Buscarcursoscu() {
    var acum=0;
    var codigo = 0;  
    var ruta = "";

    codigo = $("#codigocu").val(); 

       if(!codigo){
   acum++;
 }

 if(acum<1){

    ruta=url+cursos+'Buscarcursoscu';

    $.ajax({
      'url'  : ruta,
      'data' : {
        'codigo': codigo 
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
      $("#nombrecu").val(obj.respuesta[0].nombre_c);
      $("#observacioncu").val(obj.respuesta[0].observacion_c);             
      Swal.fire({
          icon: 'success',
          title: 'Curso Encontrado con Exito!!',
          showConfirmButton: false,
          timer: 900
        })
        
      }else{
        limpiarcure();
       Swal.fire(
        'Error, El Curso No Ha Sido Encontrado',
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
   'Error, Por Favor Ingrese el Codigo del Curso',
   '',
   'error')
}  

}

  function limpiarcure(){
    $("#nombrecu").val("");
    $("#observacioncu").val(""); 
  }


