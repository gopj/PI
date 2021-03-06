<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Productos extends My_Controller {

	function __construct() {
		parent::__construct(true);
		
		$this->load->model("producto_model", "producto");

		$this->setLayout('admin');
	}

	public function index($pag = null){
		
		if($this->session->userdata['user']['perfil'] == FALSE || $this->session->userdata['user']['perfil'] != '1'){
			redirect(base_url().'login');
		}
		
		$data['productos'] = $this->producto->getAll();

		$this->load->view('productos/index', $data);
	}

	public function create(){
		if ( $this->input->post() ){

			$product = new Producto_model();

			$product['nombre_producto'] = $this->input->post("nombre_producto");
			$product['descripcion'] = ($this->input->post("descripcion"));
			$product['precio'] = $this->input->post("precio");
			$product['estado'] = 1;

			if ( $product->save() ){
				redirect('admin/productos');
			}
		}

		$this->load->view("productos/create");
	}	

	public function update($id = null){
		$data = array();

		$data['producto'] = $this->producto->getByIdAsArray($id);

		if (is_null($id)){
			redirect("admin/productos");
		}



		if ( $this->input->post() ){
			$product = new Producto_model();

			$product['idProducto'] = $id;
			$product['nombre_producto'] = $this->input->post("nombre_producto");
			$product['descripcion'] = ($this->input->post("descripcion"));
			$product['precio'] = $this->input->post("precio");
			$product['estado'] = $this->input->post("estado");

			if ( $product->save() ){
				redirect('admin/productos');
			}
		}

		$this->load->view("productos/update",$data);
	}

	public function delete($id = null){
		$product = new Producto_model();

		$product['idProducto'] = $id;
		$product['estado'] = 0;

		if ( $product->delete() ){
			redirect('admin/productos');
		}
	}	

	
	
}
