<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcursos extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

     public function combocursos($sql)
    {

        $query = $this->db->query($sql);
          if($query->num_rows()>0){
        return $query;
      }else{
        return false;
      }
    }
  	
public function consultar($sql)
  {

    $query = $this->db->query($sql);
    if($query->num_rows()>0){
      return $query;
    }else{
      return false;
    }
  }


  public function Guardarcursos($dato)
    {
      echo $this->db->insert("cursos",$dato); 
    }

public function asignar($dato)
    {
      echo $this->db->insert("grupos",$dato); 
    }

public function Buscarcursos($id){
  $query = $this->db->query("select codigo, nombre_c, observacion_c from cursos where codigo = ".$id);
      
      if($query->num_rows()>0){
        return $query->row();
      }else{
        return false;
      }
    }


    public function Buscarcursosid($id){
  $query = $this->db->query("select id_c from cursos where nombre_c = "."'".$id."'".";");
      
      if($query->num_rows()>0){
        return $query->row();
      }else{
        return false;
      }
    }

public function Actualizarcursos($id, $dato){

      $query = $this->db->where($id);
      echo  $query = $this->db->update("cursos",$dato);

    }

 public function Eliminarcursos($id){
      $query = $this->db->where($id);
      echo  $query = $this->db->delete("cursos");
    }


    public function Buscarcursoscu($id){
  $query = $this->db->query("select codigo, nombre_c, observacion_c from cursos where codigo = ".$id);
      
      if($query->num_rows()>0){
        return $query->row();
      }else{
        return false;
      }
    }


}