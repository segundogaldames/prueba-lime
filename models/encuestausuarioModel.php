<?php 
/**
* 
*/
class encuestausuarioModel extends model
{
	
	public function __construct(){
		parent::__construct();
	}

	//mostrar todos los registros en la tabla encuestas_usuarios
	public function getEncuestasUsuarios(){
		$ues = $this->_db->query("SELECT eu.id, eu.encuesta_id, eu.usuario_id, e.nombre as encuesta, u.nombre as usuario FROM encuestas_usuarios as eu INNER JOIN encuestas as e ON eu.encuesta_id = e.id INNER JOIN usuarios as u ON eu.usuario_id = u.id");

		return $ues->fetchall();
	}

	//mostrar un registro de la tabla encuestas_usuarios
	public function getEncuestaUsuarioId($id){
		$id = (int) $id;

		$eus = $this->_db->prepare("SELECT eu.id, eu.encuesta_id, eu.usuario_id, e.nombre as encuesta, u.nombre as usuario FROM encuestas_usuarios as eu INNER JOIN encuestas as e ON eu.encuesta_id = e.id INNER JOIN usuarios as u ON eu.usuario_id = u.id WHERE eu.id = ?");
		$eus->bindParam(1, $id);
		$eus->execute();

		return $eus->fetch();
	}

	//comprobar si la asociacion de un usuario a una encuesta ya existe
	public function getEncuestaUsuarioDuplicate($encuesta, $usuario){
		$encuesta = (int) $encuesta;
		$usuario = (int) $usuario;

		$ues = $this->_db->prepare("SELECT id FROM encuestas_usuarios WHERE encuesta_id = ? AND usuario_id = ?");
		$ues->bindParam(1, $encuesta);
		$ues->bindParam(2, $usuario);
		$ues->execute();

		return $ues->fetch();
	}

	//mostrar encuestas por ejecutivos
	public function getEncuestaUsuarioPorUsuario($usuario){
		//print_r($usuario);exit;
		$usuario = (int) $usuario;

		$ues = $this->_db->prepare("SELECT eu.id, eu.encuesta_id, eu.usuario_id, eu.criterio_id, e.nombre, e.link FROM encuestas_usuarios as eu INNER JOIN encuestas as e ON eu.encuesta_id = e.id WHERE eu.usuario_id = ? AND e.tipo = 1 and e.status= 1");
		$ues->bindParam(1, $usuario);
		$ues->execute();

		return $ues->fetchall();
	}

	//mostrar auditorias por auditores
	public function getEncuestaUsuarioAuditoriasPorUsuario($usuario){
		//print_r($usuario);exit;
		$usuario = (int) $usuario;

		$ues = $this->_db->prepare("SELECT eu.id, eu.encuesta_id, eu.usuario_id, e.nombre, e.link FROM encuestas_usuarios as eu INNER JOIN encuestas as e ON eu.encuesta_id = e.id WHERE eu.usuario_id = ? AND e.tipo = 2 and e.status = 1");
		$ues->bindParam(1, $usuario);
		$ues->execute();

		return $ues->fetchall();
	}

	//mostrar los registros de la tabla encuestas_usuarios por id de encuesta
	public function getUsuariosEncuesta($encuesta){
		//print_r($usuario);exit;
		$encuesta = (int) $encuesta;

		$ues = $this->_db->prepare("SELECT distinct eu.id, eu.encuesta_id, eu.usuario_id, u.nombre as usuario FROM encuestas_usuarios eu INNER JOIN usuarios u ON eu.usuario_id = u.id WHERE eu.encuesta_id = ?");
		$ues->bindParam(1, $encuesta);
		$ues->execute();

		return $ues->fetchall();
	}

	//agregar una asociacion de una encuesta a ejecutivos o auditores
	public function addEncuestaUsuario($encuesta, $usuario, $criterio){
		$encuesta = (int) $encuesta;
		$usuario = (int) $usuario;

		$eus = $this->_db->prepare("INSERT INTO encuestas_usuarios VALUES(null, ?, ?, ?)");
		$eus->bindParam(1, $encuesta);
		$eus->bindParam(2, $usuario);
		$eus->bindParam(3, $criterio);
		$eus->execute();
	}

	//eliminar registros por id
	public function deleteEncuestaUsuario($id){
		//print_r($id);exit;
		$id = (int) $id;

		$eus = $this->_db->prepare("DELETE FROM encuestas_usuarios WHERE id = ?");
		$eus->bindParam(1, $id);
		$eus->execute();
	}
}