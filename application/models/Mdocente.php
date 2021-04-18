  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Mdocente extends CI_Model {
  	
   public function __construct(){
    parent::__construct(); 
  }

  public function consultar($sql){
    $query = $this->db->query($sql);
    if($query->num_rows()>0){
      return $query;
    }else{
      return false;
    }
  }

  public function guardarDocente($dato){
    echo $this->db->insert("docente",$dato); 
  }




  public function Actualizardocente($id, $dato){

    $query = $this->db->where($id);
    echo  $query = $this->db->update("docente",$dato);

  }

  public function EliminarDocente($id){
    $query = $this->db->where($id);
    echo  $query = $this->db->delete("docente");
  }

  public function Buscar_docente($id) {

    $query = $this->db->query("select id_d, identificacion_d, nombre_d, apellido_d, genero_d from docente where identificacion_d = ".$id);

    if($query->num_rows()>0){
      return $query->row();
    }else{
      return false;
    }
  }


  public function Buscardocente_d($id) {

    $query = $this->db->query("select id_d, identificacion_d, nombre_d, apellido_d, genero_d from docente where identificacion_d = ".$id);

    if($query->num_rows()>0){
      return $query->row();
    }else{
      return false;
    }
  }


  public function Buscardocente_a($id) {

    $query = $this->db->query("select id_d, identificacion_d, nombre_d, apellido_d, genero_d from docente where identificacion_d = ".$id);

    if($query->num_rows()>0){
      return $query->row();
    }else{
      return false;
    }
  }

  }