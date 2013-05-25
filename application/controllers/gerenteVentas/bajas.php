<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Bajas extends My_Controller {

	public function __construnct() {
		parent::__construct();

	}

	//el index de ventas del usuario chofer vendedor
	public function index($data = null) {
		$this->setLayout('gerenteVentas');

		//cargamos la libreria
		$this -> load -> library('menu');

		//construimos nuestro sidebar
		$data['sidebar'] = $this -> menu -> construirSidebar(
			array('Bajas diaria por producto', 'Bajas diaria por chofer', 'Bajas diaria por ruta','Bajas mensuales'), '');
		
		
		$this->load->view('gerenteVentas/bajas/index', $data);
	}
}
?>