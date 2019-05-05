<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TablaPosiciones_model extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function getEquipos() {
		$this->db->from('equipos');
		$this->db->order_by('puntosObtenidos', 'desc');
		$query = $this->db->get(); 
		if ($query->num_rows() > 0)
			return $query;
		else
			return false;
	}

	function getJugadores() {
		$this->db->select('j.*, e.nombre enombre');
		$this->db->from('jugadores as j');
		$this->db->join('equipos as e','j.idEquipo=e.idEquipo','inner');
		$this->db->order_by('j.goles', 'desc');
		$query=$this->db->get();

		if ($query->num_rows() > 0)
			return $query;
		else
			return false;
	}
}
?>