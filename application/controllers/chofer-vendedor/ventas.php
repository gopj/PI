<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ventas extends My_Controller {

	public function __construnct() {
		parent::__construct();

	}

	//el index de ventas del usuario chofer vendedor
	public function index($pag = null) {
		$this->setLayout('chofer_vendedor');

		$this -> load -> model('chofer-vendedor/ventas_model', 'ventas');

		//cargamos la libreria
		$this -> load -> library('menu');

		//construimos nuestro sidebar
		$data['sidebar'] = $this -> menu -> construirSidebar(
			array('Crear venta', 'Cancelar venta', 'Modificar venta'), '');

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

		$this -> load -> library('menu');

		$data['sidebar'] = $this -> menu -> construirSidebar(
			array('Crear venta', 'Cancelar venta', 'Modificar venta'), 'Crear venta');

		$data['productos'] = $this -> inventario -> getProductos();

		$data['output'] = $this -> load -> view('chofer-vendedor/ventas/crearVenta', $data, true);
		
		$this->load->view('chofer-vendedor/ventas/crearVenta', $data);
	}

	function recibirdatosVenta(){
		if (isset($_POST['productos'])) {
			$data['productos'] = $_POST["productos"];

			$cantidad = 2; 

			$this->load->model('ventas_model','ventas');

			$this->ventas->agregarVenta($data, $cantidad);

			$this->index();

		}else{
			//no se han seleccionado productos 
		}

	}

	public function modificarVenta() {
	
	}

	public function cancelarVenta() {
		
	}

}
?>