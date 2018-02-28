<?php 
/**
* 
*/
class contactosController extends Controller
{
	//Restringido a login
	//Permisos supervisor: todos
	//Permisos ejecutivo: ver contactos por encuesta
	private $_contacto;
	private $_encuesta;
	private $_carga;
	private $_estadoLlamada;
	
	public function __construct(){
		parent::__construct();
		$this->_contacto = $this->loadModel('contacto');
		$this->_encuesta = $this->loadModel('encuesta');
		$this->_carga = $this->loadModel('carga');
		$this->_estadoLlamada = $this->loadModel('estadollamada');
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

		$this->_view->assign('titulo', 'APP::Contactos');
		$this->_view->assign('contactos', $paginador->paginar($this->_contacto->getContactos(), $pagina));
		$this->_view->assign('paginacion', $paginador->getView('prueba', 'contactos/index'));
		$this->_view->renderizar('index');
	}

	public function contactoEncuesta($encuesta = null){
		$this->verificarSession();

		if (!$this->filtrarInt($encuesta)) {
			$this->redireccionar();
		}

		if (!$this->_encuesta->getEncuestaId($this->filtrarInt($encuesta))) {
			$this->redireccionar();
		}

		$this->_view->assign('titulo', 'Contactar');
		$this->_view->assign('encuesta', $this->_encuesta->getEncuestaId($this->filtrarInt($encuesta)));
		$this->_view->assign('contacto', $this->_contacto->getContactoEncuesta($this->filtrarInt($encuesta)));
		$this->_view->assign('estado_llamadas', $this->_estadoLlamada->getEstadoLlamadas());
		$this->_view->assign('enviar', CTRL);


		if ($this->getAlphaNum('enviar') == CTRL) {
			//print_r($_POST);exit;
			if (!$this->getInt('llamada')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción de llamada');
				$this->_view->renderizar('contactoEncuesta');
				exit;
			}

			$row = $this->_estadoLlamada->getEstadoLlamadaId($this->getInt('llamada'));
			$est_contacto = $row['estado_contacto'];
			//print_r($est_contacto);exit;

			$this->_contacto->editContactoContactado(
				$this->getInt('contacto'),
				$this->filtrarInt($est_contacto),
				$this->getInt('llamada'),
				Session::get('id_usuario')
			);
			$this->redireccionar();
		}
		
		$this->_view->renderizar('contactoEncuesta');
	}

	public function contactosCarga($id = null, $pagina = false){
		$this->verificarSession();
		$this->verificarRolAdminSuper();
		$this->verificarParams($id);

		if (!$this->filtrarInt($pagina)) {
			$pagina = false;
		}else{
			$pagina = $this->filtrarInt($pagina);
		}

		$this->getLibrary('paginador');
		$paginador = new Paginador();

		$this->_view->assign('titulo', 'APP::Contactos Por Carga');
		$this->_view->assign('contactos', $paginador->paginar($this->_contacto->getContactosCarga($this->filtrarInt($id)), $pagina));
		$this->_view->assign('paginacion',$paginador->getView('prueba', 'contactos/contactosCarga/' . $id));
		$this->_view->assign('num_contactos', $this->_contacto->getCountContactosCountCarga($this->filtrarInt($id)));
		$this->_view->assign('num_disponibles', $this->_contacto->getCountContactosDisponiblesCarga($this->filtrarInt($id)));
		$this->_view->assign('num_encuestados', $this->_contacto->getCountContactosEncuestadosCarga($this->filtrarInt($id)));
		$this->_view->assign('carga', $this->_carga->getCargaId($this->filtrarInt($id)));
		$this->_view->renderizar('contactosCarga');
	}

	//metodo de carga general previa seleccion de campaña
	public function add(){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		$this->_view->assign('titulo', 'Carga Contactos');
		$this->_view->assign('encuestas', $this->_encuesta->getEncuestasActivas());
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			if (!$this->getInt('encuesta')) {
				$this->_view->assign('_error', 'No es posible asociar los contactos a una encuesta. Inténtelo nuevamente');
				$this->_view->renderizar('add');
				exit;
			}
			
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

				/*
				if (!$encuesta) {
					$this->_view->assign('_error', 'No puede ingresar contactos sin encuesta');
					$this->_view->renderizar('add');
					exit;
				}
				*/
			}

