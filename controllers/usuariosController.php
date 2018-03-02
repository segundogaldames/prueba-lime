<?php

/**
* 
*/
class usuariosController extends Controller
{
	//Restringido a login
	//Permisos supervisor: ver, editar y crear
	//Todos pueden usar login y cerrar
	private $_usuario;
	private $_role;
	private $_encuestaUsuario;

	public function __construct(){
		parent::__construct();
		$this->_usuario = $this->loadModel('usuario');
		$this->_role = $this->loadModel('role');
		$this->_encuestaUsuario = $this->loadModel('encuestausuario');
	}

	public function index(){
		$this->verificarSession();
		$this->verificarRolAdmin();

		$this->_view->assign('titulo', 'Usuarios');
		$this->_view->assign('usuarios', $this->_usuario->getUsuarios());
		$this->_view->renderizar('index');
	}

	public function login(){
		if (Session::get('autenticado')) {
			$this->redireccionar('index');
		}

		$this->_view->assign('titulo', 'Login');
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			if (!$this->getPostParam('email')) {
				$this->_view->assign('_error', 'Debe ingresar correo electrónico');
				$this->_view->renderizar('login');
				exit;
			}

			if (!$this->validarEmail($this->getPostParam('email'))) {
				$this->_view->assign('_error', 'El correo electrónico no es válido');
				$this->_view->renderizar('login');
				exit;
			}

			if (!$this->getSql('clave')) {
				$this->_view->assign('_error', 'Debe ingresar un password');
				$this->_view->renderizar('login');
				exit;
			}

			$row = $this->_usuario->login($this->getPostParam('email'), $this->getSql('clave'));

			if (!$row) {
				$this->_view->assign('_error', 'El usuario o la clave no son válidos');
				$this->_view->renderizar('login');
				exit;
			}

			Session::set('autenticado', true);
			Session::set('usuario', $row['nombre']); 
			Session::set('id_usuario', $row['id']); 
			Session::set('role_id', $row['role_id']);
			Session::set('tiempo', time()); 
			$this->redireccionar('index');
		}

		$this->_view->renderizar('login');
	}

	public function cerrar(){
		Session::destroy();
		$this->redireccionar();
	}

	public function add(){
		$this->verificarSession();
		$this->verificarRolAdmin();

		$this->_view->assign('titulo', 'Nuevo Usuario');
		$this->_view->assign('roles', $this->_role->getRoles());
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre');
				$this->_view->renderizar('add');
				exit;	
			}

			if (!$this->getPostParam('email')) {
				$this->_view->assign('_error', 'Debe ingresar el correo electrónico');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->validarEmail($this->getPostParam('email'))) {
				$this->_view->assign('_error', 'El correo electrónico ingresado no es válido');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_usuario->getUsuarioEmail($this->getPostParam('email'))) {
				$this->_view->assign('_error', 'El correo electrónico ingresado ya existe');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('role')) {
				$this->_view->assign('_error', 'Debe asignar un rol');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getSql('clave')) {
				$this->_view->assign('_error', 'Debe ingresar un password');
				$this->_view->renderizar('add');
				exit;
			}

			if (strlen($this->getSql('clave')) < 8) {
				$this->_view->assign('_error', 'El password debe contener al menos 8 caracteres');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getSql('reclave')) {
				$this->_view->assign('_error', 'Debe confirmar el password');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->getSql('reclave') != $this->getSql('clave')) {
				$this->_view->assign('_error', 'El password no coincide');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_usuario->addUsuario(
				$this->getAlphaNum('nombre'), 
				$this->getPostParam('email'), 
				$this->getSql('clave'), 
				$this->getInt('role')
			);

			$this->redireccionar('usuarios');
		}

		$this->_view->renderizar('add');
	}

	public function addEjecutivos(){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		$this->_view->assign('titulo', 'Nuevo Usuario');
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre');
				$this->_view->renderizar('addEjecutivos');
				exit;	
			}

			if (!$this->getPostParam('email')) {
				$this->_view->assign('_error', 'Debe ingresar el correo electrónico');
				$this->_view->renderizar('addEjecutivos');
				exit;
			}

			if (!$this->validarEmail($this->getPostParam('email'))) {
				$this->_view->assign('_error', 'El correo electrónico ingresado no es válido');
				$this->_view->renderizar('addEjecutivos');
				exit;
			}

			if ($this->_usuario->getUsuarioEmail($this->getPostParam('email'))) {
				$this->_view->assign('_error', 'El correo electrónico ingresado ya existe');
				$this->_view->renderizar('addEjecutivos');
				exit;
			}

			if (!$this->getSql('clave')) {
				$this->_view->assign('_error', 'Debe ingresar un password');
				$this->_view->renderizar('addEjecutivos');
				exit;
			}

			if (strlen($this->getSql('clave')) < 8) {
				$this->_view->assign('_error', 'El password debe contener al menos 8 caracteres');
				$this->_view->renderizar('addEjecutivos');
				exit;
			}

			if (!$this->getSql('reclave')) {
				$this->_view->assign('_error', 'Debe confirmar el password');
				$this->_view->renderizar('addEjecutivos');
				exit;
			}

			if ($this->getSql('reclave') != $this->getSql('clave')) {
				$this->_view->assign('_error', 'El password no coincide');
				$this->_view->renderizar('addEjecutivos');
				exit;
			}
			$role = 2;

			$this->_usuario->addUsuario(
				$this->getAlphaNum('nombre'), 
				$this->getPostParam('email'), 
				$this->getSql('clave'), 
				$role
			);

			$this->redireccionar('usuarios/ejecutivos');
		}

		$this->_view->renderizar('addEjecutivos');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Usuario');
		$this->_view->assign('usuario', $this->_usuario->getUsuarioId($this->filtrarInt($id)));
		$this->_view->assign('usuarioEncuesta', $this->_encuestaUsuario->getEncuestaUsuarioPorUsuario($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function ejecutivos(){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		$this->_view->assign('titulo', 'APP::Ejecutivos');
		$this->_view->assign('ejecutivos', $this->_usuario->getUsuariosEjecutivos());
		$this->_view->renderizar('ejecutivos');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Usuario');
		$this->_view->assign('dato', $this->_usuario->getUsuarioId($this->filtrarInt($id)));
		$this->_view->assign('roles', $this->_role->getRoles());
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre');
				$this->_view->renderizar('add');
				exit;	
			}

			if (!$this->getInt('role')) {
				$this->_view->assign('_error', 'Debe asignar un rol');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_usuario->editUsuario(
				$this->filtrarInt($id),
				$this->getAlphaNum('nombre'),
				$this->getInt('role')
			);

			$this->redireccionar('usuarios');
		}

		$this->_view->renderizar('edit');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarRolAdmin();
		$this->verificarParams($id);

		$this->_usuario->deleteUsuario($this->filtrarInt($id));
		$this->redireccionar('usuarios');
	}

	//**********************************************************************

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('usuarios');
		}

		if (!$this->_usuario->getUsuarioId($this->filtrarInt($id))) {
			$this->redireccionar('usuarios');
		}
	}
}