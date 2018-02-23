<?php 
/**
* 
*/
class cargaModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getCargaId($id){
		$id = (int) $id;

		$car = $this->_db->prepare("SELECT id, usuario_id, created_at as fecha, estado FROM cargas WHERE id = ?");
		$car->bindParam(1, $id);
		$car->execute();

		return $car->fetch();
	}

	public function getUltimaCarga(){
		$car = $this->_db->query("SELECT max(id) as filas FROM cargas");
		$filas = $car->fetch();
		$row = $filas['filas'];

		return $row;
	}

	public function getCargasUsuario($usuario){
		$car = $this->_db->prepare("SELECT distinct id, usuario_id, created_at as fecha, estado, modified_at as modificado FROM cargas WHERE usuario_id = ? ORDER BY fecha");
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

	public function addCarga($usuario){

		$car = $this->_db->prepare("INSERT INTO cargas VALUES(null, ?, now()), 1, now()");
		$car->bindParam(1, $usuario);
		$car->execute();
	}

	public function deleteCarga($id){
		$id = (int) $id;

		$cont = $this->_db->prepare("DELETE FROM cargas WHERE id = ?");
		$cont->bindParam(1, $id);
		$cont->execute();
	}
}