			//registramos la cargapara asociar contactos
			$this->_carga->addCarga(Session::get('id_usuario'), $this->getInt('encuesta'));

			//recuperamos el ultimo id ingresado
			$carga = $this->_carga->getUltimaCarga();
			
			//print_r($carga);exit;
			//recuperamos e insertamos los datos
			for ($i=2; $i <= $lastRow ; $i++) { 
				$nombre = $workSheet->getCell('A'.$i)->getValue();
				$telefono = $workSheet->getCell('B'.$i)->getValue();
				//$encuesta = $workSheet->getCell('C'.$i)->getValue();
				$rut = $workSheet->getCell('C'.$i)->getValue();
				$comuna = $workSheet->getCell('D'.$i)->getValue();
				$region = $workSheet->getCell('E'.$i)->getValue();
				$empresa = $workSheet->getCell('F'.$i)->getValue();
				$email = $workSheet->getCell('G'.$i)->getValue();
				$direccion = $workSheet->getCell('H'.$i)->getValue();
				$profesion = $workSheet->getCell('I'.$i)->getValue();
				$edad = $workSheet->getCell('J'.$i)->getValue();
				$codigo = $workSheet->getCell('K'.$i)->getValue();
				$tienda = $workSheet->getCell('L'.$i)->getValue();
				$dato1 = $workSheet->getCell('M'.$i)->getValue();
				$dato2 = $workSheet->getCell('N'.$i)->getValue();
				$dato3 = $workSheet->getCell('O'.$i)->getValue();

				$fecha1 = $workSheet->getCell('P'.$i)->getValue();
				$timestamp = PHPExcel_Shared_Date::ExcelToPHP($fecha1);
				$fecha1 = date("d-m-Y", $timestamp);

				$fecha2 = $workSheet->getCell('Q'.$i)->getValue();
				$timestamp = PHPExcel_Shared_Date::ExcelToPHP($fecha2);
				$fecha2 = date("d-m-Y", $timestamp);

				$fecha3 = $workSheet->getCell('R'.$i)->getValue();
				$timestamp = PHPExcel_Shared_Date::ExcelToPHP($fecha3);
				$fecha3 = date("d-m-Y", $timestamp);

				$telefono2 = $workSheet->getCell('S'.$i)->getValue();
				$telefono3 = $workSheet->getCell('T'.$i)->getValue();
				$telefono4 = $workSheet->getCell('U'.$i)->getValue();
				$telefono5 = $workSheet->getCell('V'.$i)->getValue();
				$telefono6 = $workSheet->getCell('W'.$i)->getValue();
				$telefono7 = $workSheet->getCell('X'.$i)->getValue();
				$telefono8 = $workSheet->getCell('Y'.$i)->getValue();
				$telefono9 = $workSheet->getCell('Z'.$i)->getValue();
				$telefono10 = $workSheet->getCell('AA'.$i)->getValue();
				$criterio1 = $workSheet->getCell('AB'.$i)->getValue();
				$criterio2 = $workSheet->getCell('AC'.$i)->getValue();

				//print_r($carga);exit;	

				//se cargan los contactos
				$this->_contacto->addContactos($nombre, $telefono, $this->getInt('encuesta'), $rut, $comuna, $region, $empresa, $email, $direccion, $profesion, $edad, $codigo, $tienda, $dato1, $dato2, $dato3, $fecha1, $fecha2, $fecha3, $telefono2, $telefono3, $telefono4, $telefono5, $telefono6, $telefono7, $telefono8, $telefono9, $telefono10, $criterio1, $criterio2, $carga);
				
				//se crea un registro con la carga realizada
				
			}
			
