<?php 
/**
* 
*/
class estadocontactoModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getEstadoContactos(){
		$ec = $this->_db->query("SELECT id, nombre FROM estado_contactos");
		return $ec->fetchall();
	}

	public function getEstadoContactoNombre($nombre){
		$ec = $this->_db->prepare("SELECT id, nombre FROM estado_contactos WHERE nombre = ?");
		$ec->bindParam(1, $nombre);
		$ec->execute();

		return $ec->fetch();
	}

	public function addEstadoContacto($nombre){
		$ec = $this->_db->prepare("INSERT INTO estado_contactos VALUES(null, ?)");
		$ec->bindParam(1, $nombre);
		$ec->execute();
	}
}