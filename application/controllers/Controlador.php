<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller {

	public function __construct(){
        parent::__construct(); 
	
    }
        
	public function index()
	{
		$this->load->view('componentes/header');
		$this->load->view('login');
	   $this->load->view('componentes/footer');

	   } 

	   public function inicio()
	{
		$this->load->view('componentes/header1');
		$this->load->view('componentes/Menu');
	    $this->load->view('componentes/footer1');

	   } 
	  

	 
	  
}


