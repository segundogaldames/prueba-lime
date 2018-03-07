<?php 
/**
* 
*/
class encuestasupervisorModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getEncuestasSupervisores(){
		$es = $this->_db->query("SELECT es.id, es.encuesta_id, es.supervisor_id, e.nombre as encuesta, u.nombre as supervisor FROM encuestas_supervisores es INNER JOIN encuestas e ON es.encuesta_id = e.id INNER JOIN usuarios u ON es.supervisor_id = u.id");

		return $es->fetchall();
	}

	//mostrar registros asociados a una encuesta id
	public function getEncuestaSupervisorEncuesta($encuesta){
		$encuesta = (int) $encuesta;

		$es = $this->_db->prepare("SELECT es.id, es.encuesta_id, es.supervisor_id, e.nombre as encuesta, u.nombre as supervisor FROM encuestas_supervisores es INNER JOIN encuestas e ON es.encuesta_id = e.id INNER JOIN usuarios u ON es.supervisor_id = u.id WHERE es.encuesta_id = ?");
		$es->bindParam(1, $encuesta);
		$es->execute();

		return $es->fetchall();
	}

	//mostrar registros asociados a supervisores
	public function getEncuestasSupervisorUsuario($usuario){
		$usuario = (int) $usuario;

		$es = $this->_db->prepare("SELECT es.id, es.encuesta_id, e.nombre as encuesta, e.status, e.tipo, e.campaign_id, c.nombre as campaign, e.created_at as creado, e.updated_at as modificada FROM encuestas_supervisores es INNER JOIN encuestas e ON es.encuesta_id = e.id INNER JOIN campaign c ON e.campaign_id = c.id WHERE es.supervisor_id = ?");
		$es->bindParam(1, $usuario);
		$es->execute();

		return $es->fetchall();
	}

	//comprobar que existe un registro por encuesta y usuario
	public function getEncuestaSupervisor($encuesta, $usuario){
		$encuesta = (int) $encuesta;
		$usuario = (int) $usuario;

		$es = $this->_db->prepare("SELECT id FROM encuestas_supervisores WHERE encuesta_id = ? AND supervisor_id = ?");
		$es->bindParam(1, $encuesta);
		$es->bindParam(2, $usuario);
		$es->execute();

		return $es->fetch();
	}

	//Crear asociacion de una encuesta con un supervisor
	public function addEncuestaSupervisor($encuesta, $supervisor){
		$encuesta = (int) $encuesta;
		$supervisor = (int) $supervisor;

		$es = $this->_db->prepare("INSERT INTO encuestas_supervisores VALUES(null, ?, ?)");
		$es->bindParam(1, $encuesta);
		$es->bindParam(2, $supervisor);
		$es->execute();
	}
}