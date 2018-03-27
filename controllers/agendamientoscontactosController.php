<?php 
/**
* 
*/
class agendamientoscontactosController extends Controller
{
	private $_agendamientoContacto;
	private $_contacto;
	private $_usuario;

	public function __construct(){
		parent::__construct();
		$this->_agendamientoContacto = $this->loadModel('agendamientoContacto');
		$this->_contacto = $this->loadModel('contacto');
		$this->_usuario = $this->loadModel('usuario');
	}

	public function index(){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		$this->_view->assign('titulo', 'Agendamientos Contactos');
		$this->_view->assign('agendamientos', $this->_agendamientoContacto->getAgendamientosContactos());

		$this->_view->renderizar('index');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Agendamiento');
		$this->_view->assign('dato', $this->_agendamientoContacto->getAgendamientoContactoId($this->filtrarInt($id)));
		$this->_view->assign('ejecutivos', $this->_usuario->getUsuariosEjecutivos());
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			#print_r($_POST);exit;
			if(!$this->getInt('ejecutivo')){
				$this->_view->assign('_error', 'Seleccione un ejecutivo');
				$this->_view->renderizar('edit');
				exit;
			}

			if(!$this->getSql('fecha')){
				$this->_view->assign('_error', 'Ingrese una fecha');
				$this->_view->renderizar('edit');
				exit;
			}

			if(!$this->getSql('hora')){
				$this->_view->assign('_error', 'Ingrese una hora');
				$this->_view->renderizar('edit');
				exit;
			}

			if(!$this->getInt('status')){
				$this->_view->assign('_error', 'Seleccione un status');
				$this->_view->renderizar('edit');
				exit;
			}

			$this->_agendamientoContacto->editAgendamientoContacto(
				$this->filtrarInt($id), 
				$this->getInt('ejecutivo'), 
				$this->getSql('fecha'), 
				$this->getSql('hora'), 
				$this->getInt('status')
			);

			$this->redireccionar('agendamientoscontactos');
		}

		$this->_view->renderizar('edit');
	}

	#########################################################################
	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('agendamientoscontactos');
		}

		if (!$this->_agendamientoContacto->getAgendamientoContactoId($this->filtrarInt($id))) {
			$this->redireccionar('agendamientoscontactos');
		}
	}
}