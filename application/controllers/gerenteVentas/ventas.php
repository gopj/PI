<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ventas extends My_Controller {

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
			array('Venta diaria por producto', 'Venta diaria por chofer', 'Venta diaria por ruta','Ventas mensuales'), '');
		
		
		$this->load->view('gerenteVentas/ventas/index', $data);

	}

}
?>