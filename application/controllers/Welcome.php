<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public $equipo_model;

	public function __construct(){
		parent::__construct();
		//Se cargan los modelos
		$this->load->model('Equipo');		
	 }

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function insertdata()
	{	
		//recuperamos la información del formulario
		$nombre = $this->input->post('nombreEquipo');	
		
		//insertamos el nombre del nuevo equipo
		$id = $this->Equipo->insert($nombre);

		//validación
		$data['alert'] = 'alert-danger';
		$data['title'] = 'Error';
		$data['mensaje'] = 'Ocurrió un error al intentar agregar su equipo, por favor contacte al departamente de Desarrollo. ';
		
		if ( $id ) {
			$data['alert'] = 'alert-success';
			$data['title'] = 'Bien';
			$data['mensaje'] = 'Su equipo se agregó de manera satisfactoria. ';			
		}

		$this->load->view('welcome_message',$data);
	}

	
}
