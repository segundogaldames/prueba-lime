<?php 
/**
* 
*/
class encuestasusuariosController extends Controller
{
	
	public function __construct(){
		parent::__construct();
	}

	public function add(){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		$this->_view->assign('titulo', 'Nueva Encuesta Usuario');
		$this->_view->renderizar('add');
	}
}