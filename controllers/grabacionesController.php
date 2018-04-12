<?php 
/**
* 
*/
class grabacionesController extends Controller
{
	private $_grabacion;
	private $_encuesta;

	public function __construct(){
		parent::__construct();
		$this->_grabacion = $this->loadModel('grabacion');
		$this->_encuesta = $this->loadModel('encuesta');
	}

	public function index(){

	}

	public function view(){

	}

	public function buscarGrabaciones(){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		$this->_view->assign('titulo', 'Buscar Grabaciones');
		$this->_view->assign('encuestas', $this->_encuesta->getEncuestas());
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			$this->_view->assign('datos', $_POST);

			if ($this->getSql('desde')) {
				if (!$this->getSql('hasta')) {
					$this->_view->assign('_error', 'Seleccione una fecha hasta');
					$this->_view->renderizar('buscarGrabaciones');
					exit;
				}

				if (!$this->getInt('encuesta')) {
					$this->_view->assign('_error', 'Seleccione una encuesta');
					$this->_view->renderizar('buscarGrabaciones');
					exit;
				}

				#obtiene campaña vicidial a partir del id de una encuesta
				$campaign_vici = $this->_encuesta->getEncuestaId($this->filtrarInt($encuesta));
			}
		}

		$this->_view->renderizar('buscarGrabaciones');
	}
}