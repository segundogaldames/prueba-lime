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

		$cont = $this->_db->prepare("SELECT * FROM contactos WHERE encuesta = ? and estado_contacto = 1 limit $aleatorio, 1");
		$cont->bindParam(1, $encuesta);
		//$cont->bindParam(2, $aleatorio);
		$cont->execute();

		return $cont->fetch();
	}

	public function getCarga(){
		$carga = $this->_db->query("SELECT c.created_at as fecha, c.num_carga as carga FROM contactos");
		return $carga->fetch();
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

	public function addContactos($nombre, $telefono, $encuesta, $rut, $comuna, $region, $empresa, $email, $direccion, $profesion, $edad, $codigo, $tienda, $dato1, $dato2, $dato3, $fecha1, $fecha2, $fecha3, $telefono2, $telefono3, $telefono4, $telefono5, $telefono6, $telefono7, $telefono8, $telefono9, $telefono10, $dato4, $dato5, $carga){
		//print_r($fecha1);exit;
		$cont = $this->_db->prepare("INSERT INTO contactos VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, now(), ?, 1, 7, now())");
		$cont->bindParam(1, $nombre);
		$cont->bindParam(2, $telefono);
		$cont->bindParam(3, $encuesta);
		$cont->bindParam(4, $rut);
		$cont->bindParam(5, $comuna);
		$cont->bindParam(6, $region);
		$cont->bindParam(7, $empresa);
		$cont->bindParam(8, $email);
		$cont->bindParam(9, $direccion);
		$cont->bindParam(10, $profesion);
		$cont->bindParam(11, $edad);
		$cont->bindParam(12, $codigo);
		$cont->bindParam(13, $tienda);
		$cont->bindParam(14, $dato1);
		$cont->bindParam(15, $dato2);
		$cont->bindParam(16, $dato3);
		$cont->bindParam(17, $fecha1);
		$cont->bindParam(18, $fecha2);
		$cont->bindParam(19, $fecha3);
		$cont->bindParam(20, $telefono2);
		$cont->bindParam(21, $telefono3);
		$cont->bindParam(22, $telefono4);
		$cont->bindParam(23, $telefono5);
		$cont->bindParam(24, $telefono6);
		$cont->bindParam(25, $telefono7);
		$cont->bindParam(26, $telefono8);
		$cont->bindParam(27, $telefono9);
		$cont->bindParam(28, $telefono10);
		$cont->bindParam(29, $dato4);
		$cont->bindParam(30, $dato5);
		$cont->bindParam(31, $carga);
		$cont->execute();
	}
}