<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}
  	

  public function registarUsuario($dato)
    {
      echo $this->db->insert("usuario",$dato); 
    }

public function ingresar($sql){
      $query = $this->db->query($sql);
      
      if($query->num_rows()>0){
        return true;
      }else{
        return false;
      }
          
    }
    
    }