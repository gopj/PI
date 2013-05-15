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

	
}
