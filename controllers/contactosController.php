<?php 
/**
* 
*/
class contactosController extends Controller
{
	private $_contacto;
	private $_encuesta;
	
	public function __construct(){
		parent::__construct();
		$this->_contacto = $this->loadModel('contacto');
		$this->_encuesta = $this->loadModel('encuesta');
	}

	public function index(){

	}

	public function contactoEncuesta($encuesta = null){
		if (!$this->filtrarInt($encuesta)) {
			$this->redireccionar();
		}

		if (!$this->_encuesta->getEncuestaId($this->filtrarInt($encuesta))) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Contactar');
		$this->_view->assign('contacto', $this->_contacto->getContactoEncuesta($this->filtrarInt($encuesta)));
		$this->_view->renderizar('contactoEncuesta');
	}

	public function add(){
		$this->_view->assign('titulo', 'Carga Contactos');

		if ($this->getInt('enviar') == 1) {
			$archivotmp = $_FILES['excel']['tmp_name'];
			$lineas = file($archivotmp);
			$i = 0;

			foreach ($lineas as $linea_num => $linea) {

				if ($i != 0) {
					$datos = explode(";", $linea);
					$nombre = utf8_encode($datos[0]);
					$rut = utf8_encode($datos[1]);
					$telefono = $datos[2];
					$encuesta = $datos[3];

					$this->_contacto->addContactos(
						$nombre,
						$rut,
						$telefono,
						$encuesta
					);
				}
			$i++;
			}

			$this->redireccionar();
		}
		$this->_view->renderizar('add');
	}
}