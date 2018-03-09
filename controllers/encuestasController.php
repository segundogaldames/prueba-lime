<?php 
/**
* 
*/
class encuestasController extends Controller
{
	//Restringido a login
	//Permisos supervisor: ver, editar y crear
	private $_encuesta;
	private $_campaign;	
	private $_encuestaUsuario;
	private $_carga;
	private $_criterio;
	private $_encuestaSupervisor;
	private $_cuota;
	
	public function __construct(){
		parent::__construct();
		$this->_encuesta = $this->loadModel('encuesta');
		$this->_campaign = $this->loadModel('campaign');
		$this->_encuestaUsuario = $this->loadModel('encuestausuario');
		$this->_carga = $this->loadModel('carga');
		$this->_criterio = $this->loadModel('criterio');
		$this->_encuestaSupervisor = $this->loadModel('encuestasupervisor');
		$this->_cuota = $this->loadModel('cuota');
	}

	public function index(){
		$this->verificarSession();
		$this->verificarRolAdmin();

		$this->_view->assign('titulo', 'Encuestas');
		$this->_view->assign('encuestas', $this->_encuesta->getEncuestas());
		$this->_view->renderizar('index');
	}

	public function encuestasSupervisores(){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		$this->_view->assign('titulo', 'Encuestas');
		$this->_view->assign('encuestas', $this->_encuestaSupervisor->getEncuestasSupervisorUsuario(Session::get('id_usuario')));
		$this->_view->renderizar('encuestasSupervisores');
	}

	public function fin(){
		$this->verificarSession();
		$this->_view->assign('titulo', 'Volver a Encuestar');
		$this->_view->renderizar('fin');
	}

	public function add(){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		$this->_view->assign('titulo', 'Encuestas');
		$this->_view->assign('campaign', $this->_campaign->getCampaign());
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getPostParam('link')) {
				$this->_view->assign('_error', 'Debe ingresar el link');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->validarUrl($this->getPostParam('link'))) {
				$this->_view->assign('_error', 'El link ingresado no es válido');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('campaign')) {
				$this->_view->assign('_error', 'Debe seleccionar una campaña');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('tipo')) {
				$this->_view->assign('_error', 'Debe seleccionar un tipo para esta encuesta');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_encuesta->getEncuestaNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'La encuesta ya existe...');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_encuesta->getEncuestaLink($this->getPostParam('link'))) {
				$this->_view->assign('_error', 'La encuesta ya existe...');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_encuesta->addEncuesta(
				$this->getAlphaNum('nombre'), 
				$this->getPostParam('link'), 
				$this->getInt('campaign'),
				$this->getInt('tipo')
			);

			$this->redireccionar('encuestas');
		}

		$this->_view->renderizar('add');
	}

	public function addEncuestaCampaign($campaign = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		if (!$this->filtrarInt($campaign)) {
			$this->redireccionar('campaign');
		}

		if (!$this->_campaign->getCampaignId($this->filtrarInt($campaign))) {
			$this->redireccionar('campaign');
		}

		$this->_view->assign('titulo', 'Encuestas');
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			$this->_view->assign('datos', $_POST);

			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre');
				$this->_view->renderizar('addEncuestaCampaign');
				exit;
			}

			if (!$this->getPostParam('link')) {
				$this->_view->assign('_error', 'Debe ingresar el link');
				$this->_view->renderizar('addEncuestaCampaign');
				exit;
			}

			if (!$this->validarUrl($this->getPostParam('link'))) {
				$this->_view->assign('_error', 'El link ingresado no es válido');
				$this->_view->renderizar('addEncuestaCampaign');
				exit;
			}

			if (!$this->getInt('tipo')) {
				$this->_view->assign('_error', 'Debe seleccionar un tipo para esta encuesta');
				$this->_view->renderizar('addEncuestaCampaign');
				exit;
			}

			if ($this->_encuesta->getEncuestaNombre($this->getSql('nombre'))) {
				$this->_view->assign('_error', 'La encuesta ya existe...');
				$this->_view->renderizar('addEncuestaCampaign');
				exit;
			}

			if ($this->_encuesta->getEncuestaLink($this->getPostParam('link'))) {
				$this->_view->assign('_error', 'La encuesta ya existe...');
				$this->_view->renderizar('addEncuestaCampaign');
				exit;
			}

			$this->_encuesta->addEncuesta(
				$this->getAlphaNum('nombre'), 
				$this->getPostParam('link'), 
				$this->filtrarInt($campaign),
				$this->getInt('tipo')
			);

			$this->redireccionar('encuestas');
		}

		$this->_view->renderizar('addEncuestaCampaign');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Encuesta');
		$this->_view->assign('encuesta', $this->_encuesta->getEncuestaId($this->filtrarInt($id)));
		$this->_view->assign('usuarios', $this->_encuestaUsuario->getUsuariosEncuesta($this->filtrarInt($id)));
		$this->_view->assign('cargas', $this->_carga->getCargasEncuesta($this->filtrarInt($id)));
		$this->_view->assign('criterios', $this->_criterio->getCriteriosEncuesta($this->filtrarInt($id)));
		$this->_view->assign('supervisores', $this->_encuestaSupervisor->getEncuestaSupervisorEncuesta($this->filtrarInt($id)));

		$cuota = $this->_cuota->getCuotasEncuesta($this->filtrarInt($id));
		if ($cuota) {
			$this->_view->assign('cuota', $cuota);
		}
		
		$this->_view->renderizar('view');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Encuesta');
		$this->_view->assign('dato', $this->_encuesta->getEncuestaId($this->filtrarInt($id)));
		$this->_view->assign('campaign', $this->_campaign->getCampaign());
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			//print_r($_POST);exit;
			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar el nombre');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getPostParam('link')) {
				$this->_view->assign('_error', 'Debe ingresar el link');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->validarUrl($this->getPostParam('link'))) {
				$this->_view->assign('_error', 'El link no es válido');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('status')) {
				$this->_view->assign('_error', 'Debe seleccionar un status');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('campaign')) {
				$this->_view->assign('_error', 'Debe seleccionar una campaña');
				$this->_view->renderizar('edit');
				exit;
			}

			if (!$this->getInt('tipo')) {
				$this->_view->assign('_error', 'Debe seleccionar un tipo para esta encuesta');
				$this->_view->renderizar('edit');
				exit;
			}

			$this->_encuesta->editEncuesta(
				$this->filtrarInt($id), 
				$this->getAlphaNum('nombre'), 
				$this->getPostParam('link'), 
				$this->getInt('status'), 
				$this->getInt('campaign'),
				$this->getInt('tipo')
			);

			$this->redireccionar('encuestas');
		}

		$this->_view->renderizar('edit');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarRolAdmin();
		$this->verificarParams($id);

		$this->_encuesta->deleteEncuestas($this->filtrarInt());
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('encuesta');
		}

		if (!$this->_encuesta->getEncuestaId($this->filtrarInt($id))) {
			$this->redireccionar('encuesta');
		}
	}
}