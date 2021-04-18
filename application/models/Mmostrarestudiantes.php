  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Mmostrarestudiantes extends CI_Model {
  	
   public function __construct(){
    parent::__construct(); 
  }

// esta es la función para mostrar nuestra tabla estudiante.
  public function consultar($sql){

    $query = $this->db->query($sql);
    if($query->num_rows()>0){
      return $query;
    }else{
      return false;
    }
  }



// esta funcion guardarEstudiante es para hacer el registro de cada uno de los estudiante,


  public function guardarEstudiante($dato){

    echo $this->db->insert("estudiante",$dato); 
  }
// 


  public function Buscarestudiantee($id){
   $query = $this->db->query("select identificacion_e, nombre_e, apellido_e, genero_e from estudiante where identificacion_e=".$id);
   if($query->num_rows()>0){
    return $query->row();
  }else{
    return false;
  }
  }

  public function Buscarestudiante($id){
   $query = $this->db->query("select identificacion_e, nombre_e, apellido_e, genero_e from estudiante where identificacion_e=".$id);
   if($query->num_rows()>0){
    return $query->row();
  }else{
    return false;
  }
  }


  public function ActualizarEstudiante($id, $dato){

    $query = $this->db->where($id);
    echo  $query = $this->db->update("estudiante",$dato);
  }

  public function EliminarEstudiante($id){
    $query = $this->db->where($id);
    echo  $query = $this->db->delete("estudiante");
  }



  }