
  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Cmostrarestudiantes extends CI_Controller {

  	public function __construct(){
  		parent::__construct(); 
  		$this->load->model('Mmostrarestudiantes');
  	}

// esta es la función para mostrar nuestra tabla estudiante.
  public function testudiante() {

    $dato['estudiante'] = $this->Mmostrarestudiantes->consultar("select * from institucion.estudiante;");

    $this->load->view('Tablas/testudiante',$dato);

  }



// esta funcion guardarEstudiante es para hacer el registro de cada uno de los estudiante,


  public function guardarEstudiante() {

    $dato = array(
     "identificacion_e" => $_POST['identificacion'],
     "nombre_e" => $_POST['nombre'],
     "apellido_e" => $_POST['apellido'],
     "genero_e" => $_POST['genero']
   );

    echo $this->Mmostrarestudiantes->guardarEstudiante($dato);
  }


// 



  public  function Buscarestudiantee() {
        
    $id = $_POST['identificacion'];
    $respuesta = $this->Mmostrarestudiantes->Buscarestudiantee($id);
    echo json_encode($respuesta);
  }


  public  function Buscarestudiante(){
       
    $id = $_POST['identificacion'];
    $respuesta = $this->Mmostrarestudiantes->Buscarestudiante($id);
    echo json_encode($respuesta);
  }




  public function ActualizarEstudiante()
  {

   if(isset($_POST['genero'])){
    $id["identificacion_e"] = $_POST['identificacion'];
    $dato = array('nombre_e' => $_POST['nombre'],
     'apellido_e'  => $_POST['apellido'],
     'genero_e'  => $_POST['genero']
   );

  }else{

    $dato = array('nombre_e' => $_POST['nombre'], 'apellido_e' => $_POST['apellido'],
      'genero_e' => $_POST['genero']
    );
  }
  echo $this->Mmostrarestudiantes->ActualizarEstudiante($id,$dato);
  }


  public function EliminarEstudiante(){

    $id["identificacion_e"] = $_POST['identificacion'];
    echo $this->Mmostrarestudiantes->EliminarEstudiante($id);
  }




  }



