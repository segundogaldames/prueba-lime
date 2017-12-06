<?php 
/**
* 
*/
class encuestasusuariosController extends Controller
{
	private $_encuesta;
	private $_usuario;
	private $_encuestaUsuario;
	
	public function __construct(){
		parent::__construct();
		$this->_encuesta = $this->loadModel('encuesta');
		$this->_usuario = $this->loadModel('usuario');
		$this->_encuestaUsuario = $this->loadModel('encuestausuario');
	}

	public function index(){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		$this->_view->assign('titulo', 'Encuestas Usuarios');
		$this->_view->assign('encuestasUsuarios', $this->_encuestaUsuario->getEncuestasUsuarios());
		$this->_view->renderizar('index');
	}

	public function add(){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		$this->_view->assign('titulo', 'Nueva Encuesta Usuario');
		$this->_view->assign('encuestas', $this->_encuesta->getEncuestas());
		$this->_view->assign('ejecutivos', $this->_usuario->getUsuariosEjecutivos());

		if ($this->getInt('enviar') == 1) {
			if (!$this->getInt('encuesta')) {
				$this->_view->assign('_error', 'Debe seleccionar una encuesta');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('usuario')) {
				$this->_view->assign('_error', 'Debe seleccionar un usuario');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_encuestaUsuario->getEncuestaUsuarioDuplicate($this->getInt('encuesta'), $this->getInt('usuario'))) {
				$this->_view->assign('_error', 'La asociación encuesta y usuario ya existen...');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_encuestaUsuario->addEncuestaUsuario(
				$this->getInt('encuesta'), 
				$this->getInt('usuario')
			);

			$this->redireccionar('encuestasusuarios');
		}

		$this->_view->renderizar('add');
	}
}