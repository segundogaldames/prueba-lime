<?php
/**
* 
*/
class rolesController extends Controller
{
	//Restringido a login
	private $_role;
	
	public function __construct(){
		parent::__construct();
		$this->_role = $this->loadModel('role');
	}

	public function index(){
		$this->verificarSession();
		$this->verificarRolAdmin();
		

		$this->_view->assign('titulo', 'Roles');
		$this->_view->assign('roles', $this->_role->getRoles());
		$this->_view->renderizar('index');
	}

	public function add(){
		$this->verificarSession();
		$this->verificarRolAdmin();

		$this->_view->assign('titulo', 'Nuevo Rol');
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el rol');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_role->getRoleNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'El rol ingresado ya existe...');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_role->addRole($this->getAlphaNum('nombre'));
			$this->redireccionar('roles');
		}

		$this->_view->renderizar('add');
	}
}