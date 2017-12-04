<?php

class indexController extends Controller
{
	private $_enlace;
	private $_usuario;
	private $_cliente;

	public function __construct(){
		parent::__construct();
		$this->_usuario = $this->loadModel('usuario');
		$this->_cliente = $this->loadModel('cliente');
	}

	public function index()
	{
		if (!Session::get('autenticado')) {
			$this->redireccionar('usuarios/login');
		}

		$this->_view->assign('titulo', 'Bienvenido a Meta Solutions');
		$this->_view->assign('saludo', $this->_usuario->getUsuarioId(Session::get('id_usuario')));
		$this->_view->assign('clientes', $this->_cliente->getClientes());
		
		$this->_view->renderizar('index');
	}
}