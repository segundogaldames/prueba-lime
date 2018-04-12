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
	private $_criterio;
	private $_campoContacto;
	private $_estadoContacto;
	private $_cuota;
	private $_agendamiento;
	
	public function __construct(){
		parent::__construct();
		$this->_contacto = $this->loadModel('contacto');
		$this->_encuesta = $this->loadModel('encuesta');
		$this->_carga = $this->loadModel('carga');
		$this->_estadoLlamada = $this->loadModel('estadollamada');
		$this->_criterio = $this->loadModel('criterio');
		$this->_campoContacto = $this->loadModel('campocontacto');
		$this->_estadoContacto = $this->loadModel('estadocontacto');
		$this->_cuota = $this->loadModel('cuota');
		$this->_agendamiento = $this->loadModel('agendamientoContacto');
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
		$this->_view->assign('enviar', CTRL);
		$this->_view->renderizar('index');
	}

	#metodo que permite contactar a un contacto desde una encuesta y criterio
	public function contactoEncuesta($encuesta = null, $criterio = null){
		$this->verificarSession();

		if (!$this->filtrarInt($encuesta)) {
			$this->redireccionar();
		}

		if (!$this->_encuesta->getEncuestaId($this->filtrarInt($encuesta))) {
			$this->redireccionar();
		}

		#criterio aleatorio asignado cuando no existe criterio via url
		$id_criterio = $this->_criterio->getCriterioPorEncuesta($this->filtrarInt($encuesta));
		
		//se comprueba que existe el criterio
		if ($this->filtrarInt($criterio)) {
			#enviar a la vista el nombre del criterio
			$this->_view->assign('criterio', $this->_criterio->getCriterioId($this->filtrarInt($criterio)));

			//recuperar cuota asociada a un criterio
			$cuota = $this->_cuota->getCuotaEncuestaCriterio($this->filtrarInt($criterio));
			//print_r($cuota);exit;
			if ($cuota) {
				$encuestados = $this->_contacto->getContactosEncuestadosCriterio($cuota['desde'], $cuota['hasta'], $cuota['criterio_id']);
				//print_r($encuestados);exit;
				//se comprueba que la cantidad de encuestados sea menor que la cuota
				if ($encuestados < $cuota['valor']) {
					$contacto = $this->_contacto->getContactoEncuestaAndCriterio($this->filtrarInt($encuesta), $this->filtrarInt($criterio));
					if ($contacto) {
						$this->_view->assign('contacto', $contacto);
					}else{
						throw new Exception("No hay contactos disponibles para este criterio... comuníquelo a su Supervisor", 1);
					}
					
				}else{
					throw new Exception("No hay contactos disponibles... Se ha cumplido la cuota", 1);
					
				}
			}else{
				throw new Exception("No hay contactos disponibles... no hay cuota establecida", 1);
				
			}
			#si no hay criterio
		}
		if ($id_criterio) {
			$cuota = $this->_cuota->getCuotaEncuestaCriterio($id_criterio);
			#print_r($id_criterio);
			if ($cuota) {
				$encuestados = $this->_contacto->getContactosEncuestadosCriterio($cuota['desde'], $cuota['hasta'], $cuota['criterio_id']);
				//print_r($encuestados);exit;
				//se comprueba que la cantidad de encuestados sea menor que la cuota
				if ($encuestados < $cuota['valor']) {
					
					$contacto = $this->_contacto->getContactoEncuestaAndCriterio($this->filtrarInt($encuesta), $id_criterio);

						if ($contacto) {
							$this->_view->assign('contacto', $contacto);
						}else{
							throw new Exception("No hay contactos disponibles para este criterio... Refresque la página o vuelva atrás hasta que salga otro contacto", 1);							
						}
					
				}else{
					throw new Exception("No hay contactos disponibles para este criterio... Refresque la página hasta que salga otro contacto", 1);
					
				}
			}else{
				throw new Exception("No hay contactos disponibles... no hay cuota establecida", 1);
				
			}
		}
		else{
			//se recupera la cuota asociada a la encuesta
			$cuota = $this->_cuota->getCuotasEncuesta($this->filtrarInt($encuesta));
			//print_r($cuota);exit;
			if ($cuota) {
				$encuestados = $this->_contacto->getContactosEncuestadosEncuesta($cuota['desde'], $cuota['hasta'], $cuota['encuesta_id']);
				//print_r($encuestados);exit;
				//se comprueba que la cantidad de encucestados sea menor que la cuota
				if ($encuestados < $cuota['valor']) {

					$contacto = $this->_contacto->getContactoEncuesta($this->filtrarInt($encuesta));

					if ($contacto) {
						$this->_view->assign('contacto', $contacto);
					}else{
						throw new Exception("No hay contactos disponibles para esta encuesta...", 1);
						
					}
					
					#recupera el criterio que viene en el contacto que lanza el sistema
					$criterio = $this->_contacto->getContactoEncuesta($this->filtrarInt($encuesta));
					#consulta el criterio recuperado en la consulta anterior
					$criterio = $this->_criterio->getCriterioId($criterio['criterio']);
					#envia los valores del criterio a la vista
					$this->_view->assign('criterio', $criterio);
				}else{
					throw new Exception("No hay contactos disponibles... Se ha cumplido la cuota", 1);
					
				}
			}else{
				throw new Exception("No hay contactos disponibles... no hay cuota establecida", 1);

			}
			
		}

		$this->_view->assign('titulo', 'Contactar');
		$this->_view->assign('encuesta', $this->_encuesta->getEncuestaId($this->filtrarInt($encuesta)));
		$this->_view->assign('estado_llamadas', $this->_estadoLlamada->getEstadoLlamadas());
		$this->_view->assign('campos', $this->_campoContacto->getCamposContactosEncuesta($this->filtrarInt($encuesta)));
		$this->_view->assign('e_contacto', $this->_estadoContacto->getEstadoContactos());
		$this->_view->assign('enviar', CTRL);


		if ($this->getAlphaNum('enviar') == CTRL) {
			//print_r($_POST);exit;

			if (!$this->getInt('llamada')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción de llamada');
				$this->_view->renderizar('contactoEncuesta');
				exit;
			}

			if ($this->getInt('llamada') == 20) {
				if (!$this->getSql('fecha')) {
					$this->_view->assign('_error', 'Ingrese la fecha del agendamiento');
					$this->_view->renderizar('contactoEncuesta');
					exit;
				}

				if (!$this->getSql('hora')) {
					$this->_view->assign('_error', 'Ingrese la hora del agendamiento');
					$this->_view->renderizar('contactoEncuesta');
					exit;
				}

				$this->_agendamiento->addAgendamiento(
					Session::get('id_usuario'), 
					$this->getInt('contacto'), 
					$this->getSql('fecha'), 
					$this->getSql('hora'),
					$this->filtrarInt($encuesta)
				);
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

			if (Session::get('role_id') == 2) {
				$this->redireccionar('index/ejecutivos');
			}
			
			$this->redireccionar();
		}
		
		$this->_view->renderizar('contactoEncuesta');
	}

	#metodo que permite contactar a un contacto desde una encuesta y contacto
	public function contactar($encuesta = null, $contacto = null, $agendamiento = false){
		//print_r($_GET);exit;
		$this->verificarSession();

		#verificar encuesta
		if (!$this->filtrarInt($encuesta)) {
			$this->redireccionar();
		}

		if (!$this->_encuesta->getEncuestaId($this->filtrarInt($encuesta))) {
			$this->redireccionar();
		}

		#verificar contacto
		if (!$this->filtrarInt($contacto)) {
			$this->redireccionar();
		}

		if (!$this->_contacto->getContactoId($this->filtrarInt($contacto))) {
			$this->redireccionar();
		}


		$this->_view->assign('titulo', 'Contactar');
		$this->_view->assign('contacto', $this->_contacto->getContactoId($this->filtrarInt($contacto)));
		$this->_view->assign('encuesta', $this->_encuesta->getEncuestaId($this->filtrarInt($encuesta)));
		$this->_view->assign('estado_llamadas', $this->_estadoLlamada->getEstadoLlamadas());
		$this->_view->assign('campos', $this->_campoContacto->getCamposContactosEncuesta($this->filtrarInt($encuesta)));
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			//print_r($_POST);exit;

			if (!$this->getInt('llamada')) {
				$this->_view->assign('_error', 'Debe seleccionar una opción de llamada');
				$this->_view->renderizar('contactoEncuesta');
				exit;
			}

			if ($this->filtrarInt($agendamiento)) {
				$this->_agendamiento->editStatus($this->filtrarInt($agendamiento));
			}

			if ($this->getSql('fecha') || $this->getSql('hora')) {
				$this->_agendamiento->addAgendamiento(
					Session::get('id_usuario'), 
					$this->getInt('contacto'), 
					$this->getSql('fecha'), 
					$this->getSql('hora'),
					$this->filtrarInt($encuesta)
				);
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

			if (Session::get('role_id') == 2) {
				$this->redireccionar('index/ejecutivos');
			}
			
			$this->redireccionar();
		}

		$this->_view->renderizar('contactar');
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
		$this->_view->assign('num_estados', $this->_contacto->getCountContactosDisponiblesCarga($this->filtrarInt($id)));
		$this->_view->assign('num_encuestados', $this->_contacto->getCountContactosEncuestadosCarga($this->filtrarInt($id)));
		$this->_view->assign('carga', $this->_carga->getCargaId($this->filtrarInt($id)));
		$this->_view->assign('enviar', CTRL);
		$this->_view->renderizar('contactosCarga');
	}

	public function contactosCargaEstado($carga = null, $estado_contacto = null, $pagina = false){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		if (!$this->filtrarInt($carga)) {
			$this->redireccionar('cargas');
		}

		if (!$this->filtrarInt($estado_contacto)) {
			$this->redireccionar('cargas');
		}

		if (!$this->filtrarInt($pagina)) {
			$pagina = false;
		}else{
			$pagina = $this->filtrarInt($pagina);
		}

		$this->getLibrary('paginador');
		$paginador = new Paginador();

		$this->_view->assign('titulo', 'Contactos Por Estado de Contactos');
		$this->_view->assign('contactos', $paginador->paginar($this->_contacto->getContactosCargaEstadoContacto($this->filtrarInt($carga), $this->filtrarInt($estado_contacto)), $pagina));
		$this->_view->assign('paginacion', $paginador->getView('prueba', 'contactos/contactosCargaEstado/' . $carga . '/' . $estado_contacto));
		$this->_view->assign('num_contactos', $this->_contacto->getCountContactosCountCarga($this->filtrarInt($carga)));
		$this->_view->assign('num_estados', $this->_contacto->getCountContactosDisponiblesCarga($this->filtrarInt($carga)));
		$this->_view->assign('num_encuestados', $this->_contacto->getCountContactosEncuestadosCarga($this->filtrarInt($carga)));
		$this->_view->assign('carga', $this->_carga->getCargaId($this->filtrarInt($carga)));
		$this->_view->assign('enviar', CTRL);
		$this->_view->renderizar('contactosCargaEstado');
	}

	public function view($id = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();
		
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('contactos');
		}

		if (!$this->_contacto->getContactoId($this->filtrarInt($id))) {
			$this->redireccionar('contactos');
		}

		$this->_view->assign('titulo', 'Ver Contacto');
		$this->_view->assign('contacto', $this->_contacto->getContactoId($this->filtrarInt($id)));

		$this->_view->renderizar('view');
	}

	//metodo de busqueda por telefono
	public function resultados(){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		$this->_view->assign('titulo', 'Resultados');
	

		if ($this->getAlphaNum('enviar') == CTRL) {
			//print_r($_POST);exit;
			if (!$this->getInt('telefono')) {
				$this->_view->assign('_error', 'Falta ingresar el número de teléfono');
				$this->_view->renderizar('resultados');
				exit;
			}

			$contacto = $this->_contacto->getContactosTelefono($this->getInt('telefono'));
			//print_r($contacto);exit;

			if ($contacto) {
				$this->_view->assign('contacto', $contacto);
			}else{
				$contacto = $this->_contacto->getContactosTelefonoDos($this->getInt('telefono'));

				if ($contacto) {
					$this->_view->assign('contacto', $contacto);
				}
				
			}
		}

		$this->_view->renderizar('resultados');
	}

	#metodo que muestra contactos por estado de llamada
	public function estadoLlamada($pagina = false){
		$this->verificarSession();
		$this->verificarRolAdminSuper();


		if (!$this->filtrarInt($pagina)) {
			$pagina = false;
		}else{
			$pagina = $this->filtrarInt($pagina);
		}

		$this->getLibrary('paginador');
		$paginador = new Paginador();


		$this->_view->assign('titulo', 'Contactos Por Estado de Llamada');
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			
			if (!$this->getSql('llamada')) {
				$this->_view->assign('_error', 'Debe ingresar el estado de llamada');
				$this->_view->renderizar('estadoLlamada');
				exit;
			}

			$this->_view->assign('contactos', $paginador->paginar($this->_contacto->getContactosEstadoLlamada($this->getSql('llamada')), $pagina));
			$this->_view->assign('paginacion', $paginador->getView('prueba', 'contactos/estadollamada'));

		}

		$this->_view->renderizar('estadoLlamada');
	}

	//metodo que carga contactos desde una encuesta sin criterios
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
		$this->_view->assign('encuesta', $this->_encuesta->getEncuestaId($this->filtrarInt($encuesta)));

		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			//print_r($encuesta);exit;
			$archivo = $_FILES['excel']['name'];
			$ruta_tmp = $_FILES['excel']['tmp_name'];
			//print_r($ruta_tmp);
			$ruta = ROOT . 'public' . DS . 'docs' . DS . $archivo;

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

			$criterio = NULL;
			//registramos la cargapara asociar contactos
			$this->_carga->addCarga(Session::get('id_usuario'), $this->filtrarInt($encuesta), $criterio);

			//recuperamos el ultimo id ingresado
			$carga = $this->_carga->getUltimaCarga();
			
			//print_r($carga);exit;
			//comprobamos que los campos para la encuesta ya existan y si no los guardamos
			$campos = $this->_campoContacto->getCamposContactosEncuesta($this->filtrarInt($encuesta));
			if (!$campos) {
				for ($i=1; $i < 2; $i++) { 
					$nombre = $workSheet->getCell('A'.$i)->getValue();
					$telefono = $workSheet->getCell('B'.$i)->getValue();
					//$encuesta = $workSheet->getCell('C'.$i)->getValue();
					$rut = $workSheet->getCell('C'.$i)->getValue();
					$comuna = $workSheet->getCell('D'.$i)->getValue();
					$region = $workSheet->getCell('E'.$i)->getValue();
					$codigo = $workSheet->getCell('F'.$i)->getValue();
					$dato1 = $workSheet->getCell('G'.$i)->getValue();
					$dato2 = $workSheet->getCell('H'.$i)->getValue();
					$dato3 = $workSheet->getCell('I'.$i)->getValue();
					$dato4 = $workSheet->getCell('J'.$i)->getValue();
					$dato5 = $workSheet->getCell('K'.$i)->getValue();
					$dato6 = $workSheet->getCell('L'.$i)->getValue();
					$dato7 = $workSheet->getCell('M'.$i)->getValue();
					$dato8 = $workSheet->getCell('N'.$i)->getValue();
					$dato9 = $workSheet->getCell('O'.$i)->getValue();
					$dato10 = $workSheet->getCell('P'.$i)->getValue();
					$dato11 = $workSheet->getCell('Q'.$i)->getValue();
					$fecha1 = $workSheet->getCell('R'.$i)->getValue();
					$fecha2 = $workSheet->getCell('S'.$i)->getValue();
					$fecha3 = $workSheet->getCell('T'.$i)->getValue();
					$telefono2 = $workSheet->getCell('U'.$i)->getValue();
					$telefono3 = $workSheet->getCell('V'.$i)->getValue();
					$telefono4 = $workSheet->getCell('W'.$i)->getValue();
					$telefono5 = $workSheet->getCell('X'.$i)->getValue();
					$telefono6 = $workSheet->getCell('Y'.$i)->getValue();
					$telefono7 = $workSheet->getCell('Z'.$i)->getValue();
					$telefono8 = $workSheet->getCell('AA'.$i)->getValue();
					$telefono9 = $workSheet->getCell('AB'.$i)->getValue();
					$telefono10 = $workSheet->getCell('AC'.$i)->getValue();

					$this->_campoContacto->addCampoContacto($nombre, $telefono, $rut, $comuna, $region, $codigo, $dato1, $dato2, $dato3, $dato4, $dato5, $dato6, $dato7, $dato8, $dato9, $dato10, $dato11, $fecha1, $fecha2, $fecha3, $telefono2, $telefono3, $telefono4, $telefono5, $telefono6, $telefono7, $telefono8, $telefono9, $telefono10, $this->filtrarInt($encuesta));
				}
			}
			
			
			//recuperamos e insertamos los datos
			for ($i=2; $i <= $lastRow ; $i++) { 
				$nombre = $workSheet->getCell('A'.$i)->getValue();
				$telefono = $workSheet->getCell('B'.$i)->getValue();
				//$encuesta = $workSheet->getCell('C'.$i)->getValue();
				$rut = $workSheet->getCell('C'.$i)->getValue();
				$comuna = $workSheet->getCell('D'.$i)->getValue();
				$region = $workSheet->getCell('E'.$i)->getValue();
				$codigo = $workSheet->getCell('F'.$i)->getValue();
				$dato1 = $workSheet->getCell('G'.$i)->getValue();
				$dato2 = $workSheet->getCell('H'.$i)->getValue();
				$dato3 = $workSheet->getCell('I'.$i)->getValue();
				$dato4 = $workSheet->getCell('J'.$i)->getValue();
				$dato5 = $workSheet->getCell('K'.$i)->getValue();
				$dato6 = $workSheet->getCell('L'.$i)->getValue();
				$dato7 = $workSheet->getCell('M'.$i)->getValue();
				$dato8 = $workSheet->getCell('N'.$i)->getValue();
				$dato9 = $workSheet->getCell('O'.$i)->getValue();
				$dato10 = $workSheet->getCell('P'.$i)->getValue();
				$dato11 = $workSheet->getCell('Q'.$i)->getValue();

				$fecha1 = $workSheet->getCell('R'.$i)->getValue();
				if ($fecha1) {
					$timestamp = PHPExcel_Shared_Date::ExcelToPHP($fecha1);
					$fecha1 = date("d-m-Y", $timestamp);
				}
				
				$fecha2 = $workSheet->getCell('S'.$i)->getValue();
				if ($fecha2) {
					$timestamp = PHPExcel_Shared_Date::ExcelToPHP($fecha2);
					$fecha2 = date("d-m-Y", $timestamp);
				}
				

				$fecha3 = $workSheet->getCell('T'.$i)->getValue();
				if ($fecha3) {
					$timestamp = PHPExcel_Shared_Date::ExcelToPHP($fecha3);
					$fecha3 = date("d-m-Y", $timestamp);
				}
				

				$telefono2 = $workSheet->getCell('U'.$i)->getValue();
				$telefono3 = $workSheet->getCell('V'.$i)->getValue();
				$telefono4 = $workSheet->getCell('W'.$i)->getValue();
				$telefono5 = $workSheet->getCell('X'.$i)->getValue();
				$telefono6 = $workSheet->getCell('Y'.$i)->getValue();
				$telefono7 = $workSheet->getCell('Z'.$i)->getValue();
				$telefono8 = $workSheet->getCell('AA'.$i)->getValue();
				$telefono9 = $workSheet->getCell('AB'.$i)->getValue();
				$telefono10 = $workSheet->getCell('AC'.$i)->getValue();

				//print_r($carga);exit;	
				$criterio = NULL;
				//se cargan los contactos
				$this->_contacto->addContactos($nombre, $telefono, $this->filtrarInt($encuesta), $rut, $comuna, $region, $codigo, $dato1, $dato2, $dato3, $dato4, $dato5, $dato6, $dato7, $dato8, $dato9, $dato10, $dato11, $fecha1, $fecha2, $fecha3, $telefono2, $telefono3, $telefono4, $telefono5, $telefono6, $telefono7, $telefono8, $telefono9, $telefono10, $carga, $criterio);
				
				//se crea un registro con la carga realizadas
				
			}
			
			$this->redireccionar('cargas');		
		}

		$this->_view->renderizar('addContactosEncuesta');
	}

	public function edit($id = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		if (!$this->filtrarInt($id)) {
			$this->redireccionar('contactos');
		}

		if (!$this->_contacto->getContactoId($this->filtrarInt($id))) {
			$this->redireccionar('contactos');
		}

		$this->_view->assign('titulo', 'Editar Contacto');
		$this->_view->assign('dato', $this->_contacto->getContactoId($this->filtrarInt($id)));
		$this->_view->assign('e_contacto', $this->_estadoContacto->getEstadoContactos());
		$this->_view->assign('e_llamada', $this->_estadoLlamada->getEstadoLlamadas());
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {

			//print_r($_POST);exit;
			if (!$this->getInt('llamada')) {
				$this->_view->assign('_error', 'Debe seleccionar el estado de llamada');
				$this->_view->renderizar('edit');
				exit;
			}

			$row = $this->_estadoLlamada->getEstadoLlamadaId($this->getInt('llamada'));
			$est_contacto = $row['estado_contacto'];

			//print_r($estado_contacto);exit;
			$usuario = NULL;
			$this->_contacto->editContactoContactado(
				$this->filtrarInt($id), 
				$this->filtrarInt($est_contacto), 
				$this->getInt('llamada'), 
				$usuario
			);

			$this->redireccionar('contactos/view/'.$this->filtrarInt($id));
		}

		$this->_view->renderizar('edit');
	}

	#metodo para editar estados de llamada de manera masiva
	public function contactosCargaLlamada($carga = null, $e_llamada = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		if (!$this->filtrarInt($carga)) {
			$this->redireccionar('cargas');
		}

		if (!$this->filtrarInt($e_llamada)) {
			$this->redireccionar('cargas');
		}

		$this->_view->assign('titulo', 'Editar Estado de Llamadas');
		$this->_view->assign('e_llamadas', $this->_estadoLlamada->getEstadoLlamadas());
		$this->_view->assign('estado', $this->_estadoLlamada->getEstadoLlamadaId($this->filtrarInt($e_llamada)));
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			//print_r($_POST);exit;
			if (!$this->getInt('llamada')) {
				$this->_view->assign('_error', 'Debe seleccionar el estado de llamada');
				$this->_view->renderizar('contactosLlamada');
				exit;
			}

			$row = $this->_estadoLlamada->getEstadoLlamadaId($this->getInt('llamada'));
			$est_contacto = $row['estado_contacto'];

			$this->_contacto->editContactosEstadoLlamada(
				$this->filtrarInt($carga), 
				$this->filtrarInt($est_contacto), 
				$this->getInt('llamada'),
				$this->filtrarInt($e_llamada)
			);

			$this->redireccionar('cargas/contactosCarga');
		}

		$this->_view->renderizar('contactosCargaLlamada');
	}

	public function addContactosEncuestaCriterio($encuesta = null, $criterio = null){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		//print_r($encuesta);exit;
		if (!$this->filtrarInt($encuesta)) {
			$this->redireccionar('encuestas');
		}

		if (!$this->_encuesta->getEncuestaId($this->filtrarInt($encuesta))) {
			$this->redireccionar('contactos');
		}

		if (!$this->filtrarInt($criterio)) {
			$this->redireccionar('encuestas');
		}

		if (!$this->_criterio->getCriterioId($this->filtrarInt($criterio))) {
			$this->redireccionar('encuestas');
		}

		$this->_view->assign('titulo', 'Carga Contactos');
		$this->_view->assign('criterio', $this->_criterio->getCriterioId($this->filtrarInt($criterio)));
		$this->_view->assign('encuesta', $this->_encuesta->getEncuestaId($this->filtrarInt($encuesta)));

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
			$this->_carga->addCarga(Session::get('id_usuario'), $this->filtrarInt($encuesta), $this->filtrarInt($criterio));

			//recuperamos el ultimo id ingresado
			$carga = $this->_carga->getUltimaCarga();
			
			//print_r($carga);exit;
			//comprobamos que los campos para la encuesta ya existan y si no los guardamos
			$campos = $this->_campoContacto->getCamposContactosEncuesta($this->filtrarInt($encuesta));
			if (!$campos) {
				for ($i=1; $i < 2; $i++) { 
					$nombre = $workSheet->getCell('A'.$i)->getValue();
					$telefono = $workSheet->getCell('B'.$i)->getValue();
					//$encuesta = $workSheet->getCell('C'.$i)->getValue();
					$rut = $workSheet->getCell('C'.$i)->getValue();
					$comuna = $workSheet->getCell('D'.$i)->getValue();
					$region = $workSheet->getCell('E'.$i)->getValue();
					$codigo = $workSheet->getCell('F'.$i)->getValue();
					$dato1 = $workSheet->getCell('G'.$i)->getValue();
					$dato2 = $workSheet->getCell('H'.$i)->getValue();
					$dato3 = $workSheet->getCell('I'.$i)->getValue();
					$dato4 = $workSheet->getCell('J'.$i)->getValue();
					$dato5 = $workSheet->getCell('K'.$i)->getValue();
					$dato6 = $workSheet->getCell('L'.$i)->getValue();
					$dato7 = $workSheet->getCell('M'.$i)->getValue();
					$dato8 = $workSheet->getCell('N'.$i)->getValue();
					$dato9 = $workSheet->getCell('O'.$i)->getValue();
					$dato10 = $workSheet->getCell('P'.$i)->getValue();
					$dato11 = $workSheet->getCell('Q'.$i)->getValue();
					$fecha1 = $workSheet->getCell('R'.$i)->getValue();
					$fecha2 = $workSheet->getCell('S'.$i)->getValue();
					$fecha3 = $workSheet->getCell('T'.$i)->getValue();
					$telefono2 = $workSheet->getCell('U'.$i)->getValue();
					$telefono3 = $workSheet->getCell('V'.$i)->getValue();
					$telefono4 = $workSheet->getCell('W'.$i)->getValue();
					$telefono5 = $workSheet->getCell('X'.$i)->getValue();
					$telefono6 = $workSheet->getCell('Y'.$i)->getValue();
					$telefono7 = $workSheet->getCell('Z'.$i)->getValue();
					$telefono8 = $workSheet->getCell('AA'.$i)->getValue();
					$telefono9 = $workSheet->getCell('AB'.$i)->getValue();
					$telefono10 = $workSheet->getCell('AC'.$i)->getValue();

					$this->_campoContacto->addCampoContacto($nombre, $telefono, $rut, $comuna, $region, $codigo, $dato1, $dato2, $dato3, $dato4, $dato5, $dato6, $dato7, $dato8, $dato9, $dato10, $dato11, $fecha1, $fecha2, $fecha3, $telefono2, $telefono3, $telefono4, $telefono5, $telefono6, $telefono7, $telefono8, $telefono9, $telefono10, $this->filtrarInt($encuesta));
				}
			}

			//recuperamos e insertamos los datos
			for ($i=2; $i <= $lastRow ; $i++) { 
				$nombre = $workSheet->getCell('A'.$i)->getValue();
				$telefono = $workSheet->getCell('B'.$i)->getValue();
				//$encuesta = $workSheet->getCell('C'.$i)->getValue();
				$rut = $workSheet->getCell('C'.$i)->getValue();
				$comuna = $workSheet->getCell('D'.$i)->getValue();
				$region = $workSheet->getCell('E'.$i)->getValue();
				$codigo = $workSheet->getCell('F'.$i)->getValue();
				$dato1 = $workSheet->getCell('G'.$i)->getValue();
				$dato2 = $workSheet->getCell('H'.$i)->getValue();
				$dato3 = $workSheet->getCell('I'.$i)->getValue();
				$dato4 = $workSheet->getCell('J'.$i)->getValue();
				$dato5 = $workSheet->getCell('K'.$i)->getValue();
				$dato6 = $workSheet->getCell('L'.$i)->getValue();
				$dato7 = $workSheet->getCell('M'.$i)->getValue();
				$dato8 = $workSheet->getCell('N'.$i)->getValue();
				$dato9 = $workSheet->getCell('O'.$i)->getValue();
				$dato10 = $workSheet->getCell('P'.$i)->getValue();
				$dato11 = $workSheet->getCell('Q'.$i)->getValue();

				$fecha1 = $workSheet->getCell('R'.$i)->getValue();
				if ($fecha1) {
					$timestamp = PHPExcel_Shared_Date::ExcelToPHP($fecha1);
					$fecha1 = date("d-m-Y", $timestamp);
				}
				
				$fecha2 = $workSheet->getCell('S'.$i)->getValue();
				if ($fecha2) {
					$timestamp = PHPExcel_Shared_Date::ExcelToPHP($fecha2);
					$fecha2 = date("d-m-Y", $timestamp);
				}
				

				$fecha3 = $workSheet->getCell('T'.$i)->getValue();
				if ($fecha3) {
					$timestamp = PHPExcel_Shared_Date::ExcelToPHP($fecha3);
					$fecha3 = date("d-m-Y", $timestamp);
				}

				$telefono2 = $workSheet->getCell('U'.$i)->getValue();
				$telefono3 = $workSheet->getCell('V'.$i)->getValue();
				$telefono4 = $workSheet->getCell('W'.$i)->getValue();
				$telefono5 = $workSheet->getCell('X'.$i)->getValue();
				$telefono6 = $workSheet->getCell('Y'.$i)->getValue();
				$telefono7 = $workSheet->getCell('Z'.$i)->getValue();
				$telefono8 = $workSheet->getCell('AA'.$i)->getValue();
				$telefono9 = $workSheet->getCell('AB'.$i)->getValue();
				$telefono10 = $workSheet->getCell('AC'.$i)->getValue();

				//print_r($carga);exit;	
				
				//se cargan los contactos
				$this->_contacto->addContactos($nombre, $telefono, $this->filtrarInt($encuesta), $rut, $comuna, $region, $codigo, $dato1, $dato2, $dato3, $dato4, $dato5, $dato6, $dato7, $dato8, $dato9, $dato10, $dato11, $fecha1, $fecha2, $fecha3, $telefono2, $telefono3, $telefono4, $telefono5, $telefono6, $telefono7, $telefono8, $telefono9, $telefono10, $carga, $this->filtrarInt($criterio));
				
				//se crea un registro con la carga realizada
				
			}
			
			$this->redireccionar('cargas');		
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