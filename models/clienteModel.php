<?php
/**
* 
*/
class clienteModel extends Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function  getClientes(){
		$cli = $this->_db->query("SELECT id, nombre, created_at as creado, updated_at as modificado FROM clientes ORDER BY nombre");
		return $cli->fetchall();
	}

	public function getClienteId($id){
		$id = (int) $id;

		$cli =$this->_db->prepare("SELECT id, nombre, created_at as creado, updated_at as modificado FROM clientes WHERE id = ?");
		$cli->bindParam(1, $id);
		$cli->execute();

		return $cli->fetch();
	}

	public function getClienteNombre($nombre){
		$cli = $this->_db->prepare("SELECT id FROM clientes WHERE nombre = ?");
		$cli->bindParam(1, $nombre);
		$cli->execute();

		return $cli->fetch();
	}

	public function addCliente($nombre){
		$cli = $this->_db->prepare("INSERT INTO clientes VALUES(null, ?, now(), now())");
		$cli->bindParam(1, $nombre);
		$cli->execute();
	}

	public function editCliente($id, $nombre){
		$id =(int) $id;

		$cli = $this->_db->prepare("UPDATE clientes SET nombre = ? WHERE id = ?");
		$cli->bindParam(1, $nombre);
		$cli->bindParam(2, $id);
		$cli->execute();
	}

	public function deleteCliente($id){
		$id = (int) $id;

		$cli = $this->_db->prepare("DELETE FROM clientes WHERE id = ?");
		$cli->bindParam(1, $id);
		$cli->execute();
	}
}