
  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Cdocente extends CI_Controller {

  	public function __construct(){
  		parent::__construct(); 
  		$this->load->model('Mdocente');
  	}


    public function guardarDocente() {

      $dato = array(
       "identificacion_d" => $_POST['identificacion'],
       "nombre_d" => $_POST['nombre'],
       "apellido_d" => $_POST['apellido'],
       "genero_d" => $_POST['genero']
     );

      echo $this->Mdocente->guardarDocente($dato);
    }


    public function tdocentes() {

      $dato['docente'] = $this->Mdocente->consultar("select * from docente");

      $this->load->view('Tablas/tdocentes',$dato);

    }


    public function Actualizardocente() {

     if(isset($_POST['genero'])){
      $id["identificacion_d"] = $_POST['identificacion'];
      $dato = array('nombre_d' => $_POST['nombre'],
       'apellido_d'  => $_POST['apellido'],
       'genero_d'  => $_POST['genero']
     );

    }else{

      $dato = array('nombre_d' => $_POST['nombre'], 'apellido_d' => $_POST['apellido'],
        'genero_d' => $_POST['genero']
      );
    }

    echo $this->Mdocente->Actualizardocente($id,$dato);

  }


  public function EliminarDocente(){

    $id["identificacion_d"] = $_POST['identificacion'];
    echo $this->Mdocente->EliminarDocente($id);
  }

public  function Buscar_docente() {
        # code...
      $id = $_POST['identificacion'];
      $respuesta = $this->Mdocente->Buscar_docente($id);
      echo json_encode($respuesta);
    }


 public  function Buscardocente_d() {
        # code...
      $id = $_POST['identificacion'];
      $respuesta = $this->Mdocente->Buscardocente_d($id);
      echo json_encode($respuesta);
    }


 public  function Buscardocente_a() {
        # code...
      $id = $_POST['identificacion'];
      $respuesta = $this->Mdocente->Buscardocente_a($id);
      echo json_encode($respuesta);
    }



  }