			$this->redireccionar();		
		}

		$this->_view->renderizar('add');
	}

	//metodo que carga contactos desde la vista de una carga
	public function addContactosEncuesta($encuesta = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		//print_r($encuesta);exit;
		if (!$this->filtrarInt($encuesta)) {
			$this->redireccionar('contactos/add');
		}

		if (!$this->_encuesta->getEncuestaId($this->filtrarInt($encuesta))) {
			$this->redireccionar('contactos/add');
		}

		$this->_view->assign('titulo', 'Carga Contactos');

		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			//print_r($encuesta);exit;
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

				/*
				if (!$encuesta) {
					$this->_view->assign('_error', 'No puede ingresar contactos sin encuesta');
					$this->_view->renderizar('add');
					exit;
				}
				*/
			}

			//registramos la cargapara asociar contactos
			$this->_carga->addCarga(Session::get('id_usuario'), $this->filtrarInt($encuesta));

			//recuperamos el ultimo id ingresado
			$carga = $this->_carga->getUltimaCarga();
			
			//print_r($carga);exit;
			//recuperamos e insertamos los datos
			for ($i=2; $i <= $lastRow ; $i++) { 
				$nombre = $workSheet->getCell('A'.$i)->getValue();
				$telefono = $workSheet->getCell('B'.$i)->getValue();
				//$encuesta = $workSheet->getCell('C'.$i)->getValue();
				$rut = $workSheet->getCell('C'.$i)->getValue();
				$comuna = $workSheet->getCell('D'.$i)->getValue();
				$region = $workSheet->getCell('E'.$i)->getValue();
				$empresa = $workSheet->getCell('F'.$i)->getValue();
				$email = $workSheet->getCell('G'.$i)->getValue();
				$direccion = $workSheet->getCell('H'.$i)->getValue();
				$profesion = $workSheet->getCell('I'.$i)->getValue();
				$edad = $workSheet->getCell('J'.$i)->getValue();
				$codigo = $workSheet->getCell('K'.$i)->getValue();
				$tienda = $workSheet->getCell('L'.$i)->getValue();
				$dato1 = $workSheet->getCell('M'.$i)->getValue();
				$dato2 = $workSheet->getCell('N'.$i)->getValue();
				$dato3 = $workSheet->getCell('O'.$i)->getValue();

				$fecha1 = $workSheet->getCell('P'.$i)->getValue();
				$timestamp = PHPExcel_Shared_Date::ExcelToPHP($fecha1);
				$fecha1 = date("d-m-Y", $timestamp);

				$fecha2 = $workSheet->getCell('Q'.$i)->getValue();
				$timestamp = PHPExcel_Shared_Date::ExcelToPHP($fecha2);
				$fecha2 = date("d-m-Y", $timestamp);

				$fecha3 = $workSheet->getCell('R'.$i)->getValue();
				$timestamp = PHPExcel_Shared_Date::ExcelToPHP($fecha3);
				$fecha3 = date("d-m-Y", $timestamp);

				$telefono2 = $workSheet->getCell('S'.$i)->getValue();
				$telefono3 = $workSheet->getCell('T'.$i)->getValue();
				$telefono4 = $workSheet->getCell('U'.$i)->getValue();
				$telefono5 = $workSheet->getCell('V'.$i)->getValue();
				$telefono6 = $workSheet->getCell('W'.$i)->getValue();
				$telefono7 = $workSheet->getCell('X'.$i)->getValue();
				$telefono8 = $workSheet->getCell('Y'.$i)->getValue();
				$telefono9 = $workSheet->getCell('Z'.$i)->getValue();
				$telefono10 = $workSheet->getCell('AA'.$i)->getValue();
				$criterio1 = $workSheet->getCell('AB'.$i)->getValue();
				$criterio2 = $workSheet->getCell('AC'.$i)->getValue();

				//print_r($carga);exit;	

				//se cargan los contactos
				$this->_contacto->addContactos($nombre, $telefono, $this->filtrarInt($encuesta), $rut, $comuna, $region, $empresa, $email, $direccion, $profesion, $edad, $codigo, $tienda, $dato1, $dato2, $dato3, $fecha1, $fecha2, $fecha3, $telefono2, $telefono3, $telefono4, $telefono5, $telefono6, $telefono7, $telefono8, $telefono9, $telefono10, $criterio1, $criterio2, $carga);
				
				//se crea un registro con la carga realizada
				
			}
			
			$this->redireccionar();		
		}

		$this->_view->renderizar('addContactosEncuesta');
	}
		
	public function cerrar(){
		$this->redireccionar();
	}

//************************************************************************************
	protected function verificarParams($id){
		if (!$this->filtrarInt($id)) {
			$this->redireccionar();
		}

		if (!$this->_carga->getCargaId($this->filtrarInt($id))) {
			$this->redireccionar();
		}
	}
}