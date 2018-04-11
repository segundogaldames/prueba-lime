<?php 
/**
* 
*/
class cargaModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getCargas(){
		$car = $this->_db->query("SELECT c.id, c.usuario_id, c.created_at as fecha, c.estado, c.modified_at as modificado, c.encuesta, e.nombre, u.nombre as usuario, cr.nombre as criterio FROM cargas c INNER JOIN encuestas e ON c.encuesta = e.id INNER JOIN usuarios u ON c.usuario_id = u.id LEFT JOIN criterios cr ON c.criterio_id = cr.id ORDER BY fecha");
		return $car->fetchall();
	}

	public function getCargaId($id){
		$id = (int) $id;

		$car = $this->_db->prepare("SELECT c.id, c.usuario_id, c.created_at as fecha, c.estado, c.encuesta, e.nombre, u.nombre as usuario FROM cargas c INNER JOIN encuestas e ON c.encuesta = e.id INNER JOIN usuarios u ON c.usuario_id = u.id WHERE c.id = ?");
		$car->bindParam(1, $id);
		$car->execute();

		return $car->fetch();
	}

	public function getCargasEncuesta($encuesta){
		$encuesta = (int) $encuesta;

		$car = $this->_db->prepare("SELECT id FROM cargas WHERE encuesta = ?");
		$car->bindParam(1, $encuesta);
		$car->execute();

		return $car->fetchall();
	}

	public function getCargasCriterio($criterio){
		$criterio = (int) $criterio;

		$car = $this->_db->prepare("SELECT id FROM cargas WHERE criterio_id = ?");
		$car->bindParam(1, $criterio);
		$car->execute();

		return $car->fetchall();
	}

	public function getUltimaCarga(){
		$car = $this->_db->query("SELECT max(id) as filas FROM cargas");
		$filas = $car->fetch();
		$row = $filas['filas'];

		return $row;
	}

	public function getCargasUsuario($usuario){
		$car = $this->_db->prepare("SELECT distinct c.id, c.encuesta, c.usuario_id, c.created_at as fecha, c.estado, c.modified_at as modificado, e.nombre, cr.nombre as criterio FROM cargas c INNER JOIN encuestas e ON c.encuesta = e.id LEFT JOIN criterios cr ON c.criterio_id = cr.id WHERE usuario_id = ? ORDER BY fecha");
		$car->bindParam(1, $usuario);
		$car->execute();

		return $car->fetchall();
	}

	public function editCarga($id, $estado){
		$id = (int) $id;
		$estado = (int) $estado;

		$car = $this->_db->prepare("UPDATE cargas SET estado = ?, modified_at = now() WHERE id = ?");
		$car->bindParam(1, $estado);
		$car->bindParam(2, $id);
		$car->execute();
	}

	public function addCarga($usuario, $encuesta, $criterio){
		//print_r($encuesta);exit;
		$usuario = (int) $usuario;
		$encuesta = (int) $encuesta;

		$car = $this->_db->prepare("INSERT INTO cargas VALUES(null, ?, now(), 1, now(), ?, ?)");
		$car->bindParam(1, $usuario);
		$car->bindParam(2, $encuesta);
		$car->bindParam(3, $criterio);
		$car->execute();
	}

	public function deleteCarga($id){
		$id = (int) $id;

		$cont = $this->_db->prepare("DELETE FROM cargas WHERE id = ?");
		$cont->bindParam(1, $id);
		$cont->execute();
	}
}