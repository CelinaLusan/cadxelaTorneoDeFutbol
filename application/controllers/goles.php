<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goles extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('goles_model');
	}

	function index() {
		$data['jugadores'] = $this->goles_model->getJugadores();
		$data['id'] = 0;
		$this->load->view('layout/headers');
		$this->load->view('goles', $data);
	}

	function updateGoles () {
		$idJugador = $this->input->get('idJugador');
		$goles = $this->input->get('goles');
		
		$id = $this->goles_model->updateGoles($idJugador, $goles);

		$data['jugadores'] = $this->goles_model->getJugadores();
		$data['id'] = $id;
		$this->load->view('layout/headers');
		$this->load->view('layout/alert_builder');
		$this->load->view('goles', $data);
	}
}
?>
