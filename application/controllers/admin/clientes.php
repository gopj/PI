<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes extends My_Controller {

	function __construct() {
		parent::__construct(true);
		
		$this->load->model("cliente_model", "cliente");
		$this->load->model("municipio_model","municipio");
		$this->setLayout('admin');
	}

	public function index($pag = null){
		
		$data['clientes'] = $this->cliente->getClientes();	

		$this->load->view('clientes/index', $data);
	}

	public function create($id = null){
		
		if ( $this->input->post() ){

			$client = new Cliente_model();

			$client['nombre'] = $this->input->post("nombre");
			$client['direccion'] = $this->input->post("direccion");
			$client['idMunicipio'] = $this->input->post("idMunicipio");

			if ( $client->save() ){
				redirect('admin/clientes');
			}
		}

		$municipio = new Municipio_model();

		$data['perfil'] = $this->municipio->getByIdAsArray($id);
		$data['perfiles'] = $this->municipio->getAllToSelect();


		$this->load->view("clientes/create", $data);
	}	

	public function update($id = null){
		$data['cliente'] = $this->cliente->getByIdAsArray($id);
		if (is_null($id)){
			redirect("admin/clientes");
		}


		if ( $this->input->post() ){

			$client = new Cliente_model();

			$client['idCliente'] = $id;
			$client['nombre'] = $this->input->post("nombre");
			$client['direccion'] = $this->input->post("direccion");
			$client['idMunicipio'] = $this->input->post("idMunicipio");
			$client['status'] = $this->input->post("estado");

			if ( $client->save() ){
				redirect('admin/clientes');
			}
		}

		$municipio = new Municipio_model();

		$data['perfil'] = $this->municipio->getByIdAsArray($id);
		$data['perfiles'] = $this->municipio->getAllToSelect();


		$this->load->view("clientes/update", $data);
	}

	public function delete($id = null){
		$cl = new Cliente_model();

		$cl['idCliente'] = $id;
		$cl['status'] = 0;

		if ( $cl->save() ){
			redirect('admin/clientes');
		}
	}		

	
}
