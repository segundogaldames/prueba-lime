<?php 
/**
* 
*/
class agendamientoContactoModel extends Model
{
	
	public function __construct(){
		parent::__construct();
	}

	#lista todos los agendamientos
	public function getAgendamientosContactos(){
		$age = $this->_db->query("SELECT DISTINCT ag.id, ag.contacto_id, ag.fecha_agenda, ag.hora_agenda, ag.created_at as creado, ag.status, ag.encuesta_id, u.nombre as ejecutivo, c.nombre as contacto, c.modified_at as modificado, ell.nombre as llamada, e.nombre as encuesta FROM agendamientos_contactos ag INNER JOIN usuarios u ON ag.ejecutivo_id = u.id INNER JOIN contactos c ON ag.contacto_id = c.id INNER JOIN estado_llamadas ell ON c.estado_llamada = ell.id INNER JOIN encuestas e ON ag.encuesta_id = e.id ORDER BY ag.fecha_agenda");

		return $age->fetchall();
	}

	#mostrar agendamientos por id
	public function getAgendamientoContactoId($id){
		$id = (int) $id;

		$age = $this->_db->prepare("SELECT DISTINCT ag.id, ag.contacto_id, ag.fecha_agenda, ag.hora_agenda, ag.created_at as creado, ag.status, ag.encuesta_id, u.nombre as ejecutivo, c.nombre as contacto, c.modified_at as modificado, ell.nombre as llamada, e.nombre as encuesta FROM agendamientos_contactos ag INNER JOIN usuarios u ON ag.ejecutivo_id = u.id INNER JOIN contactos c ON ag.contacto_id = c.id INNER JOIN estado_llamadas ell ON c.estado_llamada = ell.id INNER JOIN encuestas e ON ag.encuesta_id = e.id WHERE ag.id = ?");
		$age->bindParam(1, $id);
		$age->execute();

		return $age->fetch();
	}

	#muestra los agendamientos por usuario
	public function getAgendamientoUsuario($usuario){
		$usuario = (int) $usuario;

		$age = $this->_db->prepare("SELECT DISTINCT ag.id, ag.contacto_id, ag.fecha_agenda, ag.hora_agenda, ag.created_at as creado, ag.status,ag.encuesta_id, u.nombre as ejecutivo, c.nombre as contacto, c.modified_at as modificado, ell.nombre as llamada, e.nombre as encuesta FROM agendamientos_contactos ag INNER JOIN usuarios u ON ag.ejecutivo_id = u.id INNER JOIN contactos c ON ag.contacto_id = c.id INNER JOIN estado_llamadas ell ON c.estado_llamada = ell.id INNER JOIN encuestas e ON ag.encuesta_id = e.id WHERE ag.ejecutivo_id = ? AND ag.status = 1 ORDER BY ag.fecha_agenda");
		$age->bindParam(1, $usuario);
		$age->execute();

		return $age->fetchall();
	}

	public function addAgendamiento($ejecutivo, $contacto, $fecha, $hora, $encuesta){
		$ejecutivo = (int) $ejecutivo;
		$contacto = (int) $contacto;
		$encuesta = (int) $encuesta;

		$age = $this->_db->prepare("INSERT INTO agendamientos_contactos VALUES(null, ?, ?, ?, ?, now(), now(), 1, ?)");
		$age->bindParam(1, $ejecutivo);
		$age->bindParam(2, $contacto);
		$age->bindParam(3, $fecha);
		$age->bindParam(4, $hora);
		$age->bindParam(5, $encuesta);
		$age->execute();
	}

	#edita un agendamiento
	public function editAgendamientoContacto($id, $ejecutivo, $fecha, $hora, $status){
		#print_r($id);exit;
		$id = (int) $id;
		$ejecutivo = (int) $ejecutivo;
		$status = (int) $status;

		$age = $this->_db->prepare("UPDATE agendamientos_contactos SET ejecutivo_id = ?, fecha_agenda = ?, hora_agenda = ?, modified_at = now(), status = ? WHERE id = ?");
		$age->bindParam(1, $ejecutivo);
		$age->bindParam(2, $fecha);
		$age->bindParam(3, $hora);
		$age->bindParam(4, $status);
		$age->bindParam(5, $id);
		$age->execute();
	}

	#cambia el status del agendamiento cuando se produce el contacto
	public function editStatus($id){
		$id = (int) $id;

		$age = $this->_db->prepare("UPDATE agendamientos_contactos SET status = 2 WHERE id = ?");
		$age->bindParam(1, $id);
		$age->execute();
	}

	#elimina un agendamiento
	public function deleteAgendamientoContacto($id){
		$id = (int) $id;

		$age = $this->_db->prepare("DELETE FROM agendamientos WHERE id = ?");
		$age->bindParam(1, $id);
		$age->execute();
	}
}
