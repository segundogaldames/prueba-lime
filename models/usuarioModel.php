<?php

/**
* 
*/
class usuarioModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getUsuarios(){
		$usu = $this->_db->query("SELECT u.id, u.nombre, u.email, u.role_id, r.nombre as role, u.created_at as creado, u.updated_at as actualizado FROM usuarios as u INNER JOIN roles as r ON u.role_id = r.id ORDER BY r.nombre");
		return $usu->fetchall();
	}

	public function getUsuarioId($id){
		$id = (int) $id;

		$usu = $this->_db->prepare("SELECT u.id, u.nombre, u.email, u.role_id, r.nombre as role, u.created_at as creado, u.updated_at as actualizado FROM usuarios as u INNER JOIN roles as r ON u.role_id = r.id WHERE u.id = ?");
		$usu->bindParam(1, $id);
		$usu->execute();

		return $usu->fetch();
	}

	public function login($email, $clave){
		$usu = $this->_db->prepare("SELECT id, nombre, role_id FROM usuarios WHERE email = ? and clave = ?");
		$usu->bindParam(1, $email);
		$usu->bindParam(2, Hash::getHash('sha1', $clave, HASH_KEY));
		$usu->execute();

		return $usu->fetch();
	}

	public function getUsuarioEmail($email){
		$usu = $this->_db->prepare("SELECT id FROM usuarios WHERE email = ?");
		$usu->bindParam(1, $email);
		$usu->execute();

		return $usu->fetch();
	}

	public function addUsuario($nombre, $email, $clave, $role){
		$usu = $this->_db->prepare("INSERT INTO usuarios VALUES(null, ?, ?, ?, now(), now(), ?)");
		$usu->bindParam(1, $nombre);
		$usu->bindParam(2, $email);
		$usu->bindParam(3, Hash::getHash('sha1', $clave, HASH_KEY));
		$usu->bindParam(4, $role);
		$usu->execute();
	}
}