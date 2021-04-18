<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cmatricula extends CI_Controller {
	
  	public function __construct(){
        parent::__construct(); 
        $this->load->model('Mmatricula');
  	}


    public function curso()
    {
      $dato['curso']= $this->Mmatricula->curso("Select nombre_c FROM cursos");
      $this->load->view('combobox/curso',$dato);

    
    }


     public  function Buscarestudiantem() {
        # code...
      $id = $_POST['identificacion'];
      $respuesta = $this->Mmatricula->Buscarestudiantem($id);
      echo json_encode($respuesta);
    }



      public  function Mostraridc()
    {
      # code...
        $id = $_POST['curso'];
        $respuesta = $this->Mmatricula->Mostraridc($id);
        echo json_encode($respuesta);
    }



public function matricular()
    {

      $dato = array(
            "id_curso" => $_POST['id_c'],
            "id_e" => $_POST['id_e']
          );

      echo $this->Mmatricula->matricular($dato);
    }


    public function tmatricula() {

      $dato['tmatricula'] = $this->Mmatricula->consultar("select cursos.Codigo, cursos.nombre_c, estudiante.identificacion_e, estudiante.nombre_e From cursos, estudiante, matricula where matricula.id_curso = cursos.id_c and matricula.id_e=estudiante.id_e;");

      $this->load->view('Tablas/tmatricula',$dato);

    }


  }