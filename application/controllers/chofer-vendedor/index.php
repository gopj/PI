<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends MY_Controller {

	function __construct() {
		parent::__construct();
		
		$this->setLayout('chofer_vendedor');
	}
	public function index(){

		echo "<pre>";
		print_r( $this->session->userdata);
		print($this->session->userdata['user']['perfil']);
		print($this->session->userdata['user']['idUsuario']);
		echo "</pre>";

		//cargamos la libreria
		$this->load->library('menu');

		//construimos nuestro sidebar
		$data['sidebar'] = $this -> menu -> construirSidebar(
			array('Una opcion', 'Otra opcion'), '');

		$data['output'] = $this->load->view('chofer-vendedor/index/index', $data, true);

		$this->load->view('chofer-vendedor/index/index', $data);
		
	}

	
}