
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccursos extends CI_Controller {

	public function __construct(){
		parent::__construct(); 
		$this->load->model('Mcursos');
	}


 

  public function combocursos()
    {
      $dato['combocursos']= $this->Mcursos->combocursos("Select codigo, nombre_c FROM cursos");
      $this->load->view('combobox/combocursos',$dato);

    
    }


 
 public function tcursos() {

  $dato['cursos'] = $this->Mcursos->consultar("select * from institucion.cursos;");

  $this->load->view('Tablas/tcursos',$dato);

}

 
 public function tconsulta() {

  $dato['tconsulta'] = $this->Mcursos->consultar("select cursos.Codigo, cursos.nombre_c, docente.identificacion_d, docente.nombre_d From cursos, docente, grupos where grupos.id_c = cursos.id_c and grupos.id_d=docente.id_d;");

  $this->load->view('Tablas/tconsulta',$dato);

}


public function Guardarcursos()
  	{

  		$dato = array(
  					"codigo" => $_POST['codigo'],
  					"nombre_c" => $_POST['nombre'],
            "observacion_c" => $_POST['observacion']
  				);

  		echo $this->Mcursos->Guardarcursos($dato);
  	}


public  function Buscarcursos()
    {
      # code...
        $id = $_POST['codigo'];
        $respuesta = $this->Mcursos->Buscarcursos($id);
        echo json_encode($respuesta);
    }

    public  function Mostrarid()
    {
      # code...
        $id = $_POST['curso'];
        $respuesta = $this->Mcursos->Buscarcursosid($id);
        echo json_encode($respuesta);
    }


public function asignar()
    {

      $dato = array(
            "id_c" => $_POST['id_c'],
            "id_d" => $_POST['id_d']
          );

      echo $this->Mcursos->asignar($dato);
    }

    



         public function Actualizarcursos()
    {

     if(isset($_POST['observacion'])){
      $id["codigo"] = $_POST['codigo'];
      $dato = array('nombre_c' => $_POST['nombre'],
        'observacion_c'  => $_POST['observacion']
        );

      }else{

        $dato = array('nombre_c' => $_POST['nombre'], 'observacion_c' => $_POST['observacion']
      );
      }

        echo $this->Mcursos->Actualizarcursos($id,$dato);

}


public function Eliminarcursos(){
          
        $id["codigo"] = $_POST['codigo'];
       echo $this->Mcursos->Eliminarcursos($id);


        }



        public  function Buscarcursoscu()
    {
      # code...
        $id = $_POST['codigo'];
        $respuesta = $this->Mcursos->Buscarcursoscu($id);
        echo json_encode($respuesta);
    }

  }

