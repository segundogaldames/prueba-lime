<?php 
/**
* 
*/
class agendamientoContactoModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	public function addAgendamiento($ejecutivo, $contacto, $fecha, $hora){
		$ejecutivo = (int) $ejecutivo;
		$contacto = (int) $contacto;

		$age = $this->_db->prepare("INSERT INTO agendamientos_contactos VALUES(null, ?, ?, ?, ?, now())");
		$age->bindParam(1, $ejecutivo);
		$age->bindParam(2, $contacto);
		$age->bindParam(3, $fecha);
		$age->bindParam(4, $hora);
		$age->execute();
	}
}
