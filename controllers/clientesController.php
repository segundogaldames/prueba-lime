<?php
/**
* 
*/
class clientesController extends Controller
{
	//Acceso restringido a login
	//Permisos Supervisor: crear y ver 
	private $_cliente;
	private $_campaign;
	
	public function __construct()
	{
		parent::__construct();
		$this->_cliente = $this->loadModel('cliente');
		$this->_campaign = $this->loadModel('campaign');
	}

	public function index($pagina = false){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		if ($pagina) {
			$pagina = $this->filtrarInt($pagina);
		}else{
			$pagina = false;
		}

		$this->getLibrary('paginador');
		$paginador = new Paginador();

		$this->_view->assign('titulo', 'Clientes');
		$this->_view->assign('clientes', $paginador->paginar($this->_cliente->getClientes(), $pagina));
		$this->_view->assign('paginacion', $paginador->getView('prueba', 'clientes/index'));
		$this->_view->renderizar('index');
	}

	public function add(){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		$this->_view->assign('titulo', 'Nuevo Cliente');
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_cliente->getClienteNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'El cliente ya existe...');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_cliente->addCliente($this->getAlphaNum('nombre'));
			$this->redireccionar('clientes');
		}
		$this->_view->renderizar('add');
	}

	public function edit($id =null){
		$this->verificarSession();
		$this->verificarRolAdmin();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Cliente');
		$this->_view->assign('dato', $this->_cliente->getClienteId($this->filtrarInt($id)));
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_cliente->editCliente(
				$this->filtrarInt($id), 
				$this->getAlphaNum('nombre')
			);

			$this->redireccionar('clientes');
		}
		$this->_view->renderizar('edit');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Cliente');
		$this->_view->assign('cliente', $this->_cliente->getClienteId($this->filtrarInt($id)));
		$this->_view->assign('campaign', $this->_campaign->getCampaignCliente($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarRolAdmin();
		$this->verificarParams($id);

		$this->_cliente->deleteCliente($this->filtrarInt($id));
		$this->redireccionar('clientes');
	}

//***************************************************************************************
	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('clientes');
		}
	}
}