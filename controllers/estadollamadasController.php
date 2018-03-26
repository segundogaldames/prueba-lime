<?php 
/**
* 
*/
class estadollamadasController extends Controller
{
	//Restringido a login
	private $_estadollamadas;
	private $_estadoContacto;
	
	public function __construct(){
		parent::__construct();
		$this->_estadollamadas = $this->loadModel('estadollamada');
		$this->_estadoContacto = $this->loadModel('estadocontacto');
	}

	public function index(){
		$this->verificarSession();
		$this->verificarRolAdmin();

		$this->_view->assign('titulo', 'APP::Estado Llamadas');
		$this->_view->assign('estado_llamadas', $this->_estadollamadas->getEstadoLlamadas());
		$this->_view->renderizar('index');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarRolAdmin();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Estado de Llamada');
		$this->_view->assign('dato', $this->_estadollamadas->getEstadoLlamadaId($this->filtrarInt($id)));
		$this->_view->assign('estado_contactos', $this->_estadoContacto->getEstadoContactos());
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			
			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre de estado de llamada');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('est_contacto')) {
				$this->_view->assign('_error', 'Debe seleccionar el estado de contacto');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_estadollamadas->editEstadoLlamada(
				$this->filtrarInt($id),
				$this->getAlphaNum('nombre'), 
				$this->getInt('est_contacto')
			);

			$this->redireccionar('estadollamadas');
		}

		$this->_view->renderizar('edit');
	}

	public function add(){
		$this->verificarSession();
		$this->verificarRolAdmin();

		$this->_view->assign('titulo', 'Agregar Estado Llamadas');
		$this->_view->assign('estado_contacto', $this->_estadoContacto->getEstadoContactos());
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre de estado de llamada');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('est_contacto')) {
				$this->_view->assign('_error', 'Debe seleccionar el estado de contacto');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_estadollamadas->getEstadoLlamadaNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'El estado de llamada ingresado ya existe... intente con otro');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_estadollamadas->addEstadoLlamada(
				$this->getAlphaNum('nombre'),
				$this->getInt('est_contacto')
			);

			$this->redireccionar('estadollamadas');
		}
		$this->_view->renderizar('add');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('estadollamadas');
		}

		if (!$this->_estadollamadas->getEstadoLlamadaId($this->filtrarInt($id))) {
			$this->redireccionar('estadollamadas');
		}
	}
}