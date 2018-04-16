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
	private $_contacto;
	
	public function __construct(){
		parent::__construct();
		$this->_encuesta = $this->loadModel('encuesta');
		$this->_campaign = $this->loadModel('campaign');
		$this->_encuestaUsuario = $this->loadModel('encuestausuario');
		$this->_carga = $this->loadModel('carga');
		$this->_criterio = $this->loadModel('criterio');
		$this->_encuestaSupervisor = $this->loadModel('encuestasupervisor');
		$this->_cuota = $this->loadModel('cuota');
		$this->_contacto = $this->loadModel('contacto');
	}

	public function index($pagina = false){
		$this->verificarSession();
		$this->verificarRolAdmin();

		if ($pagina) {
			$pagina = $this->filtrarInt($pagina);
		}else{
			$pagina = false;
		}

		$this->getLibrary('paginador');
		$paginador = new Paginador();

		$this->_view->assign('titulo', 'Encuestas');
		$this->_view->assign('encuestas', $paginador->paginar($this->_encuesta->getEncuestas(), $pagina));
		$this->_view->assign('paginacion', $paginador->getView('prueba', 'encuestas/index'));
		$this->_view->renderizar('index');
	}

	public function encuestasSupervisores($pagina = false){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		if ($pagina) {
			$pagina = $this->filtrarInt($pagina);
		}else{
			$pagina = false;
		}

		$this->getLibrary('paginador');
		$paginador = new Paginador();

		$this->_view->assign('titulo', 'Encuestas');
		$this->_view->assign('encuestas', $paginador->paginar($this->_encuestaSupervisor->getEncuestasSupervisorUsuario(Session::get('id_usuario')), $pagina));
		$this->_view->assign('paginacion', $paginador->getView('prueba', 'encuestas/encuestasSupervisores'));
		$this->_view->renderizar('encuestasSupervisores');
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

			if (!$this->getInt('codigo')) {
				$this->_view->assign('_error', 'Ingrese el código LimeSurvey para esta encuesta');
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
				$this->getInt('codigo')
			);

			$this->redireccionar('encuestas/encuestasSupervisores');
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

			if (!$this->getInt('codigo')) {
				$this->_view->assign('_error', 'Ingrese el código LimeSurvey para esta encuesta');
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
				$this->getInt('codigo')
			);

			$this->redireccionar('encuestas/encuestasSupervisores');
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

			$encuestados = $this->_contacto->getContactosEncuestadosEncuesta($cuota['desde'], $cuota['hasta'], $cuota['encuesta_id']);
			if ($encuestados) {
				$encuestados = $encuestados;
			}else{
				$encuestados = 0;
			}
			$this->_view->assign('encuestados', $encuestados);
		}

		###########################################################################################
		#parametros para recuperar contactos disponibles, cuotas y encuestados en encuestas con criterio

		#contactos disponibles agrupados por criterio
		$disponibles = $this->_contacto->getCountDisponiblesEncuestaCriterio($this->filtrarInt($id));
		$cuotas = $this->_cuota->getCuotasEncuestas($this->filtrarInt($id));

		if (!$disponibles) {
			$disponibles = 0;
		}

		$this->_view->assign('disponibles', $disponibles);

		if (!$cuotas) {
			$cuotas = 0;
		}

		$this->_view->assign('cuotas', $cuotas);

		
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

			if (!$this->getInt('codigo')) {
				$this->_view->assign('_error', 'Ingrese el código LimeSurvey para esta encuesta');
				$this->_view->renderizar('edit');
				exit;
			}

			$this->_encuesta->editEncuesta(
				$this->filtrarInt($id), 
				$this->getAlphaNum('nombre'), 
				$this->getPostParam('link'), 
				$this->getInt('status'), 
				$this->getInt('campaign'),
				$this->getInt('codigo')
			);

			$this->redireccionar('encuestas/encuestasSupervisores');
		}

		$this->_view->renderizar('edit');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarRolAdmin();
		$this->verificarParams($id);

		$this->_encuesta->deleteEncuestas($this->filtrarInt());
		$this->redireccionar('encuestas');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('encuestas/encuestasSupervisores');
		}

		if (!$this->_encuesta->getEncuestaId($this->filtrarInt($id))) {
			$this->redireccionar('encuestas/encuestasSupervisores');
		}
	}
}