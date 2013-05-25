<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ventas extends My_Controller {

	public function __construnct() {
		parent::__construct();

	}

	//el index de ventas del usuario chofer vendedor
	public function index($data = null) {
		$this->setLayout('chofer_vendedor');

		$this -> load -> model('chofer-vendedor/ventas_model', 'ventas');

		//cargamos la libreria
		$this -> load -> library('menu');

		//construimos nuestro sidebar
		$data['sidebar'] = $this -> menu -> construirSidebar(
			array('Crear venta', 'Ver detalles venta'), //opciones sidebar
			'', //opcion seleccionada
			'chofer-vendedor/ventas', //submenu actual, en este caso ventas
			array('crearVenta','verDetallesVenta'));

		//obtenemos las ventas y las mostramos */
		$data['ventas'] = $this -> ventas -> getVentas();
		
		$data['output'] = $this->load->view('chofer-vendedor/ventas/index', $data, true);
		
		$this->load->view('chofer-vendedor/ventas/index', $data);

	}

	public function obtenerProducto(){
		$this -> load -> model('chofer-vendedor/inventario_model', 'inventario');

		$data['segmento'] = 1;

		if(!$data['segmento']){
			$data['productos'] = $this->inventario->getProductos();
		}
		else{
			$data['productos'] = $this->inventario->getProducto($data['segmento']);
		}

		$this->load->view('chofer-vendedor/ventas/index', $data);
	}

	public function crearVenta() {
		$this->setLayout('chofer_vendedor');

		$this -> load -> model('chofer-vendedor/inventario_model', 'inventario');

		$this -> load -> model('cliente_model', 'cliente');

		$this -> load -> library('menu');

		$data['sidebar'] = $this -> menu -> construirSidebar(
			array('Crear venta', 'Ver detalles venta'), //opciones sidebar
			'Crear venta', //opcion seleccionada
			'chofer-vendedor/ventas', //submenu actual, en este caso ventas
			array('crearVenta','verDetallesVenta'));

		//obtenemos los clientes 
		$data['clientes'] = $this -> cliente -> getClientes();

		//datos del usuario actual, y fecha
		$data['usuario'] = $this->session->userdata['user']['idUsuario'];
		$data['fecha'] = date( 'Y-m-d');

		//obtenemos los productos del chofer actual
		$data['productos'] = $this -> inventario -> getProductosChofer($data);

		$data['output'] = $this -> load -> view('chofer-vendedor/ventas/crearVenta', $data, true);
		
		$this->load->view('chofer-vendedor/ventas/crearVenta', $data);
	}

	function recibirdatosVenta(){

		if (isset($_POST['productos']) && isset($_POST['cliente']) && isset($_POST['cantidadComprar'])) {
			
			$this->load->model('chofer-vendedor/ventas_model', 'ventas');

			//idVenta, idProducto, cantidad
			$data['productos'] = $_POST["productos"];
			$productos = $_POST["productos"];
			$data['cantidad'] = $_POST["cantidadComprar"]; 
			$cantidad = $_POST["cantidadComprar"]; 
			
			//idUsuaurio, idCliente, fecha, total	
			$data['usuario'] = $this->session->userdata['user']['idUsuario'];
			$data['cliente'] = $_POST["cliente"];
			$data['fecha'] = date( 'Y-m-d');
			$data['total'] = $this->ventas->obtenerTotalProductos($productos,$cantidad);

			$this->ventas->agregarVenta($data);

			$this->index($data);
			//redirect('chofer-vendedor/ventas', $data);

		}else{
			//no se han seleccionado productos 
		}

	}

	public function verDetallesVenta(){

		
	}
}
?>