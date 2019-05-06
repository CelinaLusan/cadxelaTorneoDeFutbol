<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goles_model extends CI_model {
	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function updateGoles ($idJugador, $goles) {
		$this->db->select('j.*');
		$this->db->from('jugadores as j');
		$this->db->where('idJugador', $idJugador);
		$query = $this->db->get();
		
		if($query->num_rows() > 0) {
			if ($goles != null) {
				//Actualización del jugador
				$totalGoles = $query->row()->goles + $goles;
		        $data = array(
		        	'goles'=>$totalGoles       
		        );
				$this->db->where('idJugador', $idJugador);
				$this->db->update('jugadores',$data);

				//Actualización de la puntuación de los equipos
				$idEquipo = $query->row()->idEquipo;
				$this->db->select('idJugador, goles');
				$this->db->from('jugadores');
				$this->db->where('idEquipo', $idEquipo);
				$query2 = $this->db->get();

				$totalPuntos = 0;
				foreach($query2->result() as $row) {
					$totalPuntos += $row->goles;
				}
				$data = array(
		        	'puntosObtenidos'=>$totalPuntos       
		        );
				$this->db->where('idEquipo', $idEquipo);
				$id = $this->db->update('equipos',$data);
			} else
				$id = -2;
		} else
			$id = -1;
       
        return $id;
	}

	function getJugadores(){
		$query = $this->db->get('jugadores');
		
		if ($query->num_rows() > 0)
			return $query;
		else
			return false;
	}

}

?>