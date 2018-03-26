<?php 
/**
* 
*/
class encuestaModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getEncuestas(){
		$enc = $this->_db->query("SELECT e.id, e.nombre, e.link, e.status, e.created_at as creado, e.updated_at as actualizado, e.campaign_id, c.nombre as campaign, e.tipo FROM encuestas as e INNER JOIN campaign as c ON e.campaign_id = c.id ORDER BY e.id dESC");
		
		return $enc->fetchall();
	}

	public function getEncuestaId($id){
		$id = (int) $id;

		$enc = $this->_db->prepare("SELECT e.id, e.nombre, e.link, e.status, e.created_at as creado, e.updated_at as actualizado, e.campaign_id, c.nombre as campaign, e.tipo FROM encuestas as e INNER JOIN campaign as c ON e.campaign_id = c.id WHERE e.id = ?");
		$enc->bindParam(1, $id);
		$enc->execute();

		return $enc->fetch();
	}

	public function getEncuestasActivas(){
		//$status = (int) $status;

		$enc = $this->_db->query("SELECT e.id, e.nombre, e.link, e.status, e.created_at as creado, e.updated_at as actualizado, e.campaign_id, c.nombre as campaign, e.tipo FROM encuestas as e INNER JOIN campaign as c ON e.campaign_id = c.id WHERE e.status = 1 ORDER BY e.id dESC");
		
		return $enc->fetchall();
	}

	public function getEncuestaNombre($nombre){
		$enc = $this->_db->prepare("SELECT id FROM encuestas WHERE nombre = ?");
		$enc->bindParam(1, $nombre);
		$enc->execute();

		return $enc->fetch();
	}

	public function getEncuestaLink($link){
		$enc = $this->_db->prepare("SELECT id FROM encuestas WHERE link = ?");
		$enc->bindParam(1, $link);
		$enc->execute();

		return $enc->fetch();
	}

	public function getEncuestasCampaign($campaign){
		$campaign = (int) $campaign;

		$enc = $this->_db->prepare("SELECT id, nombre FROM encuestas WHERE campaign_id = ? and status = 1");
		$enc->bindParam(1, $campaign);
		$enc->execute();

		return $enc->fetchall();
	}

	public function getEncuestasEncuestas(){
		$enc = $this->_db->query("SELECT e.id, e.nombre, e.link, e.status, e.created_at as creado, e.updated_at as actualizado, e.campaign_id, c.nombre as campaign, e.tipo FROM encuestas as e INNER JOIN campaign as c ON e.campaign_id = c.id WHERE e.tipo = 1 ORDER BY e.id dESC");
		
		return $enc->fetchall();
	}

	public function getAuditorias(){
		$enc = $this->_db->query("SELECT e.id, e.nombre, e.link, e.status, e.created_at as creado, e.updated_at as actualizado, e.campaign_id, c.nombre as campaign, e.tipo FROM encuestas as e INNER JOIN campaign as c ON e.campaign_id = c.id WHERE e.tipo = 2 ORDER BY e.id dESC");
		
		return $enc->fetchall();
	}

	public function addEncuesta($nombre, $link, $campaign, $tipo){
		//print_r($campaign);exit;
		$campaign = (int) $campaign;
		$tipo = (int) $tipo;

		$enc = $this->_db->prepare("INSERT INTO encuestas VALUES(null, ?, ?, 2, now(), now(), ?, ?)");
		$enc->bindParam(1, $nombre);
		$enc->bindParam(2, $link);
		$enc->bindParam(3, $campaign);
		$enc->bindParam(4, $tipo);
		$enc->execute();
	}

	public function editEncuesta($id, $nombre, $link, $status, $campaign, $tipo){
		$id = (int) $id;
		$status = (int) $status;
		$campaign = (int) $campaign;
		$tipo = (int) $tipo;

		$enc = $this->_db->prepare("UPDATE encuestas SET nombre = ?, link = ?, status = ?, updated_at = now(), campaign_id = ?, tipo = ? WHERE id = ?");
		$enc->bindParam(1, $nombre);
		$enc->bindParam(2, $link);
		$enc->bindParam(3, $status);
		$enc->bindParam(4, $campaign);
		$enc->bindParam(5, $tipo);
		$enc->bindParam(6, $id);
		$enc->execute();
	}

	public function deleteEncuestas($id){
		$id = (int) $id;

		$enc = $this->_db->prepare("DELETE FROM encuestas WHERE id = ?");
		$enc->bindParam(1, $id);
		$enc->execute();
	}
}