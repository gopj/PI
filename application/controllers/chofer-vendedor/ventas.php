<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ventas extends CI_Controller {

	public function __construnct() {
		parent::__construct();

	}

	//el index de ventas del usuario chofer vendedor
	public function index() {
		$this -> load -> model('chofer-vendedor/ventas_model', 'ventas');

		//cargamos la libreria
		$this -> load -> library('menu');

		//Creamos nuestro menu principal y lo asignamos al header
		$data['menu_principal'] = $this -> menu -> construirMenuPrincipal(array('Inicio', 'Acerca de', 'Contacto'), 'Inicio');

		//creamos nuestro menu secundario y lo asignamos a la vista ventas
		$data['menu_secundario'] = $this -> menu -> construirMenuSecundario(array('Ventas', 'Inventario', 'Clientes', 'Registro'), 'Ventas');

		//construimos nuestro sidebar
		$data['sidebar'] = $this -> menu -> construirSidebar(array('Crear venta', 'Cancelar venta', 'Modificar venta'), '');

		//obtenemos las ventas y las mostramos 
		$data['ventas'] = $this -> ventas -> getVentas();

		$data['contenidoPrincipal'] = $this -> load -> view('chofer-vendedor/ventas/index', $data, true);

		$this -> load -> view('chofer-vendedor/layouts/chofer_vendedor', $data);

	}

	public function crearVenta() {
		$this -> load -> model('chofer-vendedor/inventario_model', 'inventario');

		//cargamos la libreria
		$this -> load -> library('menu');

		//Creamos nuestro menu principal y lo asignamos al header
		$data['menu_principal'] = $this -> menu -> construirMenuPrincipal(array('Inicio', 'Acerca de', 'Contacto'), 'Inicio');

		//creamos nuestro menu secundario y lo asignamos a la vista ventas
		$data['menu_secundario'] = $this -> menu -> construirMenuSecundario(array('Ventas', 'Inventario', 'Clientes', 'Registro'), 'Ventas');

		//construimos nuestro sidebar
		$data['sidebar'] = $this -> menu -> construirSidebar(array('Crear venta', 'Cancelar venta', 'Modificar venta'), 'Crear venta');

		//obtenemos las ventas y las mostramos 
		$data['productos'] = $this -> inventario -> getProductos();

		//Obtenemos el contenido de la vista ventas
		$data['contenidoPrincipal'] = $this -> load -> view('chofer-vendedor/ventas/crearVenta', $data, true);

		$this -> load -> view('chofer-vendedor/layouts/chofer_vendedor', $data);
	}

	public function modificarVenta() {
		//cargamos la libreria
		$this -> load -> library('menu');

		//Creamos nuestro menu principal y lo asignamos al header
		$data['menu_principal'] = $this -> menu -> construirMenuPrincipal(array('Inicio', 'Acerca de', 'Contacto'), 'Inicio');

		//creamos nuestro menu secundario y lo asignamos a la vista ventas
		$data['menu_secundario'] = $this -> menu -> construirMenuSecundario(array('Ventas', 'Inventario', 'Clientes', 'Registro'), 'Ventas');

		//construimos nuestro sidebar
		$data['sidebar'] = $this -> menu -> construirSidebar(array('Crear venta', 'Cancelar venta', 'Modificar venta'), 'Modificar venta');

		//Obtenemos el contenido de la vista ventas
		$data['contenidoPrincipal'] = $this -> load -> view('chofer-vendedor/ventas/modificarVenta', $data, true);

		$this -> load -> view('chofer-vendedor/layouts/chofer_vendedor', $data);
	}

	public function cancelarVenta() {
		//cargamos la libreria
		$this -> load -> library('menu');

		//Creamos nuestro menu principal y lo asignamos al header
		$data['menu_principal'] = $this -> menu -> construirMenuPrincipal(array('Inicio', 'Acerca de', 'Contacto'), 'Inicio');

		//creamos nuestro menu secundario y lo asignamos a la vista ventas
		$data['menu_secundario'] = $this -> menu -> construirMenuSecundario(array('Ventas', 'Inventario', 'Clientes', 'Registro'), 'Ventas');

		//construimos nuestro sidebar
		$data['sidebar'] = $this -> menu -> construirSidebar(array('Crear venta', 'Cancelar venta', 'Modificar venta'), 'Cancelar venta');

		//Obtenemos el contenido de la vista ventas
		$data['contenidoPrincipal'] = $this -> load -> view('chofer-vendedor/ventas/cancelarVenta', $data, true);

		$this -> load -> view('chofer-vendedor/layouts/chofer_vendedor', $data);
	}

}
?>