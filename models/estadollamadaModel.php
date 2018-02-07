<?php 
/**
* 
*/
class estadollamadaModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getEstadoLlamadas(){
		$ell = $this->_db->query("SELECT id, nombre FROM estado_llamadas ORDER BY nombre");

		return $ell->fetchall();
	}

	public function getEstadoLlamadaNombre($nombre){
		//print_r($nombre);exit;
		$ell = $this->_db->prepare("SELECT id FROM estado_llamadas WHERE nombre = ?");
		$ell->bindParam(1, $nombre);
		$ell->execute();

		return $ell->fetch();
	}

	public function addEstadoLlamada($nombre){
		$ell = $this->_db->prepare("INSERT INTO estado_llamadas VALUES(null, ?)");
		$ell->bindParam(1, $nombre);
		$ell->execute();
	}
}