<?php 
/**
* 
*/
class estadollamadasController extends Controller
{
	private $_estadollamadas;
	
	public function __construct(){
		parent::__construct();
		$this->_estadollamadas = $this->loadModel('estadollamada');
	}

	public function index(){
		$this->verificarSession();
		$this->verificarRolAdmin();

		$this->_view->assign('titulo', 'APP::Estado Llamadas');
		$this->_view->assign('estado_llamadas', $this->_estadollamadas->getEstadoLlamadas());
		$this->_view->renderizar('index');
	}

	public function add(){
		$this->verificarSession();
		$this->verificarRolAdmin();

		$this->_view->assign('titulo', 'Agregar Estado Llamadas');
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre de estado de llamada');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_estadollamadas->getEstadoLlamadaNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'El estado de llamada ingresado ya existe... intente con otro');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_estadollamadas->addEstadoLlamada(
				$this->getAlphaNum('nombre')
			);
			$this->redireccionar('estadollamadas');
		}
		$this->_view->renderizar('add');
	}
}