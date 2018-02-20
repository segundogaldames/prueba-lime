<?php 
/**
* 
*/
class cargaModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getCargaIdCarga($id, $carga){
		$id = (int) $id;
		$carga = (int) $carga;

		$car = $this->_db->prepare("SELECT id FROM cargas WHERE id = ? AND carga_id = ?");
		$car->bindParam(1, $id);
		$car->bindParam(1, $carga);
		$car->execute();

		return $car->fetch();
	}

	public function getCargasUsuario($usuario){
		$car = $this->_db->prepare("SELECT distinct id, carga_id, usuario_id, created_at as fecha FROM cargas ORDER BY fecha");
		$car->bindParam(1, $usuario);
		$car->execute();

		return $car->fetchall();
	}

	public function addCarga($carga, $usuario){
		$carga = (int) $carga;

		$car = $this->_db->prepare("INSERT INTO cargas VALUES(null, ?, ?, now())");
		$car->bindParam(1, $carga);
		$car->bindParam(2, $usuario);
		$car->execute();
	}
}