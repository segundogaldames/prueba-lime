<?php 
/**
* 
*/
class grabacionesController extends Controller
{
	private $_grabacion;
	private $_encuesta;
	private $_contacto;

	public function __construct(){
		parent::__construct();
		$this->_grabacion = $this->loadModel('grabacion');
		$this->_encuesta = $this->loadModel('encuesta');
		$this->_contacto = $this->loadModel('contacto');
	}

	public function index(){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		$grabaciones = $this->buscarGrabaciones();

		$this->_view->assign('titulo', 'Grabaciones');
		$this->_view->renderizar('index');
	}

	public function view(){

	}

	public function buscarGrabaciones(){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		$this->_view->assign('titulo', 'Buscar Grabaciones');
		$this->_view->assign('encuestas', $this->_encuesta->getEncuestas());
		$this->_view->assign('enviar', CTRL);

		if ($this->getAlphaNum('enviar') == CTRL) {
			$this->_view->assign('datos', $_POST);

			if ($this->getSql('desde')) {
				if (!$this->getSql('hasta')) {
					$this->_view->assign('_error', 'Seleccione una fecha hasta');
					$this->_view->renderizar('buscarGrabaciones');
					exit;
				}

				if (!$this->getInt('encuesta')) {
					$this->_view->assign('_error', 'Seleccione una encuesta');
					$this->_view->renderizar('buscarGrabaciones');
					exit;
				}
				#print_r($this->getSql('desde'));exit;

				#obtiene campaña vicidial a partir del id de una encuesta
				$campaign_vici = $this->_encuesta->getCampaignViciEncuesta($this->getInt('encuesta'));

				if ($campaign_vici['vici'] == NULL) {
					$this->_view->assign('_error', 'Esta encuesta no posee campaña de ViciDial registrada');
					$this->_view->renderizar('buscarGrabaciones');
					exit;
				}

				#obtiene listado de teléfonos por encuesta y encuestados
				$fonos = $this->_contacto->getTelefonosContactosEncuesta($this->getInt('encuesta'));
				#print_r($fonos);exit;


				if (!$fonos) {
					$this->_view->assign('_error', 'Esta encuesta no posee contactos encuestados en las fechas consultadas');
					$this->_view->renderizar('buscarGrabaciones');
					exit;
				}

				$datos = $this->grabacionesMasivas($fonos, $this->getSql('desde'), $this->getSql('hasta'), $campaign_vici['vici']);

				if(!$datos){
					$this->_view->assign('_error', 'No hay grabaciones disponibles para esta encuesta en las fechas solicitadas');
					$this->_view->renderizar('buscarGrabaciones');
					exit;
				}
				
				return $datos;
			}

			if (!$this->getInt('telefono')) {
				$this->_view->assign('_error', 'Si no ha seleccionado fechas debe ingresar un teléfono para consultar');
				$this->_view->renderizar('buscarGrabaciones');
				exit;
			}

			$datos = $this->grabacionesPorTelefono($this->getInt('telefono'));

			if (!$datos) {
				$this->_view->assign('_error', 'No hay grabaciones asociadas a este teléfono');
				$this->_view->renderizar('buscarGrabaciones');
				exit;
			}
			
			return $datos;
		}

		$this->_view->renderizar('buscarGrabaciones');
	}

	public function grabacionesMasivas($fonos, $desde, $hasta, $campaign_vici){
		$this->verificarSession();
		$this->verificarRolAdminSuper();
		#print_r($campaign_vici);exit;

		$acceso = array('user' => 'meta', 'pass' => 'meta-selknam');
		#print_r($acceso);exit;
		$datos = array('phone' => $fonos, 'date_desde' => $desde, 'date_hasta' => $hasta, 'campaign_id' => $campaign_vici);
		#print_r($datos);exit;
		$json_data = json_encode(array('credentials' => $acceso, 'data' => $datos, 'campaign_id' => $campaign_vici));
		#print_r($json_data);exit;
		$url = 'https://190.8.125.182/application/views/phpsysinfo/asdf.php';

		$ch = curl_init();
		//set the url, number of POST vars, POST data
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json', 'Content-Length: ' . strlen($json_data)));
			//execute post
		$result = curl_exec($ch);
	    $result = str_replace('192.168.10.21', '190.8.125.182', $result);
	    $result = str_replace('192.168.30.21', '190.8.125.182', $result);
	    $result = str_replace('192.168.30.23', '190.8.125.180', $result);
		$result = str_replace('http:', 'https:', $result);
		#print_r($result);exit;
		
		//close connection
		curl_close($ch);

		$datos = json_decode($result);
		return $datos;
	}

	public function grabacionesPorTelefono($telefono){
		$this->verificarSession();
		$this->verificarRolAdminSuper();

		$url = BASE_URL.'/public/getGrabacionForNumero.php?n='.$telefono.'&k=temporal';
		

		//open connection
		$ch = curl_init();
		//set the url, number of POST vars, POST data
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		//execute post
		$result = curl_exec($ch);
		//close connection
		curl_close($ch);
		return json_decode($result);
	}
}