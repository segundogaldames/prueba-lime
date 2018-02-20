<?php 
/**
* 
*/
class cargasController extends Controller
{
	private $_carga;

	public function __construct(){
		parent::__construct();
		$this->_carga = $this->loadModel('carga');
	}

	public function index(){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		$this->_view->assign('titulo', 'APP::Cargas Realizadas');
		$this->_view->assign('cargas', $this->_carga->getCargasUsuario(Session::get('id_usuario')));
		$this->_view->renderizar('index');
	}
}