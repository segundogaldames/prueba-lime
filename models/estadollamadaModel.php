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
		$ell = $this->_db->query("SELECT ell.id, ell.nombre, ell.estado_contacto, ec.nombre as contacto FROM estado_llamadas ell INNER JOIN estado_contactos ec ON ell.estado_contacto = ec.id ORDER BY ell.nombre");

		return $ell->fetchall();
	}

	public function getEstadoLlamadaId($id){
		$id = (int) $id;

		$ell = $this->_db->prepare("SELECT ell.id, ell.nombre, ell.estado_contacto, ec.nombre as contacto FROM estado_llamadas ell INNER JOIN estado_contactos ec ON ell.estado_contacto = ec.id WHERE ell.id = ?");
		$ell->bindParam(1, $id);
		$ell->execute();

		return $ell->fetch();
	}

	public function getEstadoLlamadaNombre($nombre){
		//print_r($nombre);exit;
		$ell = $this->_db->prepare("SELECT id FROM estado_llamadas WHERE nombre = ?");
		$ell->bindParam(1, $nombre);
		$ell->execute();

		return $ell->fetch();
	}

	public function editEstadoLlamada($id, $nombre, $est_contacto){
		$id = (int) $id;
		$est_contacto = (int) $est_contacto;

		$ell = $this->_db->prepare("UPDATE estado_llamadas SET nombre = ?, estado_contacto = ? WHERE id = ?");
		$ell->bindParam(1, $nombre);
		$ell->bindParam(2, $est_contacto);
		$ell->bindParam(3, $id);
		$ell->execute();
	}

	public function addEstadoLlamada($nombre, $est_contacto){
		$est_contacto = (int) $est_contacto;

		$ell = $this->_db->prepare("INSERT INTO estado_llamadas VALUES(null, ?, ?)");
		$ell->bindParam(1, $nombre);
		$ell->bindParam(2, $est_contacto);
		$ell->execute();
	}
}