<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Productos extends My_Controller {

	function __construct() {
		parent::__construct(true);
		
		$this->load->model("producto_model", "producto");

		$this->setLayout('admin');
	}

	public function index($pag = null){
		
		$data['productos'] = $this->producto->getAll();

		$this->load->view('productos/index', $data);
	}

	public function delete($id = null){
		$this->producto['idProducto'] = $id;
		if ( $this->producto->delete() ){

		}
		redirect("admin/productos");
	}	

	public function create(){
		if ( $this->input->post() ){
			$product = new producto_model();
			$product['nombre_producto'] = $this->input->post("nombre_producto");
			$product['presentacion'] = ($this->input->post("presentacion"));
			$product['precio_fabrica'] = $this->input->post("precio_fabrica");
			$product['precio_publico'] = $this->input->post("precio_publico");
			$product['status'] = 1;

			if ( $product->save() ){
				redirect('admin/productos');
			}
		}
		$this->load->view("productos/create");
	}	

	public function update($id=true){

		$data['producto'] = $this->producto->getByIdAsArray($id);

		if (is_null($id)){
			redirect("admin/productos");
		}

		if ( $this->input->post() ){
			$product = new producto_model();

			$product['idProducto'] = $id;
			$product['nombre_producto'] = $this->input->post("nombre_producto");
			$product['presentacion'] = $this->input->post("presentacion");
			$product['precio_fabrica'] = $this->input->post("precio_fabrica");
			$product['precio_publico'] = $this->input->post("precio_publico");
			$product['status'] = 1;

			if ( $product->save() ){
				redirect('admin/productos');
			}
		}
		$this->load->view("productos/update",$data);
	}	
	
}
