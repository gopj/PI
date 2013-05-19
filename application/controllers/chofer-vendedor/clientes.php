<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Clientes extends My_Controller {

	public function __construnct() {
		parent::__construct();

	}

	//el index de ventas del usuario chofer vendedor
	public function index() {
		$this->setLayout('chofer_vendedor');

		$this->load->model('chofer-vendedor/clientes_model','clientes');

		//cargamos la libreria
		$this -> load -> library('menu');

		//construimos nuestro sidebar
		$data['sidebar'] = $this -> menu -> construirSidebar(
			array('Ver cliente'), '');

		$data['usuario'] = $this->session->userdata['user']['idUsuario'];
		
		//obtenemos los productos del chofer actual 
		$data['clientesChofer'] = $this->clientes->getClientesChofer($data);
		
		$data['output'] = $this->load->view('chofer-vendedor/clientes/index', $data, true);
		
		$this->load->view('chofer-vendedor/clientes/index', $data);

	}
}

?>