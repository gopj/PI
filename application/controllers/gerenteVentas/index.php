<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends MY_Controller {

	function __construct() {
		parent::__construct();
		
		$this->setLayout('gerenteVentas');
	}
	public function index(){

		//cargamos la libreria
		$this->load->library('menu');

		//construimos nuestro sidebar
		$data['sidebar'] = $this -> menu -> construirSidebar(
			array('Una opcion', 'Otra opcion'), '');

		$this->load->view('gerenteVentas/index/index', $data);
	}

	
}