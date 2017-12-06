<?php

class indexController extends Controller
{
	private $_enlace;
	private $_usuario;
	private $_cliente;
	private $_campaign;
	private $_encuestaUsuario;

	public function __construct(){
		parent::__construct();
		$this->_usuario = $this->loadModel('usuario');
		$this->_cliente = $this->loadModel('cliente');
		$this->_campaign = $this->loadModel('campaign');
		$this->_encuestaUsuario = $this->loadModel('encuestausuario');
	}

	public function index()
	{
		if (!Session::get('autenticado')) {
			$this->redireccionar('usuarios/login');
		}

		$this->_view->assign('titulo', 'Bienvenido a Meta Solutions');
		$this->_view->assign('saludo', $this->_usuario->getUsuarioId(Session::get('id_usuario')));
		$this->_view->assign('clientes', $this->_cliente->getClientes());
		$this->_view->assign('campaign', $this->_campaign->getCampaign());
		$this->_view->assign('encuestas', $this->_encuestaUsuario->getEncuestaUsuarioPorUsuario(Session::get('id_usuario')));
		$this->_view->assign('ejecutivos', $this->_usuario->getUsuariosEjecutivos());
		
		$this->_view->renderizar('index');
	}
}