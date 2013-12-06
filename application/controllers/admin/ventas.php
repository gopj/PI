<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ventas extends My_Controller {

	function __construct() {
		parent::__construct(true);
		$this->load->model("cliente_model", "cliente");
		$this->load->model("producto_model", "producto");
		$this->load->model("venta_model", "venta");
		$this->load->model("pago_model", "pago");

		$this->setLayout('admin');
	}

	public function index($pag = null){
		if($this->session->userdata['user']['perfil'] == FALSE || $this->session->userdata['user']['perfil'] != '1'){
			redirect(base_url().'login');
		}

		$data['clientes'] = $this->cliente->getClientes();	

		$this->load->view('ventas/index', $data);
	}

	public function vender($idCliente = null){

		$data['productos'] = $this->producto->getAll();
		$data['clientes'] = $this->cliente->getCliente($idCliente);	
		$data['idCliente'] = $idCliente;

		$this->load->view('ventas/vender', $data);
	}

	public function create($idCliente = null){
		$plazo = $this->input->post('plazo');
		$productos = $this->input->post('idProducto');

		$total = $this->producto->precioDe($productos);

		if ($total == true){
			foreach ($total->result() as $t) {
				$total = $t->total;
				$data['total'] = $total;
			}
		} else {

		}

		$idUsuario = $this->session->userdata['user']['idUsuario'];
		$date = date('Y-m-d');

		if ( $this->input->post() ){

			$venta = new Venta_model();

			$venta['idUsuario'] = $idUsuario;
			$venta['idCliente'] = $idCliente;
			$venta['fecha_venta'] = $date;
			$venta['total'] = $total;

			$venta->save(); 

			$divPlazo = $total / $plazo;
			$idVenta = $this->venta->getLastId();

			for ($i=0; $i < $plazo; $i++) { 
				if ( $this->input->post() ){
					$pago = new Pago_model();

					$pago['idVenta'] = $idVenta;
					$pago['monto'] = $divPlazo;

					$pago->save();
				}
			}

			redirect('admin/ventas');
		}

		

		


		//$this->load->view('ventas/create', $data);

	}

}