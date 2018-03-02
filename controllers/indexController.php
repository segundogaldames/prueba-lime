<?php

class indexController extends Controller
{
	//Restringido a login
	private $_enlace;
	private $_usuario;
	private $_cliente;
	private $_campaign;
	private $_encuestaUsuario;
	private $_encuesta;
	private $_contacto;

	public function __construct(){
		parent::__construct();
		$this->_usuario = $this->loadModel('usuario');
		$this->_cliente = $this->loadModel('cliente');
		$this->_campaign = $this->loadModel('campaign');
		$this->_encuestaUsuario = $this->loadModel('encuestausuario');
		$this->_encuesta = $this->loadModel('encuesta');
		$this->_contacto = $this->loadModel('contacto');
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
		$this->_view->assign('enc_estadistica', $this->_encuesta->getEncuestas());
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			//print_r($_POST);
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('desde')) {
				$this->_view->assign('_error', 'Debe seleccionar una fecha de inicio');
				$this->_view->renderizar('index');
				exit;
			}

			if (!$this->getSql('hasta')) {
				$this->_view->assign('_error', 'Debe seleccionar una fecha de fin');
				$this->_view->renderizar('index');
				exit;
			}

			if (!$this->getInt('encuesta')) {
				$this->_view->assign('_error', 'Debe seleccionar una encuesta');
				$this->_view->renderizar('index');
				exit;
			}

			$row = $this->_contacto->getRecorridosRango(
				$this->getSql('desde'), 
				$this->getSql('hasta'), 
				$this->getInt('encuesta')
			);

			$this->_view->assign('enc_nombre', $this->_encuesta->getEncuestaId($this->getInt('encuesta')));

			if ($row) {
				$this->_view->assign('recorridos', $row);
			}
			
		}
		
		$this->_view->renderizar('index');
	}
}