<?php 
/**
* 
*/
class contactoModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getContactoEncuesta($encuesta){
		//print_r($encuesta);exit;
		$encuesta = (int) $encuesta;

		$cant_filas = $this->_db->query("SELECT count(id) as filas FROM contactos WHERE estado_contacto = 1");
		$filas = $cant_filas->fetch();
		$aleatorio = rand(0, $filas['filas']-1);
		//print_r($aleatorio);exit;

		$cont = $this->_db->prepare("SELECT id, nombre, rut, telefono FROM contactos WHERE encuesta_id = ? and estado_contacto = 1 limit $aleatorio, 1");
		$cont->bindParam(1, $encuesta);
		//$cont->bindParam(2, $aleatorio);
		$cont->execute();

		return $cont->fetch();
	}

	public function editContactoEstado($id, $contacto, $llamada){
		$id = (int) $id;
		$contacto = (int) $contacto;
		$llamada = (int) $llamada;

		$cont = $this->_db->prepare("UPDATE contactos SET estado_contacto = ?, estado_llamada = ?, modified_at = now() WHERE id = ?");
		$cont->bindParam(1, $contacto);
		$cont->bindParam(2, $llamada);
		$cont->bindParam(3, $id);
		$cont->execute();
	}

	public function addContactos($nombre, $rut, $telefono, $encuesta){
		//print_r($telefono);exit;
		$cont = $this->_db->prepare("INSERT INTO contactos VALUES(null, ?, ?, ?, ?, now())");
		$cont->bindParam(1, $nombre);
		$cont->bindParam(2, $rut);
		$cont->bindParam(3, $telefono);
		$cont->bindParam(4, $encuesta);
		$cont->execute();
	}
}