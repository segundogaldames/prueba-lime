<?php 
/**
* 
*/
class encuestausuarioModel extends model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getEncuestasUsuarios(){
		$ues = $this->_db->query("SELECT eu.id, eu.encuesta_id, eu.usuario_id, e.nombre as encuesta, u.nombre as usuario FROM encuestas_usuarios as eu INNER JOIN encuestas as e ON eu.encuesta_id = e.id INNER JOIN usuarios as u ON eu.usuario_id = u.id");
	}

	public function add($encuesta, $usuario){
		$encuesta = (int) $encuesta;
		$usuario = (int) $usuario;

		$eus = $this->_db->prepare("INSERT INTO encuestas_usuarios VALUES(null, ?, ?)");
		$eus->bindParam(1, $encuesta);
		$eus->bindParam(2, $usuario);
		$eus->execute();
	}
}