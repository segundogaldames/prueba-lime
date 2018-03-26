<?php
/**
* 
*/
class campaignModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getCampaign(){
		$cam = $this->_db->query("SELECT c.id, c.nombre, c.cliente_id, cl.nombre as cliente, c.cod_vicidial_id as vici FROM campaign as c INNER JOIN clientes as cl ON c.cliente_id = cl.id ORDER BY id DESC");
		return $cam->fetchall();
	}

	public function getCampaignId($id){
		$id = (int) $id;

		$cam = $this->_db->prepare("SELECT c.id, c.nombre, c.cliente_id, cl.nombre as cliente, c.cod_vicidial_id as vici FROM campaign as c INNER JOIN clientes as cl ON c.cliente_id = cl.id WHERE c.id = ?");
		$cam->bindParam(1, $id);
		$cam->execute();

		return $cam->fetch();
	}

	public function getCampaignNombre($nombre){
		$cam = $this->_db->prepare("SELECT id FROM campaign WHERE nombre = ?");
		$cam->bindParam(1, $nombre);
		$cam->execute();

		return $cam->fetch();
	}

	public function getCampaignCliente($cliente){
		$cliente = (int) $cliente;

		$cam = $this->_db->prepare("SELECT id, nombre FROM campaign WHERE cliente_id = ?");
		$cam->bindParam(1, $cliente);
		$cam->execute();

		return $cam->fetchall();
	}

	public function editCampaign($id, $nombre, $cliente, $vici){
		$cam = $this->_db->prepare("UPDATE campaign SET nombre = ?, cliente_id = ?, cod_vicidial_id = ? WHERE id = ?");
		$cam->bindParam(1, $nombre);
		$cam->bindParam(2, $cliente);
		$cam->bindParam(3, $vici);
		$cam->bindParam(4, $id);
		$cam->execute();
	}

	public function deleteCampaign($id){
		$id = (int) $id;

		$cam = $this->_db->prepare("DELETE FROM campaign WHERE id = ?");
		$cam->bindParam(1, $id);
		$cam->execute();
	}

	public function addCampaign($nombre, $cliente, $vici){
		$cam = $this->_db->prepare("INSERT INTO campaign VALUES(null, ?, ?, ?)");
		$cam->bindParam(1, $nombre);
		$cam->bindParam(2, $cliente);
		$cam->bindParam(3, $vici);
		$cam->execute();
	}
}