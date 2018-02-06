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
		$encuesta = (int) $encuesta;

		$cant_filas = $this->_db->query("SELECT count(id) as filas FROM contactos WHERE estado_contacto = 1");
		$aleatorio = rand(0, $cant_filas['filas']-1);

		$cont = $this->_db->prepare("SELECT id, nombre, rut, telefono FROM contactos WHERE encuesta_id = ? and estado_contacto = 1 limit $aleatorio, 1");
		$cont->bindParam(1, $encuesta);
		$cont->execute();

		return $cont->fetch();
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