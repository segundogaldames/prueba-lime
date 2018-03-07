<?php 
/**
* 
*/
class encuestassupervisoresController extends Controller
{
	private $_encuestaSupervisor;
	private $_usuario;
	
	public function __construct(){
		parent::__construct();
		$this->_encuestaSupervisor = $this->loadModel('encuestasupervisor');
		$this->_usuario = $this->loadModel('usuario');
	}

	public function index(){
		$this->verificarSession();
		$this->verificarRolAdmin();

		$this->_view->assign('titulo', 'APP::Supervisores');
		$this->_view->assign('supervisores', $this->_encuestaSupervisor->getEncuestasSupervisores());
		$this->_view->renderizar('index');
	}

	public function add($encuesta = null){
		$this->verificarSession();
		$this->verificarRolAdmin();

		$this->_view->assign('titulo', 'Agregar Supervisores');
		$this->_view->assign('usuarios', $this->_usuario->getUsuariosSupervisores());
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getInt('usuario')) {
				$this->_view->assign('_error', 'Debe seleccionar un supervisor para esta encuesta');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_encuestaSupervisor->getEncuestaSupervisor($this->filtrarInt($encuesta), $this->getInt('usuario'))) {
				$this->_view->assign('_error', 'El usuario seleccionado ya está asignado a esta encuesta... Intente con otro');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_encuestaSupervisor->addEncuestaSupervisor($this->filtrarInt($encuesta), $this->getInt('usuario'));
			$this->redireccionar('encuestassupervisores');
		}

		$this->_view->renderizar('add');
	}
}