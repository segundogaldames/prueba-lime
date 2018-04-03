<?php 
/**
* 
*/
class criteriosController extends Controller
{
	private $_criterio;
	private $_encuesta;
	private $_carga;
	private $_cuota;
	private $_contacto;
	
	public function __construct(){
		parent::__construct();
		$this->_encuesta = $this->loadModel('encuesta');
		$this->_criterio = $this->loadModel('criterio');
		$this->_carga = $this->loadModel('carga');
		$this->_cuota = $this->loadModel('cuota');
		$this->_contacto = $this->loadModel('contacto');
	}

	public function index(){

	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Criterio');
		$this->_view->assign('criterio', $this->_criterio->getCriterioId($this->filtrarInt($id)));
		$this->_view->assign('listas', $this->_carga->getCargasCriterio($this->filtrarInt($id)));


		$cuota = $this->_cuota->getCuotaEncuestaCriterio($this->filtrarInt($id));
		//print_r($cuota['valor']);
		if ($cuota) {
			$this->_view->assign('cuota', $cuota);

			$encuestados = $this->_contacto->getContactosEncuestadosCriterio($cuota['desde'], $cuota['hasta'], $cuota['criterio_id']);
			if ($encuestados) {
				$encuestados = $encuestados;
			}else{
				$encuestados = 0;
			}

			$this->_view->assign('encuestados', $encuestados);
		}
		
		$this->_view->renderizar('view');
	}

	public function addCriterioEncuesta($encuesta = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		if (!$this->filtrarInt($encuesta)) {
			$this->redireccionar('encuestas/encuestasSupervisores');
		}

		if (!$this->_encuesta->getEncuestaId($this->filtrarInt($encuesta))) {
			$this->redireccionar('encuestas/encuestasSupervisores');
		}

		$criterios = $this->_criterio->getCriteriosEncuesta($this->filtrarInt($encuesta));

		if (!$criterios) {
			$cuota = $this->_cuota->getCuotasEncuesta($this->filtrarInt($encuesta));

			if ($cuota) {
				throw new Exception("No se puede agregar un criterio a esta encuesta... tiene cuotas asociadas", 1);
				
			}
		}

		
			//print_r($encuesta);exit;
			

		$this->_view->assign('titulo', 'Nuevo Criterio Encuesta');
		$this->_view->assign('encuesta', $this->_encuesta->getEncuestaId($this->filtrarInt($encuesta)));
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			//print_r($_POST);exit;


			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar un nombre para el criterio');
				$this->_view->renderizar('addCriterioEncuesta');
				exit;
			}

			if ($this->_criterio->getCriterioEncuestaNombre($this->getSql('nombre'), $this->filtrarInt($encuesta))) {
				$this->_view->assign('_error', 'El criterio ingresado ya existe en la encuesta seleccionada... Intente con otro');
				$this->_view->renderizar('addCriterioEncuesta');
				exit;
			}

			$this->_criterio->addCriterio($this->getAlphaNum('nombre'), $this->filtrarInt($encuesta));
			$this->redireccionar('encuestas/encuestasSupervisores');
		}

		$this->_view->renderizar('addCriterioEncuesta');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Criterio');
		$this->_view->assign('dato', $this->_criterio->getCriterioId($this->filtrarInt($id)));
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL){
			if (!$this->getSql('nombre')) {
				$this->_view->assign('_error', 'Debe ingresar un nombre para el criterio');
				$this->_view->renderizar('addCriterioEncuesta');
				exit;
			}

			$this->_criterio->editCriterio($this->filtrarInt($id), $this->getSql('nombre'));
			$this->redireccionar('encuestas/encuestasSupervisores');
		}
		$this->_view->renderizar('edit');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();
		$this->verificarParams($id);

		$cuota = $this->_cuota->getCuotaEncuestaCriterio($this->filtrarInt($id));

		if ($cuota) {
			throw new Exception("Este criterio no puede ser eliminado... Tiene cuota asociada", 1);
			
		}

		$this->_criterio->deleteCriterio($this->filtrarInt($id));
		$this->redireccionar('encuestas/encuestasSupervisores');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('encuestas/encuestasSupervisores');
		}

		if (!$this->_criterio->getCriterioId($this->filtrarInt($id))) {
			$this->redireccionar('encuestas/encuestasSupervisores');
		}
	}
}