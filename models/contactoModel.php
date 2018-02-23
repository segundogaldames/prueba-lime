<?php 
/**
* 
*/
class contactoModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getContactos(){
		$cont = $this->_db->query("SELECT distinct c.id, c.nombre, c.telefono, c.encuesta, c.rut, c.comuna, c.region, c.empresa, c.email, c.direccion, c.profesion, c.edad, c.codigo, c.tienda, c.dato1, c.dato2, c.dato3, c.fecha1, c.fecha2, c.fecha3, c.telefono2, c.telefono3, c.telefono4, c.telefono5, c.telefono6, c.telefono7, c.telefono8, c.telefono9, c.telefono10, c.criterio1, c.criterio2, c.created_at as creado, c.num_carga, c.estado_contacto, c.estado_llamada, c.modified_at as modificado, ell.nombre as llamada, e.nombre as nom_encuesta, car.usuario_id, u.nombre as usuario FROM contactos c INNER JOIN estado_llamadas ell ON c.estado_llamada = ell.id INNER JOIN encuestas e ON c.encuesta = e.id INNER JOIN cargas car ON c.num_carga = car.id INNER JOIN usuarios u ON car.usuario_id = u.id");

		return $cont->fetchall();
	}

	//metodo que permite generar contactos por encuesta de manera aleatoria
	public function getContactoEncuesta($encuesta){
		//print_r($encuesta);exit;
		$encuesta = (int) $encuesta;

		$cant_filas = $this->_db->query("SELECT count(id) as filas FROM contactos WHERE estado_contacto = 1 AND estado_llamada = 7");
		$filas = $cant_filas->fetch();
		$aleatorio = rand(0, $filas['filas']-1);
		//print_r($aleatorio);exit;

		$cont = $this->_db->prepare("SELECT * FROM contactos WHERE encuesta = ? and estado_contacto = 1 AND estado_llamada = 7 limit $aleatorio, 1");
		$cont->bindParam(1, $encuesta);
		//$cont->bindParam(2, $aleatorio);
		$cont->execute();

		return $cont->fetch();
	}

	public function getContactosCarga($carga){
		$carga = (int) $carga;

		$cont = $this->_db->prepare("SELECT distinct c.id, c.nombre, c.telefono, c.encuesta, c.rut, c.comuna, c.region, c.empresa, c.email, c.direccion, c.profesion, c.edad, c.codigo, c.tienda, c.dato1, c.dato2, c.dato3, c.fecha1, c.fecha2, c.fecha3, c.telefono2, c.telefono3, c.telefono4, c.telefono5, c.telefono6, c.telefono7, c.telefono8, c.telefono9, c.telefono10, c.criterio1, c.criterio2, c.created_at as creado, c.num_carga, c.estado_contacto, c.estado_llamada, c.modified_at as modificado, ell.nombre as llamada, e.nombre as nom_encuesta FROM contactos c INNER JOIN estado_llamadas ell ON c.estado_llamada = ell.id INNER JOIN encuestas e ON c.encuesta = e.id WHERE c.num_carga = ?");
		$cont->bindParam(1, $carga);
		$cont->execute();

		return $cont->fetchall();
	}

	public function getCountContactosCountCarga($carga){
		$carga = (int) $carga;

		$cont = $this->_db->query("SELECT count(id) as filas FROM contactos WHERE num_carga = {$carga}");
		$filas = $cont->fetch();
		$row = $filas['filas'];

		return $row;
	}

	public function getCountContactosDisponiblesCarga($carga){
		$carga = (int) $carga;

		$cont = $this->_db->query("SELECT count(id) as filas FROM contactos WHERE num_carga = {$carga} AND estado_contacto = 1");
		$filas = $cont->fetch();
		$row = $filas['filas'];

		return $row;
	}

	public function getCountContactosEncuestadosCarga($carga){
		$carga = (int) $carga;

		$cont = $this->_db->query("SELECT count(id) as filas FROM contactos WHERE num_carga = {$carga} AND estado_llamada = 1");
		$filas = $cont->fetch();
		$row = $filas['filas'];
		//print_r($row);exit;
		
		return $row;
	}

	public function editContactoContactado($id, $llamada){
		//print_r($llamada);exit;
		$id = (int) $id;
		$contacto = (int) $contacto;
		$llamada = (int) $llamada;

		$cont = $this->_db->prepare("UPDATE contactos SET estado_contacto = 2, estado_llamada = ?, modified_at = now() WHERE id = ?");
		$cont->bindParam(1, $contacto);
		$cont->bindParam(2, $llamada);
		$cont->bindParam(3, $id);
		$cont->execute();
	}

	public function editContactoEstado($carga, $estado){
		$carga = (int) $carga;
		$estado = (int) $estado;

		$cont = $this->_db->prepare("UPDATE contactos SET estado_contacto = ?, modified_at = now() WHERE num_carga = ?");
		$cont->bindParam(1, $estado);
		$cont->bindParam(2, $carga);
		$cont->execute();

		//contamos cuantas filas se vieron afectadas por el cambio
		$num_cont = $this->_db->query("SELECT count(id) as filas FROM contactos WHERE estado_contacto = 2 AND num_carga = {$carga}");
		$filas = $num_cont->fetch();
		$row = $filas['filas'];

		return $row;
	}

	public function addContactos($nombre, $telefono, $encuesta, $rut, $comuna, $region, $empresa, $email, $direccion, $profesion, $edad, $codigo, $tienda, $dato1, $dato2, $dato3, $fecha1, $fecha2, $fecha3, $telefono2, $telefono3, $telefono4, $telefono5, $telefono6, $telefono7, $telefono8, $telefono9, $telefono10, $criterio1, $criterio2, $carga){
		//$carga = (int) $carga;
		//print_r($carga);exit;
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

	public function deleteContactosCarga($carga){
		$carga = (int) $carga;

		$cont = $this->_db->prepare("DELETE FROM contactos WHERE num_carga = ?");
		$cont->bindParam(1, $carga);
		$cont->execute();
	}
}