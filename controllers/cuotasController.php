<?php 
/**
* 
*/
class cuotasController extends Controller
{
	private $_cuota;
	private $_encuesta;
	
	public function __construct(){
		parent::__construct();
		$this->_cuota = $this->loadModel('cuota');
		$this->_encuesta = $this->loadModel('encuesta');
	}

	public function index(){

	}

	public function add($encuesta = null, $criterio = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		if (!$this->filtrarInt($encuesta)) {
			$this->redireccionar('encuestas');
		}

		if (!$this->_encuesta->getEncuestaId($this->filtrarInt($encuesta))) {
			$this->redireccionar('encuestas');
		}

		if ($this->filtrarInt($criterio)) {
			$criterio = $this->filtrarInt($criterio);
		}else{
			$criterio = NULL;
		}

		$this->_view->assign('titulo', 'Agregar Cuotas');
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			$this->_view->assign('datos', $_POST);
			
			if (!$this->getSql('desde')) {
				$this->_view->assign('_error', 'Debes ingresar una fecha de inicio');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getSql('hasta')) {
				$this->_view->assign('_error', 'Debes ingresar una fecha de fin');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('valor') || $this->getInt('valor') < 1) {
				$this->_view->assign('_error', 'Debes ingresar un valor numérico');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_cuota->addCuota(
				$this->filtrarInt($encuesta), 
				$this->filtrarInt($criterio), 
				$this->getSql('desde'), 
				$this->getSql('hasta'),
				$this->getInt('valor')
			);
			
			$this->redireccionar('encuestas');
		}
		$this->_view->renderizar('add');
	}
}