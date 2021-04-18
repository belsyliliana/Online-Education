//Este Proyecto fue trabajado con codeigniter utilizando el
// MVC(modelo vista controlador)

//este metodo es para destruir sesion y vlver nuestro login

function cerrarsesion() {
  
    ruta=url+cmenu+"cerrarsesion";
    
    $.ajax({
        'url'  : ruta,        
        'type' : 'POST',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) { 

         if(data!= false){
          
            location.href=url+cmenu+"index";           
           
        }else{
            alertify.error("Error al Buscar Dato");
        }            
    }).fail(function() {
        alertify.error( "error" );
    })  
}

//esta función o ese metodo se en carga de cargar una vista dentro de otra que en este caso seria la vista iniciosesion
//en la vista menu para que esta no recargue

$("#Iniciosesion").ready(function() {
 $.ajax({
        'url'  : url + cmenu +'Iniciosesion',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) { 
        $("#page-content-wrapper").html(data);            
    }).fail(function() {
        alertify.error( "error" );
    })
});


//opcion de Gestionar Estudiantes

$("#GestionarEstudiantes").click(function() {
 $.ajax({
  'url'  : url + cmenu +'GestionarEstudiantes',
  'statusCode': {
    404: function() {
      alertify.error("La Ruta de la pagina no es la correcta" );
    }
  }
}).done(function( data ) { 
  $("#page-content-wrapper").html(data);            
}).fail(function() {
  alertify.error( "error" );
})
});

//opcion de Gestionar docentes
$( "#GestionarDocentes" ).click(function() {
  
 $.ajax({
        'url'  : url + cmenu +'GestionarDocentes',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) { 
        $("#page-content-wrapper").html(data);            
    }).fail(function() {
        alertify.error( "error" );
    })
});

//opcion de Gestionar cursos
$( "#GestionarCursos" ).click(function() {
  
 $.ajax({
        'url'  : url + cmenu +'GestionarCursos',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) { 
        $("#page-content-wrapper").html(data);            
    }).fail(function() {
        alertify.error( "error" );
    })
});




//opcion de Inicio de session

$( "#Iniciosesion" ).click(function() {
  
 $.ajax({
        'url'  : url + cmenu +'Iniciosesion',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) { 
        $("#page-content-wrapper").html(data);            
    }).fail(function() {
        alertify.error( "error" );
    })
});


//asignar curso a docente

$( "#asignar" ).click(function() {

 $.ajax({
        'url'  : url + cmenu +'asignar',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) { 
        $("#page-content-wrapper").html(data);            
    }).fail(function() {
        alertify.error( "error" );
    })
});


//matricula

$( "#matricula" ).click(function() {

 $.ajax({
        'url'  : url + cmenu +'matricula',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) { 
        $("#page-content-wrapper").html(data);            
    }).fail(function() {
        alertify.error( "error" );
    })
});
