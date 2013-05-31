<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Inventario extends My_Controller {

	function __construct() {
		parent::__construct(true);
		$this->setLayout('chofer_vendedor');

		$this->load->model('chofer-vendedor/inventario_model','inventario');
	}

	//el index de ventas del usuario chofer vendedor
	public function index() {
		//cargamos la libreria
		$this -> load -> library('menu');

		//construimos nuestro sidebar
		$data['sidebar'] = $this -> menu -> construirSidebar(
			array(''), //opciones sidebar
			'', //opcion seleccionada
			'chofer-vendedor/inventario', //submenu actual, en este caso inventario
			array(''));

		$data['usuario'] = $this->session->userdata['user']['idUsuario'];
		
		//obtenemos los productos del chofer actual 
		$data['productosChofer'] = $this->inventario->getProductosChofer($data);
		
		$data['output'] = $this->load->view('chofer-vendedor/inventario/index', $data, true);
		
		$this->load->view('chofer-vendedor/inventario/index', $data);

	}
}

?>