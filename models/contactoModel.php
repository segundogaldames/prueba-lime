<?php 
/**
* 
*/
class contactoModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	//metodos get
	#lista de todos los contactos
	public function getContactos(){
		$cont = $this->_db->query("SELECT distinct c.id, c.nombre, c.telefono, c.encuesta, c.rut, c.comuna, c.region, c.codigo, c.dato1, c.dato2, c.dato3, c.dato4, c.dato5, c.dato6, c.dato7, c.dato8, c.dato9, c.dato10, c.dato11, c.fecha1, c.fecha2, c.fecha3, c.telefono2, c.telefono3, c.telefono4, c.telefono5, c.telefono6, c.telefono7, c.telefono8, c.telefono9, c.telefono10, c.created_at as creado, c.num_carga, c.estado_contacto, ec.nombre as e_contacto, c.estado_llamada, c.modified_at as modificado, ell.nombre as llamada, e.nombre as nom_encuesta, car.usuario_id, u.nombre as usuario FROM contactos c INNER JOIN estado_llamadas ell ON c.estado_llamada = ell.id INNER JOIN encuestas e ON c.encuesta = e.id LEFT JOIN cargas car ON c.num_carga = car.id INNER JOIN usuarios u ON car.usuario_id = u.id INNER JOIN estado_contactos ec ON c.estado_contacto = ec.id");

		return $cont->fetchall();
	}

	#muestra contactos por id
	public function getContactoId($id){
		$id = (int) $id;

		$cont = $this->_db->prepare("SELECT distinct c.id, c.nombre, c.telefono, c.encuesta, c.rut, c.comuna, c.region, c.codigo, c.dato1, c.dato2, c.dato3, c.dato4, c.dato5, c.dato6, c.dato7, c.dato8, c.dato9, c.dato10, c.dato11, c.fecha1, c.fecha2, c.fecha3, c.telefono2, c.telefono3, c.telefono4, c.telefono5, c.telefono6, c.telefono7, c.telefono8, c.telefono9, c.telefono10, c.created_at as creado, c.num_carga, c.estado_contacto, ec.nombre as e_contacto, c.estado_llamada, c.modified_at as modificado, ell.nombre as llamada, e.nombre as nom_encuesta, car.usuario_id, u.nombre as usuario FROM contactos c INNER JOIN estado_llamadas ell ON c.estado_llamada = ell.id INNER JOIN encuestas e ON c.encuesta = e.id INNER JOIN cargas car ON c.num_carga = car.id INNER JOIN usuarios u ON car.usuario_id = u.id INNER JOIN estado_contactos ec ON c.estado_contacto = ec.id WHERE c.id = ?");
		$cont->bindParam(1, $id);
		$cont->execute();

		return $cont->fetch();
	}

	//metodo que permite generar contactos por encuesta de manera aleatoria
	public function getContactoEncuesta($encuesta){
		//print_r($encuesta);exit;
		$encuesta = (int) $encuesta;

		$cant_filas = $this->_db->query("SELECT count(id) as filas FROM contactos WHERE encuesta = {$encuesta} AND estado_contacto = 1 AND estado_llamada = 7");
		$filas = $cant_filas->fetch();
		$aleatorio = rand(0, $filas['filas']-1);
		//print_r($aleatorio);exit;

		$cont = $this->_db->prepare("SELECT * FROM contactos WHERE encuesta = ? and estado_contacto = 1 AND estado_llamada = 7 limit $aleatorio, 1");
		$cont->bindParam(1, $encuesta);
		//$cont->bindParam(2, $aleatorio);
		$cont->execute();

		return $cont->fetch();
	}

	#metodo que genera contactos por encuesta y criterios
	public function getContactoEncuestaAndCriterio($encuesta, $criterio){
		#print_r($criterio);exit;
		$encuesta = (int) $encuesta;
		$criterio = (int) $criterio;

		$cant_filas = $this->_db->query("SELECT count(id) as filas FROM contactos WHERE encuesta = {$encuesta} AND criterio = {$criterio} AND estado_contacto = 1 AND estado_llamada = 7");
		$filas = $cant_filas->fetch();
		$aleatorio = rand(0, $filas['filas']-1);
		//print_r($aleatorio);exit;

		$cont = $this->_db->prepare("SELECT * FROM contactos WHERE encuesta = ? AND criterio = ? and estado_contacto = 1 AND estado_llamada = 7 limit $aleatorio, 1");
		$cont->bindParam(1, $encuesta);
		$cont->bindParam(2, $criterio);
		//$cont->bindParam(2, $aleatorio);
		$cont->execute();

		return $cont->fetch();
	}

	#muestra contactos por carga
	public function getContactosCarga($carga){
		$carga = (int) $carga;

		$cont = $this->_db->prepare("SELECT distinct c.id, c.nombre, c.telefono, c.encuesta, c.rut, c.comuna, c.region, c.codigo, c.dato1, c.dato2, c.dato3, c.dato4, c.dato5, c.dato6, c.dato7, c.dato8, c.dato9, c.dato10, c.dato11, c.fecha1, c.fecha2, c.fecha3, c.telefono2, c.telefono3, c.telefono4, c.telefono5, c.telefono6, c.telefono7, c.telefono8, c.telefono9, c.telefono10, c.created_at as creado, c.num_carga, c.estado_contacto, ec.nombre as e_contacto, c.estado_llamada, c.modified_at as modificado, ell.nombre as llamada, e.nombre as nom_encuesta, cr.nombre as criterio FROM contactos c INNER JOIN estado_llamadas ell ON c.estado_llamada = ell.id INNER JOIN encuestas e ON c.encuesta = e.id INNER JOIN estado_contactos ec ON c.estado_contacto = ec.id LEFT JOIN criterios cr ON c.criterio = cr.id WHERE c.num_carga = ?");
		$cont->bindParam(1, $carga);
		$cont->execute();

		return $cont->fetchall();
	}

	#muestra contactos por carga y estado de contacto
	public function getContactosCargaEstadoContacto($carga, $e_contacto){
		$carga = (int) $carga;
		$e_contacto = (int) $e_contacto;

		$cont = $this->_db->prepare("SELECT distinct c.id, c.nombre, c.telefono, c.encuesta, c.rut, c.comuna, c.region, c.codigo, c.dato1, c.dato2, c.dato3, c.dato4, c.dato5, c.dato6, c.dato7, c.dato8, c.dato9, c.dato10, c.dato11, c.fecha1, c.fecha2, c.fecha3, c.telefono2, c.telefono3, c.telefono4, c.telefono5, c.telefono6, c.telefono7, c.telefono8, c.telefono9, c.telefono10, c.created_at as creado, c.num_carga, c.estado_contacto, ec.nombre as e_contacto, c.estado_llamada, c.modified_at as modificado, ell.nombre as llamada, e.nombre as nom_encuesta, cr.nombre as criterio FROM contactos c INNER JOIN estado_llamadas ell ON c.estado_llamada = ell.id INNER JOIN encuestas e ON c.encuesta = e.id INNER JOIN estado_contactos ec ON c.estado_contacto = ec.id LEFT JOIN criterios cr ON c.criterio = cr.id WHERE c.num_carga = ? AND c.estado_contacto = ?");
		$cont->bindParam(1, $carga);
		$cont->bindParam(2, $e_contacto);
		$cont->execute();

		return $cont->fetchall();
	}

	#cuenta contactos por carga
	public function getCountContactosCountCarga($carga){
		$carga = (int) $carga;

		$cont = $this->_db->query("SELECT count(id) as filas FROM contactos WHERE num_carga = {$carga}");
		$filas = $cont->fetch();
		$row = $filas['filas'];

		return $row;
	}

	#cuenta contactos disponibles por carga agrupados por estado de contacto
	public function getCountContactosDisponiblesCarga($carga){
		$carga = (int) $carga;

		$cont = $this->_db->query("SELECT count(c.id) as filas, c.estado_contacto, ec.nombre as estado FROM contactos c INNER JOIN estado_contactos ec ON c.estado_contacto = ec.id WHERE num_carga = {$carga} GROUP BY estado, c.estado_contacto");
		
		return $cont->fetchall();
	}

	#cuenta contactos disponibles de una encuesta agrupados por criterio
	public function getCountDisponiblesEncuestaCriterio($encuesta){
		$encuesta =  (int) $encuesta;

		$cont = $this->_db->prepare("SELECT count(c.id) as filas, cr.nombre as nom_criterio FROM contactos c LEFT JOIN criterios cr ON c.criterio = cr.id WHERE encuesta = ? AND estado_contacto = 1 AND estado_llamada = 7 GROUP BY nom_criterio");
		$cont->bindParam(1, $encuesta);
		$cont->execute();

		return $cont->fetchall();
	}

	#cuenta contactos encuestados por carga
	public function getCountContactosEncuestadosCarga($carga){
		$carga = (int) $carga;

		$cont = $this->_db->query("SELECT count(id) as filas FROM contactos WHERE num_carga = {$carga} AND estado_llamada = 1");
		$filas = $cont->fetch();
		$row = $filas['filas'];
		//print_r($row);exit;
		
		return $row;
	}

	#cuenta encuuestados por encuesta agrupados por criterios
	public function getCounEncuestadosEncuestaCriterios($encuesta){
		$encuesta =  (int) $encuesta;

		$cont = $this->_db->prepare("SELECT count(id) as filas, criterio FROM contactos WHERE encuesta = ? AND estado_llamada = 1 GROUP BY criterio");
		$cont->bindParam(1, $encuesta);
		$cont->execute();

		return $cont->fetchall();
	}

	#cuenta contactos por rango de fecha y encuesta agrupados por ejecutivos
	public function getEncuestadosRango($desde, $hasta, $encuesta){
		//print_r($encuesta);exit;
		$encuesta = (int) $encuesta;

		$cont = $this->_db->prepare("SELECT count(c.id) as filas, u.nombre as ejecutivo FROM contactos c INNER JOIN usuarios u ON c.encuestador_id = u.id WHERE substring(c.modified_at,1,10) BETWEEN ? AND ? AND c.estado_llamada = 1 AND c.encuesta = ? GROUP BY ejecutivo");
		$cont->bindParam(1, $desde);
		$cont->bindParam(2, $hasta);
		$cont->bindParam(3, $encuesta);
		$cont->execute();
		
		return $cont->fetchall();
	}


	#cuenta contactos por rango de fecha y encuesta agrupados por criterio
	public function getEncuestadosRangoCriterio($desde, $hasta, $encuesta){
		$encuesta = (int) $encuesta;

		$cont = $this->_db->prepare("SELECT count(c.id) as filas, cr.nombre as criterio FROM contactos c INNER JOIN criterios cr ON c.criterio = cr.id WHERE substring(c.modified_at,1,10) BETWEEN ? AND ? AND c.estado_llamada = 1 AND c.encuesta = ? GROUP BY criterio");
		$cont->bindParam(1, $desde);
		$cont->bindParam(2, $hasta);
		$cont->bindParam(3, $encuesta);
		$cont->execute();

		return $cont->fetchall();
	}

	#cuenta contactos por rango de fecha y encuesta agrupados por estado de llamadas
	public function getRecorridosRango($desde, $hasta, $encuesta){
		//print_r($encuesta);exit;
		$encuesta = (int) $encuesta;

		$cont = $this->_db->prepare("SELECT count(c.id) as filas, ell.nombre as llamada FROM contactos c INNER JOIN estado_llamadas ell ON c.estado_llamada = ell.id WHERE substring(c.modified_at,1,10) BETWEEN ? AND ? AND c.encuesta = ? GROUP BY llamada");
		$cont->bindParam(1, $desde);
		$cont->bindParam(2, $hasta);
		$cont->bindParam(3, $encuesta);
		$cont->execute();
		
		return $cont->fetchall();
	}

	//consulta numero de encuestados por criterio y rango de fechas
	public function getContactosEncuestadosCriterio($desde, $hasta, $criterio){
		//print_r($criterio);exit;
		$criterio = (int) $criterio;

		$cont = $this->_db->query("SELECT count(id) as filas FROM contactos WHERE substring(modified_at,1,10) BETWEEN '$desde' AND '$hasta' AND estado_llamada = 1 AND criterio = {$criterio}"); 
		$filas = $cont->fetch();
		$row = $filas['filas'];
		//print_r($row);exit;

		return $row;
	}

	//consulta numero de encuestados por encuesta
	public function getContactosEncuestadosEncuesta($desde, $hasta, $encuesta){
		//print_r($encuesta);exit;
		$encuesta = (int) $encuesta;

		$cont = $this->_db->query("SELECT count(id) as filas FROM contactos WHERE substring(modified_at,1,10) BETWEEN '$desde' AND '$hasta' AND estado_llamada = 1 AND encuesta = {$encuesta}"); 
		$filas = $cont->fetch();
		$row = $filas['filas'];
		//print_r($row);exit;

		return $row;
	}

	//busqueda de contactos por telefono1
	public function getContactosTelefono($telefono){
		$telefono = (int) $telefono;

		$cont = $this->_db->prepare("SELECT distinct c.id, c.nombre, c.telefono, c.encuesta, c.rut, c.comuna, c.region, c.codigo, c.dato1, c.dato2, c.dato3, c.dato4, c.dato5, c.dato6, c.dato7, c.dato8, c.dato9, c.dato10, c.dato11, c.fecha1, c.fecha2, c.fecha3, c.telefono2, c.telefono3, c.telefono4, c.telefono5, c.telefono6, c.telefono7, c.telefono8, c.telefono9, c.telefono10, c.created_at as creado, c.num_carga, c.estado_contacto, ec.nombre as e_contacto, c.estado_llamada, c.modified_at as modificado, ell.nombre as llamada, e.nombre as nom_encuesta, car.usuario_id, u.nombre as usuario FROM contactos c INNER JOIN estado_llamadas ell ON c.estado_llamada = ell.id INNER JOIN encuestas e ON c.encuesta = e.id INNER JOIN cargas car ON c.num_carga = car.id INNER JOIN usuarios u ON car.usuario_id = u.id INNER JOIN estado_contactos ec ON c.estado_contacto = ec.id WHERE c.telefono = ?");
		$cont->bindParam(1, $telefono);
		$cont->execute();

		return $cont->fetchall();
	}

	//busqueda de contactos por telefono2
	public function getContactosTelefonoDos($telefono){
		$telefono = (int) $telefono;

		$cont = $this->_db->prepare("SELECT distinct c.id, c.nombre, c.telefono, c.encuesta, c.rut, c.comuna, c.region, c.codigo, c.dato1, c.dato2, c.dato3, c.dato4, c.dato5, c.dato6, c.dato7, c.dato8, c.dato9, c.dato10, c.dato11, c.fecha1, c.fecha2, c.fecha3, c.telefono2, c.telefono3, c.telefono4, c.telefono5, c.telefono6, c.telefono7, c.telefono8, c.telefono9, c.telefono10, c.created_at as creado, c.num_carga, c.estado_contacto, ec.nombre as e_contacto, c.estado_llamada, c.modified_at as modificado, ell.nombre as llamada, e.nombre as nom_encuesta, car.usuario_id, u.nombre as usuario FROM contactos c INNER JOIN estado_llamadas ell ON c.estado_llamada = ell.id INNER JOIN encuestas e ON c.encuesta = e.id INNER JOIN cargas car ON c.num_carga = car.id INNER JOIN usuarios u ON car.usuario_id = u.id INNER JOIN estado_contactos ec ON c.estado_contacto = ec.id WHERE c.telefono2 = ?");
		$cont->bindParam(1, $telefono);
		$cont->execute();

		return $cont->fetchall();
	}

	#muestra contactos por nombre de estado de llamada
	public function getContactosEstadoLlamada($e_llamada){
		//print_r($e_llamada);exit;
		$cont = $this->_db->prepare("SELECT distinct c.id, c.nombre, c.telefono, c.encuesta, c.rut, c.comuna, c.region, c.codigo, c.dato1, c.dato2, c.dato3, c.dato4, c.dato5, c.dato6, c.dato7, c.dato8, c.dato9, c.dato10, c.dato11, c.fecha1, c.fecha2, c.fecha3, c.telefono2, c.telefono3, c.telefono4, c.telefono5, c.telefono6, c.telefono7, c.telefono8, c.telefono9, c.telefono10, c.created_at as creado, c.num_carga, c.estado_contacto, ec.nombre as e_contacto, c.estado_llamada, c.modified_at as modificado, ell.nombre as llamada, e.nombre as nom_encuesta, car.usuario_id, u.nombre as usuario FROM contactos c INNER JOIN estado_llamadas ell ON c.estado_llamada = ell.id INNER JOIN encuestas e ON c.encuesta = e.id INNER JOIN cargas car ON c.num_carga = car.id INNER JOIN usuarios u ON car.usuario_id = u.id INNER JOIN estado_contactos ec ON c.estado_contacto = ec.id WHERE ell.nombre = ?");
		$cont->bindParam(1, $e_llamada);
		$cont->execute();

		return $cont->fetchall();
	}

	//metodos de edicion
	//metodo que modifica el estado de contacto y de llamada desde una encuesta
	public function editContactoContactado($id, $estado_contacto, $llamada, $usuario){
		#print_r($llamada);exit;
		$id = (int) $id;
		$estado_contacto = (int) $estado_contacto;
		$llamada = (int) $llamada;
		$usuario = (int) $usuario;

		$cont = $this->_db->prepare("UPDATE contactos SET estado_contacto = ?, estado_llamada = ?, modified_at = now(), encuestador_id = ? WHERE id = ?");
		$cont->bindParam(1, $estado_contacto);
		$cont->bindParam(2, $llamada);
		$cont->bindParam(3, $usuario);
		$cont->bindParam(4, $id);
		$cont->execute();
	}

	//modifica estado de contacto por carga, activando y desactivando contactos y cargas
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

	#modifica el estado de contacto y de llamadas a partir de la seleccion de un estado de llamadas, por estado de llamadas y carga
	public function editContactosEstadoLlamada($carga, $e_contacto, $llamada, $e_llamada){
		#print_r($e_contacto);exit;
		$carga = (int) $carga;
		$e_contacto = (int) $e_contacto;
		$llamada = (int) $llamada;
		$e_llamada = (int) $e_llamada;

		$cont = $this->_db->prepare("UPDATE contactos SET estado_contacto = ?, estado_llamada = ?, modified_at = now() WHERE num_carga = ? AND estado_llamada = ?");		
		$cont->bindParam(1, $e_contacto);
		$cont->bindParam(2, $llamada);
		$cont->bindParam(3, $carga);
		$cont->bindParam(4, $e_llamada);
		$cont->execute();
	}

	//metodo de creacion
	public function addContactos($nombre, $telefono, $encuesta, $rut, $comuna, $region, $codigo, $dato1, $dato2, $dato3, $dato4, $dato5, $dato6, $dato7, $dato8, $dato9, $dato10, $dato11, $fecha1, $fecha2, $fecha3, $telefono2, $telefono3, $telefono4, $telefono5, $telefono6, $telefono7, $telefono8, $telefono9, $telefono10, $carga, $criterio){
		//$carga = (int) $carga;
		//print_r($carga);exit;
		$cont = $this->_db->prepare("INSERT INTO contactos VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, now(), ?, 1, 7, now(), NULL, ?)");
		$cont->bindParam(1, $nombre);
		$cont->bindParam(2, $telefono);
		$cont->bindParam(3, $encuesta);
		$cont->bindParam(4, $rut);
		$cont->bindParam(5, $comuna);
		$cont->bindParam(6, $region);
		$cont->bindParam(7, $codigo);
		$cont->bindParam(8, $dato1);
		$cont->bindParam(9, $dato2);
		$cont->bindParam(10, $dato3);
		$cont->bindParam(11, $dato4);
		$cont->bindParam(12, $dato5);
		$cont->bindParam(13, $dato6);
		$cont->bindParam(14, $dato7);
		$cont->bindParam(15, $dato8);
		$cont->bindParam(16, $dato9);
		$cont->bindParam(17, $dato10);
		$cont->bindParam(18, $dato11);
		$cont->bindParam(19, $fecha1);
		$cont->bindParam(20, $fecha2);
		$cont->bindParam(21, $fecha3);
		$cont->bindParam(22, $telefono2);
		$cont->bindParam(23, $telefono3);
		$cont->bindParam(24, $telefono4);
		$cont->bindParam(25, $telefono5);
		$cont->bindParam(26, $telefono6);
		$cont->bindParam(27, $telefono7);
		$cont->bindParam(28, $telefono8);
		$cont->bindParam(29, $telefono9);
		$cont->bindParam(30, $telefono10);
		$cont->bindParam(31, $carga);
		$cont->bindParam(32, $criterio);
		$cont->execute();
	}

	//metodo de eliminacion de contactos por carga, cuyos contactos no hayan sido contactados
	public function deleteContactosCarga($carga){
		$carga = (int) $carga;

		$cont = $this->_db->prepare("DELETE FROM contactos WHERE estado_contacto = 1 AND estado_llamada = 7 AND num_carga = ?");
		$cont->bindParam(1, $carga);
		$cont->execute();
	}
}