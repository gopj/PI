<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes extends My_Controller {

	function __construct() {
		parent::__construct();
		
		$this->load->model("cliente_model", "cliente");

		$this->setLayout('admin');
	}

	public function index($pag = null){
		
		$data['clientes'] = $this->cliente->getAll();	

		$this->load->view('clientes/index', $data);
	}

	public function delete($id = null){
		$this->cliente['idCliente'] = $id;
		if ( $this->cliente->delete() ){

		}
		redirect("admin/clientes");
	}	

	
}
