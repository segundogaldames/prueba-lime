<?php 
/**
* 
*/
class cuotaModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getCuotas(){
		$cuota = $this->_db->query("SELECT c.id, c.encuesta_id, c.criterio_id, c.desde, c.hasta, e.nombre as encuesta, cr.nombre as criterio, c.valor FROM cuotas c INNER JOIN encuestas e ON c.encuesta_id = e.id LEFT JOIN criterios cr ON c.criterio_id = cr.id");
	}

	public function getCuotaId($id){
		$id = (int) $id;

		$cuota = $this->_db->prepare("SELECT c.id, c.encuesta_id, c.criterio_id, c.desde, c.hasta, e.nombre as encuesta, cr.nombre as criterio, c.valor FROM cuotas c INNER JOIN encuestas e ON c.encuesta_id = e.id LEFT JOIN criterios cr ON c.criterio_id = cr.id WHERE c.id = ?");
		$cuota->bindParam(1, $id);
		$cuota->execute();

		return $cuota->fetch();
	}

	public function getCuotasEncuesta($encuesta){
		//print_r($encuesta);exit;
		$encuesta = (int) $encuesta;

		$cuota = $this->_db->prepare("SELECT c.id, c.encuesta_id, c.criterio_id, c.desde, c.hasta, e.nombre as encuesta, cr.nombre as criterio, c.valor FROM cuotas c INNER JOIN encuestas e ON c.encuesta_id = e.id LEFT JOIN criterios cr ON c.criterio_id = cr.id WHERE c.encuesta_id = ?");
		$cuota->bindParam(1, $encuesta);
		$cuota->execute();

		return $cuota->fetch();
	}

	public function getCuotaEncuestaCriterio($criterio){
		//print_r($criterio);exit;
		$criterio = (int) $criterio;

		$cuota = $this->_db->prepare("SELECT DISTINCT c.id, c.encuesta_id, c.criterio_id, c.desde, c.hasta, e.nombre as encuesta, cr.nombre as criterio, c.valor FROM cuotas c INNER JOIN encuestas e ON c.encuesta_id = e.id INNER JOIN criterios cr ON c.criterio_id = cr.id WHERE c.criterio_id = ?");
		$cuota->bindParam(1, $criterio);
		$cuota->execute();

		return $cuota->fetch();
	}

	public function addCuota($encuesta, $criterio, $desde, $hasta, $valor){
		$encuesta = (int) $encuesta;
		$criterio = (int) $criterio;

		$cuota = $this->_db->prepare("INSERT INTO cuotas VALUES(null, ?, ?, ?, ?, ?)");
		$cuota->bindParam(1, $encuesta);
		$cuota->bindParam(2, $criterio);
		$cuota->bindParam(3, $desde);
		$cuota->bindParam(4, $hasta);
		$cuota->bindParam(5, $valor);
		$cuota->execute();
	}

	public function editCuota($id, $desde, $hasta, $valor){
		$id = (int) $id;

		$cuota = $this->_db->prepare("UPDATE cuotas SET desde = ?, hasta = ?, valor = ? WHERE id = ?");
		$cuota->bindParam(1, $desde);
		$cuota->bindParam(2, $hasta);
		$cuota->bindParam(3, $valor);
		$cuota->bindParam(4, $id);
		$cuota->execute();
	}

	public function deleteCuota($id){
		$id = (int) $id;

		$cuota = $this->_db->prepare("DELETE FROM cuotas WHERE id = ?");
		$cuota->bindParam(1, $id);
		$cuota->execute();
	}
}