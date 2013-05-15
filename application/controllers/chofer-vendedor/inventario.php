<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Inventario extends CI_Controller {

	public function __construnct() {
		parent::__construct();

	}

	//el index de ventas del usuario chofer vendedor
	public function index() {
		$this->load->model('chofer-vendedor/inventario_model','inventario');

		//cargamos la libreria
		$this -> load -> library('menu');

		//Creamos nuestro menu principal y lo asignamos al header
		$data['menu_principal'] = $this -> menu -> construirMenuPrincipal(
			array('Inicio', 'Acerca de', 'Contacto'), 'Inicio');

		//creamos nuestro menu secundario y lo asignamos a la vista ventas
		$data['menu_secundario'] = $this -> menu -> construirMenuSecundario(
			array('Ventas', 'Inventario', 'Clientes', 'Registro'), 'Inventario');

		//construimos nuestro sidebar
		$data['sidebar'] = $this -> menu -> construirSidebar(
			array('Ver producto'),'');

		//obtenemos las ventas y las mostramos 
		$data['productos'] = $this -> inventario -> getProductos();

		$data['contenidoPrincipal'] = $this -> load -> view('chofer-vendedor/inventario/index', $data, true);

		$this -> load -> view('chofer-vendedor/layouts/chofer_vendedor', $data);

	}
}

?>