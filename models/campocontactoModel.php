<?php 
/**
* 
*/
class campocontactoModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function getCamposContacto(){
		$camp = $this->_db->query("SELECT DISTINCT cc.id, cc.nombre, cc.telefono, cc.rut, cc.comuna, cc.region, cc.codigo, cc.dato1, cc.dato2, cc.dato3, cc.dato4, cc.dato4, cc.dato5, cc.dato6, cc.dato7, cc.dato8, cc.dato9, cc.dato10, cc.dato11, cc.fecha1, cc.fecha2, cc.fecha3, cc.telefono2, cc.telefono3, cc.telefono4, cc.telefono5, cc.telefono6, cc.telefono7, cc.telefono8, cc.telefono9, cc.telefono10, cc.encuesta_id, e.nombre as encuesta FROM campos_contacto cc INNER JOIN encuestas e ON cc.encuesta_id = e.id");

		return $camp->fetchall();
	}

	public function getCampoContactoId($id){
		$id = (int) $id;

		$camp = $this->_db->prepare("SELECT DISTINCT cc.id, cc.nombre, cc.telefono, cc.rut, cc.comuna, cc.region, cc.codigo, cc.dato1, cc.dato2, cc.dato3, cc.dato4, cc.dato4, cc.dato5, cc.dato6, cc.dato7, cc.dato8, cc.dato9, cc.dato10, cc.dato11, cc.fecha1, cc.fecha2, cc.fecha3, cc.telefono2, cc.telefono3, cc.telefono4, cc.telefono5, cc.telefono6, cc.telefono7, cc.telefono8, cc.telefono9, cc.telefono10, cc.encuesta_id, e.nombre as encuesta FROM campos_contacto cc INNER JOIN encuestas e ON cc.encuesta_id = e.id WHERE cc.id = ?");
		$camp->bindParam(1, $id);
		$camp->execute();

		return $camp->fetch();
	}

	public function getCamposContactosEncuesta($encuesta){
		$encuesta = (int) $encuesta;

		$cam = $this->_db->prepare("SELECT DISTINCT * FROM campos_contacto WHERE encuesta_id =?");
		$cam->bindParam(1, $encuesta);
		$cam->execute();

		return $cam->fetch();
	}

	public function addCampoContacto($nombre, $telefono, $rut, $comuna, $region, $codigo, $dato1, $dato2, $dato3, $dato4, $dato5, $dato6, $dato7, $dato8, $dato9, $dato10, $dato11, $fecha1, $fecha2, $fecha3, $telefono2, $telefono3, $telefono4, $telefono5, $telefono6, $telefono7, $telefono8, $telefono9, $telefono10, $encuesta){
		//print_r($nombre);exit;
		$camp = $this->_db->prepare("INSERT INTO campos_contacto VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$camp->bindParam(1, $nombre);
		$camp->bindParam(2, $telefono);
		$camp->bindParam(3, $rut);
		$camp->bindParam(4, $comuna);
		$camp->bindParam(5, $region);
		$camp->bindParam(6, $codigo);
		$camp->bindParam(7, $dato1);
		$camp->bindParam(8, $dato2);
		$camp->bindParam(9, $dato3);
		$camp->bindParam(10, $dato4);
		$camp->bindParam(11, $dato5);
		$camp->bindParam(12, $dato6);
		$camp->bindParam(13, $dato7);
		$camp->bindParam(14, $dato8);
		$camp->bindParam(15, $dato9);
		$camp->bindParam(16, $dato10);
		$camp->bindParam(17, $dato11);
		$camp->bindParam(18, $fecha1);
		$camp->bindParam(19, $fecha2);
		$camp->bindParam(20, $fecha3);
		$camp->bindParam(21, $telefono2);
		$camp->bindParam(22, $telefono3);
		$camp->bindParam(23, $telefono4);
		$camp->bindParam(24, $telefono5);
		$camp->bindParam(25, $telefono6);
		$camp->bindParam(26, $telefono7);
		$camp->bindParam(27, $telefono8);
		$camp->bindParam(28, $telefono9);
		$camp->bindParam(29, $telefono10);
		$camp->bindParam(30, $encuesta);
		$camp->execute();
	}

	public function editCampoContacto($id, $nombre, $telefono, $rut, $comuna, $region, $codigo, $dato1, $dato2, $dato3, $dato4, $dato5, $dato6, $dato7, $dato8, $dato9, $dato10, $dato11, $fecha1, $fecha2, $fecha3, $telefono2, $telefono3, $telefono4, $telefono5, $telefono6, $telefono7, $telefono8, $telefono9, $telefono10){
		$id = (int) $id;

		$camp = $this->_db->prepare("UPDATE campos_contacto SET nombre = ?, telefono = ?, rut = ?, comuna = ?, region = ?, codigo = ?, dato1 = ?, dato2 = ?, dato3 = ?, dato4 = ?, dato5 = ?, dato6 = ?, dato7 = ?, dato8 = ?, dato9 = ?, dato10 = ?, dato11 = ?, fecha1 = ?, fecha2 = ?, fecha3 = ?, telefono2 = ?, telefono3 = ?, telefono4 = ?, telefono5 = ?, telefono6 = ?, telefono7
			 = ?, telefono8 = ?, telefono9 = ?, telefono10 = ? WHERE id = ?");
		$camp->bindParam(1, $nombre);
		$camp->bindParam(2, $telefono);
		$camp->bindParam(3, $rut);
		$camp->bindParam(4, $comuna);
		$camp->bindParam(5, $region);
		$camp->bindParam(6, $codigo);
		$camp->bindParam(7, $dato1);
		$camp->bindParam(8, $dato2);
		$camp->bindParam(9, $dato3);
		$camp->bindParam(10, $dato4);
		$camp->bindParam(11, $dato5);
		$camp->bindParam(12, $dato6);
		$camp->bindParam(13, $dato7);
		$camp->bindParam(14, $dato8);
		$camp->bindParam(15, $dato9);
		$camp->bindParam(16, $dato10);
		$camp->bindParam(17, $dato11);
		$camp->bindParam(18, $fecha1);
		$camp->bindParam(19, $fecha2);
		$camp->bindParam(20, $fecha3);
		$camp->bindParam(21, $telefono2);
		$camp->bindParam(22, $telefono3);
		$camp->bindParam(23, $telefono4);
		$camp->bindParam(24, $telefono5);
		$camp->bindParam(25, $telefono6);
		$camp->bindParam(26, $telefono7);
		$camp->bindParam(27, $telefono8);
		$camp->bindParam(28, $telefono9);
		$camp->bindParam(29, $telefono10);
		$camp->bindParam(30, $id);
		$camp->execute();
	}
}