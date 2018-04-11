<?php 
/**
* 
*/
class encuestasusuariosController extends Controller
{
	//Restringido a login
	//Permisos supervisor: todos
	//Permisos ejecutivo: ver enceustas asociadas a su login, editar estado de contacto luego de una encuesta
	private $_encuesta;
	private $_usuario;
	private $_encuestaUsuario;
	private $_contacto;
	private $_estadollamadas;
	private $_criterio;
	
	public function __construct(){
		parent::__construct();
		$this->_encuesta = $this->loadModel('encuesta');
		$this->_usuario = $this->loadModel('usuario');
		$this->_encuestaUsuario = $this->loadModel('encuestausuario');
		$this->_contacto = $this->loadModel('contacto');
		$this->_estadollamadas = $this->loadModel('estadollamada');
		$this->_criterio = $this->loadModel('criterio');
	}

	public function index($pagina = false){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		if (!$this->filtrarInt($pagina)) {
			$pagina = false;
		}else{
			$pagina = $this->filtrarInt($pagina);
		}

		$this->getLibrary('paginador');
		$paginador = new Paginador();

		$this->_view->assign('titulo', 'Encuestas Usuarios');
		$this->_view->assign('encuestasUsuarios', $paginador->paginar($this->_encuestaUsuario->getEncuestasUsuarios(), $pagina));
		$this->_view->assign('paginacion', $paginador->getView('prueba', 'encuestasusuarios/index'));
		$this->_view->renderizar('index');
	}

	public function encuestaUsuarioContacto($encuesta = null){
		$this->verificarSession();

		if (!$this->filtrarInt($encuesta)) {
			$this->redireccionar();
		}

		if (!$this->_encuesta->getEncuestaId($encuesta)) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Ver Encuesta y Contacto');
		$this->_view->assign('encuesta', $this->_encuesta->getEncuestaId($this->filtrarInt($encuesta)));
		$this->_view->assign('contacto', $this->_contacto->getContactoEncuesta($this->filtrarInt($encuesta)));
		$this->_view->assign('estado_llamadas', $this->_estadollamadas->getEstadoLlamadas());
		$this->_view->assign('enviar', CTRL);
		$this->_view->renderizar('encuestaUsuarioContacto');
	}

	public function editEstadoContacto(){
		//print_r($_POST);exit;
		$this->verificarSession();

		if ($this->getAlphaNum('enviar') == CTRL) {
			//print_r($_POST);exit;
			if (!$this->getInt('contacto')) {
				$this->redireccionar();
			}

			if (!$this->getInt('llamada')) {
				$this->redireccionar();
			}

			if (!$this->getInt('contacto_id')) {
				$this->redireccionar();
			}

			$this->_contacto->editContactoEstado(
				$this->getInt('contacto_id'), 
				$this->getInt('contacto'), 
				$this->getInt('llamada')
			);

			$this->redireccionar();
		}
		$this->_view->renderizar('encuestaUsuarioContacto');
	}

	public function add(){
		$this->verificarSession();
		$this->verificarRolAdmin();

		$this->_view->assign('titulo', 'Nueva Encuesta Usuario');
		$this->_view->assign('encuestas', $this->_encuesta->getEncuestas());
		$this->_view->assign('ejecutivos', $this->_usuario->getUsuariosEjecutivos());
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			if (!$this->getInt('encuesta')) {
				$this->_view->assign('_error', 'Debe seleccionar una encuesta');
				$this->_view->renderizar('add');
				exit;
			}

			if (!$this->getInt('usuario')) {
				$this->_view->assign('_error', 'Debe seleccionar un usuario');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_encuestaUsuario->getEncuestaUsuarioDuplicate($this->getInt('encuesta'), $this->getInt('usuario'))) {
				$this->_view->assign('_error', 'La asociación encuesta y usuario ya existen...');
				$this->_view->renderizar('add');
				exit;
			}

			$this->_encuestaUsuario->addEncuestaUsuario(
				$this->getInt('encuesta'), 
				$this->getInt('usuario')
			);

			$this->redireccionar('encuestasusuarios');
		}

		$this->_view->renderizar('add');
	}

	public function addUsuarioEncuesta($encuesta = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		if (!$this->filtrarInt($encuesta)) {
			$this->redireccionar('encuestas');
		}

		if (!$this->_encuesta->getEncuestaId($this->filtrarInt($encuesta))) {
			$this->redireccionar('encuestas/encuestasSupervisores');
		}

		$this->_view->assign('titulo', 'Nueva Encuesta Usuario');
		$this->_view->assign('ejecutivos', $this->_usuario->getUsuariosEjecutivos());
		$this->_view->assign('encuesta', $this->_encuesta->getEncuestaId($this->filtrarInt($encuesta)));
		$this->_view->assign('criterios', $this->_criterio->getCriteriosEncuesta($this->filtrarInt($encuesta)));
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {

			if (!$this->getInt('usuario')) {
				$this->_view->assign('_error', 'Debe seleccionar un usuario');
				$this->_view->renderizar('add');
				exit;
			}

			if ($this->_encuestaUsuario->getEncuestaUsuarioDuplicate($this->filtrarInt($encuesta), $this->getInt('usuario'))) {
				$this->_view->assign('_error', 'La asociación encuesta y usuario ya existe...');
				$this->_view->renderizar('addUsuarioEncuesta');
				exit;
			}

			if ($this->getInt('criterio')) {
				$criterio = $this->getInt('criterio');
			}else{
				$criterio = null;
			}

			$this->_encuestaUsuario->addEncuestaUsuario(
				$this->filtrarInt($encuesta), 
				$this->getInt('usuario'),
				$criterio
			);

			$this->redireccionar('encuestasusuarios');
		}

		$this->_view->renderizar('addUsuarioEncuesta');
	}

	#metodo para cambiar criterio asociado a un usuario
	public function criterioEjecutivo($id = null, $encuesta = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();
		$this->verificarParams($id);

		if (!$this->filtrarInt($encuesta)) {
			$this->redireccionar('encuestas/encuestasSupervisores');
		}

		if (!$this->_encuesta->getEncuestaId($this->filtrarInt($encuesta))) {
			$this->redireccionar('encuestas/encuestasSupervisores');
		}

		$this->_view->assign('titulo', 'Editar Criterio Ejecutivo');
		$this->_view->assign('dato', $this->_encuestaUsuario->getEncuestaUsuarioId($this->filtrarInt($id)));
		$this->_view->assign('criterios', $this->_criterio->getCriteriosEncuesta($this->filtrarInt($encuesta)));
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			if ($this->getInt('criterio')) {
				$criterio = $this->getInt('criterio');
			}else{
				$criterio = null;
			}

			$this->_encuestaUsuario->editEncuestaUsuarioCriterio($this->filtrarInt($id), $criterio);
			$this->redireccionar('encuestas/encuestasSupervisores');
		}

		$this->_view->renderizar('criterioEjecutivo');
	}

	public function delete($id = null){
		//print_r($id);exit;
		$this->verificarSession();
		$this->verificarRolAdminSuper();
		$this->verificarParams($id);

		$this->_encuestaUsuario->deleteEncuestaUsuario($this->filtrarInt($id));
		$this->redireccionar('encuestasusuarios');
	}

	private function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('encuestasusuarios');
		}

		if (!$this->_encuestaUsuario->getEncuestaUsuarioId($this->filtrarInt($id))) {
			$this->redireccionar('encuestasusuarios');
		}
	}
}