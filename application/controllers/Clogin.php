
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {

  public function __construct(){
    parent::__construct(); 
    $this->load->model('Mlogin');
  }




public function registarUsuario()
    {

      $dato = array(
            "identificacionu" => $_POST['identificacion'],
            "nombreu" => $_POST['nombre'],
            "apellidou" => $_POST['apellido'],
                    "contrasena" => $_POST['contrasena'],
                    "tipousuario" => $_POST['tipousuario']
          );

      echo $this->Mlogin->registarUsuario($dato);
    }



    public function ingresar (){

    $user = "";
    $pass = "";
    $sql = "";
    //$consulta = "";

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "Select * from usuario where identificacionu = '".$user . "' and contrasena = '". $pass ."'";

    $consulta = $this->Mlogin->ingresar($sql);

    if($consulta != true){
       echo false;
    }else{
     // $datasessiones = array('id' => $user ,
                            // 'nombre' => $pass 
                       //);
     // $this->session->set_userdata($datasessiones);
      echo true;
    }


  }

  }