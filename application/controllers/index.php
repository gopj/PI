<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends My_Controller {

	function __construct() {
		parent::__construct();
		$this->setLayout('default');

		$this->load->model("municipio_model", "municipio");
		$this->load->model("cliente_model", "cliente");
	}

	public function index($id = true){

		$municipio = new Municipio_model();
		$cliente = new Cliente_model();


		$data['municipios'] = $this->municipio->getAllToSelect();
		$data['clientes'] = $this->cliente->getByIdToSelect($id);

		$this->load->view('index/index', $data);
	}

	
}
