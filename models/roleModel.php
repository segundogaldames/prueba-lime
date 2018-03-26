<?php
/**
* 
*/
class roleModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getRoles(){
		$rol = $this->_db->query("SELECT id, nombre FROM roles ORDER BY nombre");

		return $rol->fetchall();
	}

	public function getRoleNombre($nombre){
		$rol = $this->_db->prepare("SELECT id FROM roles WHERE nombre = ?");
		$rol->bindParam(1, $nombre);
		$rol->execute();

		return $rol->fetch();
	}

	public function addRole($nombre){
		$rol = $this->_db->prepare("INSERT INTO roles VALUES(null, ?)");
		$rol->bindParam(1, $nombre);
		$rol->execute();
	}
}