<?php 
/**
* 
*/
class contactosController extends Controller
{
	private $_contacto;
	private $_encuesta;
	private $_carga;
	
	public function __construct(){
		parent::__construct();
		$this->_contacto = $this->loadModel('contacto');
		$this->_encuesta = $this->loadModel('encuesta');
		$this->_carga = $this->loadModel('carga');
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
		$id_contacto = $this->_contacto->getContactoEncuesta($this->filtrarInt($encuesta));

		if ($this->getInt('enviar') == 1) {
			
			if (!$this->getInt('contacto')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción de contacto');
				$this->_view->renderizar('contactoEncuesta');
				exit;
			}

			if (!$this->getInt('llamada')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción de llamada');
				$this->_view->renderizar('contactoEncuesta');
				exit;
			}

			$this->_contacto->editContactoEstado(
				$id_contacto['id'],
				$this->getInt('contacto'),
				$this->getInt('llamada')
			);

		}
		$this->_view->renderizar('contactoEncuesta');
	}

	public function contactosCarga($id = null, $carga = null){
		$this->verificarSession();
		$this->verficarRolAdminSuper();

		if (!$this->filtrarInt($carga)) {
			$this->redireccionar();
		}

		if (!$this->_carga->getCargaIdCarga($this->filtrarInt($id), $this->filtrarInt($carga))) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'APP::Contactos Por Carga');
		$this->_carga->assign('contactos', $this->_contacto->getContactosCarga($this->filtrarInt($carga)))
	}

	public function add(){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		$this->_view->assign('titulo', 'Carga Contactos');

		if ($this->getInt('enviar') == 1) {
			$archivo = $_FILES['excel']['name'];
			$ruta_tmp = $_FILES['excel']['tmp_name'];
			//print_r($ruta_tmp);
			$ruta = $ruta = ROOT . 'public' . DS . 'docs' . DS . $archivo;

			//print_r($archivo);
			//copy($ruta_tmp, $ruta);

			$this->getLibrary('Classes' . DS . 'PHPExcel');
			$tmpfname = $archivo;
			//print_r($tmpfname);

			$excelReader = PHPExcel_IOFactory::createReaderForFile($ruta_tmp);
			$excelObj = $excelReader->load($ruta_tmp);

			//transformamos los datos del archivo en array
			//$sheetData = $excelObj->getActiveSheet()->toArray(null, true, true, true);

			//recuperamos los nombres de campo
			/*$name_cols = array_filter(array_shift($sheetData));
			foreach ($name_cols as $col => $value) {
				print_r($value);
			}*/

			$workSheet = $excelObj->getSheet(0);
			$lastRow = $workSheet->getHighestRow();

			//verificamos campos obligatorios
			for ($i=2; $i <= $lastRow; $i++) { 
				$nombre = $workSheet->getCell('A'.$i)->getValue();
				//print_r($nombre);
				$telefono = $workSheet->getCell('B'.$i)->getValue();
				$encuesta = $workSheet->getCell('C'.$i)->getValue();
				$carga = $workSheet->getCell('AE'.$i)->getValue();

				if (!$nombre) {
						$this->_view->assign('_error', 'No puede ingresar contactos sin nombre');
						$this->_view->renderizar('add');
						exit;
				}

				if (!$telefono) {
					$this->_view->assign('_error', 'No puede ingresar contactos sin telefono');
					$this->_view->renderizar('add');
					exit;
				}

				if (!$encuesta) {
					$this->_view->assign('_error', 'No puede ingresar contactos sin encuesta');
					$this->_view->renderizar('add');
					exit;
				}

				if (!$carga) {
					$this->_view->assign('_error', 'No puede ingresar contactos sin numero de carga');
					$this->_view->renderizar('add');
					exit;
				}
			}

			//recuperamos e insertamos los datos
			for ($i=2; $i <= $lastRow ; $i++) { 
				$nombre = $workSheet->getCell('A'.$i)->getValue();
				$telefono = $workSheet->getCell('B'.$i)->getValue();
				$encuesta = $workSheet->getCell('C'.$i)->getValue();
				$rut = $workSheet->getCell('D'.$i)->getValue();
				$comuna = $workSheet->getCell('E'.$i)->getValue();
				$region = $workSheet->getCell('F'.$i)->getValue();
				$empresa = $workSheet->getCell('G'.$i)->getValue();
				$email = $workSheet->getCell('H'.$i)->getValue();
				$direccion = $workSheet->getCell('I'.$i)->getValue();
				$profesion = $workSheet->getCell('J'.$i)->getValue();
				$edad = $workSheet->getCell('K'.$i)->getValue();
				$codigo = $workSheet->getCell('L'.$i)->getValue();
				$tienda = $workSheet->getCell('M'.$i)->getValue();
				$dato1 = $workSheet->getCell('N'.$i)->getValue();
				$dato2 = $workSheet->getCell('O'.$i)->getValue();
				$dato3 = $workSheet->getCell('P'.$i)->getValue();

				$fecha1 = $workSheet->getCell('Q'.$i)->getValue();
				$timestamp = PHPExcel_Shared_Date::ExcelToPHP($fecha1);
				$fecha1 = date("d-m-Y", $timestamp);

				$fecha2 = $workSheet->getCell('R'.$i)->getValue();
				$timestamp = PHPExcel_Shared_Date::ExcelToPHP($fecha2);
				$fecha2 = date("d-m-Y", $timestamp);

				$fecha3 = $workSheet->getCell('S'.$i)->getValue();
				$timestamp = PHPExcel_Shared_Date::ExcelToPHP($fecha3);
				$fecha3 = date("d-m-Y", $timestamp);

				$telefono2 = $workSheet->getCell('T'.$i)->getValue();
				$telefono3 = $workSheet->getCell('U'.$i)->getValue();
				$telefono4 = $workSheet->getCell('V'.$i)->getValue();
				$telefono5 = $workSheet->getCell('W'.$i)->getValue();
				$telefono6 = $workSheet->getCell('X'.$i)->getValue();
				$telefono7 = $workSheet->getCell('Y'.$i)->getValue();
				$telefono8 = $workSheet->getCell('Z'.$i)->getValue();
				$telefono9 = $workSheet->getCell('AA'.$i)->getValue();
				$telefono10 = $workSheet->getCell('AB'.$i)->getValue();
				$dato4 = $workSheet->getCell('AC'.$i)->getValue();
				$dato5 = $workSheet->getCell('AD'.$i)->getValue();
				$carga = $workSheet->getCell('AE'.$i)->getValue();

					

				//se cargan los contactos
				$this->_contacto->addContactos($nombre, $telefono, $encuesta, $rut, $comuna, $region, $empresa, $email, $direccion, $profesion, $edad, $codigo, $tienda, $dato1, $dato2, $dato3, $fecha1, $fecha2, $fecha3, $telefono2, $telefono3, $telefono4, $telefono5, $telefono6, $telefono7, $telefono8, $telefono9, $telefono10, $dato4, $dato5, $carga);
				
				//se crea un registro con la carga realizada
				
			}
			$this->_carga->addCarga($carga, Session::get('id_usuario'));
			$this->redireccionar();		
		}

		$this->_view->renderizar('add');
	}
		
	public function cerrar(){
		$this->redireccionar();
	}

	protected function getCamposContacto(){
		return array('nombre', 'rut', 'telefono', 'encuesta');
	}

	protected function getCamposObligados(){
		return array('nombre', 'telefono', 'encuesta');
	}
}