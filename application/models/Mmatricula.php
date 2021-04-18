<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmatricula extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

  

 public function curso($sql)
    {

        $query = $this->db->query($sql);
          if($query->num_rows()>0){
        return $query;
      }else{
        return false;
      }
    }


      public function Buscarestudiantem($id) {

    $query = $this->db->query("select id_e, identificacion_e, nombre_e, apellido_e, genero_e from estudiante where identificacion_e = ".$id);

    if($query->num_rows()>0){
      return $query->row();
    }else{
      return false;
    }
  }


    public function Mostraridc($id){
  $query = $this->db->query("select id_c from cursos where nombre_c = "."'".$id."'".";");
      
      if($query->num_rows()>0){
        return $query->row();
      }else{
        return false;
      }
    }


    public function matricular($dato)
    {
      echo $this->db->insert("matricula",$dato); 
    }


    
  public function consultar($sql){
    $query = $this->db->query($sql);
    if($query->num_rows()>0){
      return $query;
    }else{
      return false;
    }
  }




  }
