<?php
/**
* 
*/
class clientesController extends Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){

	}

	public function add(){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		$this->_view->assign('titulo', 'Clientes');
		$this->_view->renderizar('add');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('clientes');
		}
	}
}