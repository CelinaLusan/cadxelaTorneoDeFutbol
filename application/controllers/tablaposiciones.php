<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TablaPosiciones extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('tablaposiciones_model');	
	}

	public function index()
	{
		//$datos["arrayJugadores"]=$this->Amonestaciones->getJugadores();
		$data['equipos'] = $this->tablaposiciones_model->getEquipos();
		$data['jugadores'] = $this->tablaposiciones_model->getJugadores();
		$this->load->view('layout/headers');
		$this->load->view('layout/alert_builder');
		$this->load->view('tablaPosiciones', $data);
	}
}
?>