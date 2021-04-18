//Este Proyecto fue trabajado con codeigniter utilizando el
// MVC(modelo vista controlador)

//este es nuestros controlador JS global, en el tengo todas las variables 
//de los controladores con los que trabaje en mi proyecto y que puedo llamar en cualquier documento Js
//

var url="";//esta es la variable url a la cual le pasamos nuestra ruta completa del proyecto
var con="";// esta es la variable de nuestro controlador principal
var cmenu="";//esta es la variable de nuestro controlador menú
var cestudiante="";//esta es la variable de nuestro controlador estudiante
var cdocente="";//esta es la variable de nuestro controlador docente
var clogin="";//esta es la variable de nuestro controlador login
var cursos="";//esta es la variable de nuestro controlador curso
var matricula="";//esta es la variable de nuestro controlador matricula

url="http://localhost/online_education/index.php/";
con="Controlador/";
cmenu="Cmenu/";
cestudiante="Cmostrarestudiantes/";
cdocente="Cdocente/";
clogin="Clogin/";
cursos="Ccursos/";
matricula="Cmatricula/";


//en esta parte tenemos la validaciones globales en los input
//lo manejamos asignando la clase como la colocamos en el input,
//en este caso para que nuestros inpunt solo ecepten caracteres numericos
//le colocamos el .input-number y hacemos referencia a este en nuestra vista con class="input-number" 
//nos mismo con nuestra validación de solo letras.

$('.input-letter').on('input', function () {
  this.value = this.value.replace(/[^a-zA-Z ]/g,'');
});

$('.input-number').on('input', function () {
  this.value = this.value.replace(/[^0-9 ]/g,'');
});
