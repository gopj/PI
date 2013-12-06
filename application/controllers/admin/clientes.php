<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes extends My_Controller {

	function __construct() {
		parent::__construct(true);
		
		$this->load->model("cliente_model", "cliente");
		$this->load->library(array('session'));
        $this->load->helper(array('url'));
		$this->setLayout('admin');
	}

	public function index($pag = null){

		if($this->session->userdata['user']['perfil'] == FALSE || $this->session->userdata['user']['perfil'] != '1'){
			redirect(base_url().'login');
		}
		
		$data['clientes'] = $this->cliente->getClientes();	


		$this->load->view('clientes/index', $data);
	}

	public function create($id = null){
		
		if ( $this->input->post() ){

			$client = new Cliente_model();

			$client['nombre'] = $this->input->post("nombre");
			$client['direccion'] = $this->input->post("direccion");
			$client['telefono'] = $this->input->post("telefono");

			if ( $client->save() ){
				redirect('admin/clientes');
			}
		}


		$this->load->view("clientes/create");
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
			$client['telefono'] = $this->input->post("telefono");
			
			if ( $client->save() ){
				redirect('admin/clientes');
			}
		}

		$this->load->view("clientes/update", $data);
	}

	public function delete($id = null){
		$cl = new Cliente_model();

		$cl['idCliente'] = $id;

		if ( $cl->delete() ){
			redirect('admin/clientes');
		}
	}		

	
}
