<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Inventario extends My_Controller {

	public function __construnct() {
		parent::__construct();

	}

	//el index de ventas del usuario chofer vendedor
	public function index() {
		$this->setLayout('chofer_vendedor');

		$this->load->model('chofer-vendedor/inventario_model','inventario');

		//cargamos la libreria
		$this -> load -> library('menu');

		//construimos nuestro sidebar
		$data['sidebar'] = $this -> menu -> construirSidebar(
			array('Ver producto'), //opciones sidebar
			'', //opcion seleccionada
			'chofer-vendedor/inventario', //submenu actual, en este caso ventas
			array('verProducto'));

		$data['usuario'] = $this->session->userdata['user']['idUsuario'];
		$data['fecha'] = date( 'Y-m-d');
		
		//obtenemos los productos del chofer actual 
		$data['productosChofer'] = $this->inventario->getProductosChofer($data);
		
		$data['output'] = $this->load->view('chofer-vendedor/inventario/index', $data, true);
		
		$this->load->view('chofer-vendedor/inventario/index', $data);

	}
}

?>