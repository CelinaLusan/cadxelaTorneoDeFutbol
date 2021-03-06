<?php
class Amonestaciones extends CI_Model { 
   
    public function updateJugador($idJugador,$tarjetasAmarillas,$tarjetasRojas){
		
		//consulto el total y sumo
		
		$consulta = $this -> db
		   -> select('tarjetasAmarillas,tarjetasRojas')
		   -> where('nombre', $idJugador)
		   -> limit(1)
		   -> get('jugadores');
		$taTotal=$consulta->row()->tarjetasAmarillas;
		$taTotal=$taTotal+$tarjetasAmarillas;
		$trTotal=$consulta->row()->tarjetasRojas;
		$trTotal=$trTotal+$tarjetasRojas;
		
		
		
        $data = array(
           'tarjetasAmarillas' => $taTotal,
           'tarjetasRojas' => $trTotal         
        );
		//$consulta = $this->db->query('select * from jugadores where idJugador="',$idJugador,'"');
		
		$id= $this->db->update('jugadores',$data);
       
        return $id;
    }
	
	public function getJugadores(){
		$consulta = $this->db->query('select * from jugadores');
		
		if($consulta->num_rows()>0){
			foreach ($consulta->result() as $row)
			$arrayJugadores[htmlspecialchars($row->idJugador, ENT_QUOTES)]=
			htmlspecialchars($row->nombre, ENT_QUOTES);
			$consulta->free_result();
			return $arrayJugadores;
		}
		
	}
	
	
}