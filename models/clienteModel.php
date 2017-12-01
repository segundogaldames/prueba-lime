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
}