    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Cmenu extends CI_Controller {
    	
     public function __construct(){
      parent::__construct(); 

    }
    public function Iniciosesion(){
      $this->load->view('Iniciosesion');

      
    }

    public function index()
    {
      $this->load->view('componentes/header');
      $this->load->view('login');
      $this->load->view('componentes/footer');

    } 


    public function cerrarsesion() {

      try{
       $this->session->sess_destroy();
       echo true;
     }catch(Exception $e){
      echo false;
    }

  }


  //

  public function asignar(){
    $this->load->view('asignar');
    
  }


  


  public function GestionarEstudiantes(){
    $this->load->view('GestionarEstudiantes');
    
  }

  public function GestionarDocentes(){
    $this->load->view('GestionarDocentes');
    
  }
  public function GestionarCursos(){
    $this->load->view('GestionarCursos');
    
  }

    public function matricula(){
    $this->load->view('matricula');
    
  }
  }
