<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('menu');
		$this->setLayout('jefeVentas');
	}
	public function index(){
		$data['sidebar'] = $this -> menu -> construirSidebar(
			array('Rutas', 'Roles', 'Asignar Clientes a un rol'), 
			'',
			'jefeVentas',
			array('rutas','roles', 'clienteRol'));

		$this->load->view('jefeVentas/index/index', $data);
	}

	
}