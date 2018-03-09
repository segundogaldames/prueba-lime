<?php 
/**
* 
*/
class camposcontactosController extends Controller
{
	private $_campoContacto;

	public function __construct()	{
		parent::__construct();
		$this->_campoContacto = $this->loadModel('campocontacto');
	}

	public function index(){
		$this->verificarSession();
		$this->verificarRolAdmin();

		$this->_view->assign('titulo', 'Campos Contacto');
		$this->_view->assign('campos', $this->_campoContacto->getCamposContacto());
		$this->_view->renderizar('index');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarRolAdmin();
		$this->verificarParams($id);

		$this->_view->assign('titulo', 'Editar Campos Contacto');
		$this->_view->assign('dato', $this->_campoContacto->getCampoContactoId($this->filtrarInt($id)));
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			$this->_campoContacto->editCampoContacto(
				$this->filtrarInt($id), $this->getAlphaNum('nombre'), $this->getAlphaNum('telefono'), $this->getAlphaNum('rut'), 
				$this->getAlphaNum('comuna'), $this->getAlphaNum('region'), $this->getAlphaNum('codigo'), $this->getAlphaNum('dato1'), 
				$this->getAlphaNum('dato2'), $this->getAlphaNum('dato3'), $this->getAlphaNum('dato4'), $this->getAlphaNum('dato5'), 
				$this->getAlphaNum('dato6'), $this->getAlphaNum('dato7'), $this->getAlphaNum('dato8'), $this->getAlphaNum('dato9'), 
				$this->getAlphaNum('dato10'), $this->getAlphaNum('dato11'), $this->getAlphaNum('fecha1'), $this->getAlphaNum('fecha2'), 
				$this->getAlphaNum('fecha3'), $this->getAlphaNum('telefono2'), $this->getAlphaNum('telefono3'), 
				$this->getAlphaNum('telefono4'), $this->getAlphaNum('telefono5'), $this->getAlphaNum('telefono6'), 
				$this->getAlphaNum('telefono7'), $this->getAlphaNum('telefono8'), $this->getAlphaNum('telefono9'), 
				$this->getAlphaNum('telefono10')
			);
			
			$this->redireccionar('camposcontactos');
		}
		$this->_view->renderizar('edit');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('camposcontactos');
		}

		if (!$this->_campoContacto->getCampoContactoId($this->filtrarInt($id))) {
			$this->redireccionar('camposcontactos');
		}
	}
}