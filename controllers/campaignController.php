<?php
/**
* 
*/
class campaignController extends Controller
{
	//restringido a usuarios logueados
	//Permisos Supervisor: ver, crear y editar 
	private $_campaign;
	private $_cliente;
	private $_encuesta;
	
	public function __construct(){
		parent::__construct();
		$this->_campaign = $this->loadModel('campaign');
		$this->_cliente = $this->loadModel('cliente');
		$this->_encuesta = $this->loadModel('encuesta');
	}

	public function index(){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		$this->_view->assign('titulo', 'Campañas');
		$this->_view->assign('campaign', $this->_campaign->getCampaign());
		$this->_view->renderizar('index');
	}

	public function add(){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		$this->_view->assign('titulo', 'Nueva Campaña');
		$this->_view->assign('clientes', $this->_cliente->getClientes());
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('cliente')) {
				$this->_view->assign('_error', 'Debe seleccionar un cliente');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_campaign->getCampaignNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'La campaña ingresada ya existe...');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_campaign->addCampaign(
				$this->getAlphaNum('nombre'), 
				$this->getInt('cliente'), 
				$this->getAlphaNum('vici')
			);

			$this->redireccionar('campaign');
		}

		$this->_view->renderizar('add');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Campaña');
		$this->_view->assign('campaign', $this->_campaign->getCampaignId($this->filtrarInt($id)));
		$this->_view->assign('encuestas', $this->_encuesta->getEncuestasCampaign($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Campaña');
		$this->_view->assign('dato', $this->_campaign->getCampaignId($this->filtrarInt($id)));
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('cliente')) {
				$this->_view->assign('_error', 'Debe seleccionar un cliente');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_campaign->editCampaign(
				$this->filtrarInt($id), 
				$this->getAlphaNum('nombre'), 
				$this->getInt('cliente'), 
				$this->getAlphaNum('vici')
			);

			$this->redireccionar('campaign');
		}

		$this->_view->renderizar('edit');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarRolAdmin();
		$this->verificarParams($id);

		$this->_campaign->deleteCampaign($this->filtrarInt($id));
		$this->redireccionar('campaign');
	}

	//*******************************************************************************************
	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('campaign');
		}

		if (!$this->_campaign->getCampaignId($this->filtrarInt($id))) {
			$this->redireccionar('campaign');
		}
	}
}