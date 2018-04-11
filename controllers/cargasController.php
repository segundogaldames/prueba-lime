<?php 
/**
* 
*/
class cargasController extends Controller
{
	//Restringido a login
	//Permisos supervisor: todos
	private $_carga;
	private $_contacto;

	public function __construct(){
		parent::__construct();
		$this->_carga = $this->loadModel('carga');
		$this->_contacto = $this->loadModel('contacto');
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

		$this->_view->assign('titulo', 'APP::Cargas Realizadas');
		$this->_view->assign('cargas', $paginador->paginar($this->_carga->getCargasUsuario(Session::get('id_usuario')), $pagina));
		$this->_view->assign('cargasAll', $paginador->paginar($this->_carga->getCargas(), $pagina));
		$this->_view->assign('paginacion', $paginador->getView('prueba', 'cargas/index'));
		$this->_view->renderizar('index');
	}

	public function edit($id = null){

		$this->verificarSession();
		$this->verificarRolAdminSuper();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Lista');
		$this->_view->assign('dato', $this->_carga->getCargaId($this->filtrarInt($id)));
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			//print_r($_POST);exit;
			if (!$this->getInt('estado')) {
				$this->_view->assign('_error', 'Debe seleccionar un estado');
				$this->_view->renderizar('edit');
				exit;
			}

			$this->_carga->editCarga($this->filtrarInt($id), $this->getInt('estado'));
			$this->_contacto->editContactoEstado($this->filtrarInt($id), $this->getInt('estado'));
			$this->redireccionar('cargas');
		}
		
		$this->_view->renderizar('edit');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Ver Lista');
		$this->_view->assign('carga', $this->_carga->getCargaId($this->filtrarInt($id)));
		$this->_view->renderizar('view');
	}

	public function delete($id = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();
		$this->verificarParams($id);

		$this->_carga->deleteCarga($this->filtrarInt($id));
		$this->_contacto->deleteContactosCarga($this->filtrarInt($id));
		$this->redireccionar('cargas');
	}

	//*******************************************************************************
	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar();
		}

		if (!$this->_carga->getCargaId($this->filtrarInt($id))) {
			$this->redireccionar();
		}
	}
}