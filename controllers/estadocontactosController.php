<?php 
/**
* 
*/
class estadocontactosController extends Controller
{
	private $_estadoContacto;

	public function __construct(){
		parent::__construct();
		$this->_estadoContacto = $this->loadModel('estadocontacto');
	}

	public function index(){

	}

	public function add(){
		$this->verificarSession();
		$this->verificarRolAdmin();

		$this->_view->assign('titulo', 'APP::Estado de Contactos');
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar un nombre de estado de contacto');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_estadoContacto->getEstadoContactoNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'El estado de contacto ya existe... intente con otro');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_estadoContacto->addEstadoContacto($this->getAlphaNum('nombre'));
			$this->redireccionar();
		}
		
		$this->_view->renderizar('add');
	}
}