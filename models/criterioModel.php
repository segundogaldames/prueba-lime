<?php 
/**
* 
*/
class criterioModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getCriterioId($id){
		$id = (int) $id;

		$cri = $this->_db->prepare("SELECT cr.id, cr.nombre, cr.encuesta_id, cr.created_at as creado, cr.modified_at as modificado, e.nombre as encuesta FROM criterios cr INNER JOIN encuestas e ON cr.encuesta_id = e.id WHERE cr.id = ?");
		$cri->bindParam(1, $id);
		$cri->execute();

		return $cri->fetch();
	}

	public function getCriterioPorEncuesta($encuesta){
		$encuesta = (int) $encuesta;

		$cri = $this->_db->query("SELECT count(id) as filas FROM criterios WHERE encuesta_id = {$encuesta}");
		$id = $cri->fetch();
		$aleatorio = rand(0, $id['filas']-1);

		$crit = $this->_db->query("SELECT id FROM criterios WHERE encuesta_id = {$encuesta} limit $aleatorio, 1");
		$id_cri = $crit->fetch();
		$row = $id_cri['id'];

		return $row;
	}

	public function getCriteriosEncuesta($encuesta){
		$encuesta = (int) $encuesta;

		$cri = $this->_db->prepare("SELECT DISTINCT cr.id, cr.nombre, cr.encuesta_id, cr.created_at as creado, cr.modified_at as modificado, e.nombre as encuesta FROM criterios cr INNER JOIN encuestas e ON cr.encuesta_id = e.id WHERE cr.encuesta_id = ?");
		$cri->bindParam(1, $encuesta);
		$cri->execute();

		return $cri->fetchall();
	}

	public function getCriterioEncuestaNombre($nombre, $encuesta){
		$encuesta = (int) $encuesta;

		$cri = $this->_db->prepare("SELECT id FROM criterios WHERE nombre = ? AND encuesta_id = ?");
		$cri->bindParam(1, $nombre);
		$cri->bindParam(2, $encuesta);
		$cri->execute();

		return $cri->fetch();
	}

	#cuenta criterios por encuesta
	public function getCountCriteriosEncuesta($encuesta){
		$encuesta = (int) $encuesta;

		$cri = $this->_db->query("SELECT count(id) as filas FROM criterios WHERE encuesta_id = {$encuesta}");
		$num = $cri->fetch();
		$row = $num['filas'];

		return $row;
	}

	public function addCriterio($nombre, $encuesta){
		$encuesta = (int) $encuesta;

		$cri = $this->_db->prepare("INSERT INTO criterios VALUES(null, ?, ?, now(), now())");
		$cri->bindParam(1, $nombre);
		$cri->bindParam(2, $encuesta);
		$cri->execute();
	}

	public function editCriterio($id, $nombre){
		$id = (int) $id;

		$cri = $this->_db->prepare("UPDATE criterios SET nombre = ? WHERE id = ?");
		$cri->bindParam(1, $nombre);
		$cri->bindParam(2, $id);
		$cri->execute();
	}

	public function deleteCriterio($id){
		$id = (int) $id;

		$cri = $this->_db->prepare("DELETE FROM criterios WHERE id = ?");
		$cri->bindParam(1, $id);
		$cri->execute();
	}
}