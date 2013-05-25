<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rutas extends My_Controller {

	function __construct() {
		parent::__construct(true);

		$this->load->model("ruta_model","ruta");
		$this->setLayout('admin');
	}

	public function index($pag = null){
		
		$data['rutas'] = $this->ruta->getAll();	

		$this->load->view('rutas/index', $data);
	}

	public function create($id = null){

		if ( $this->input->post() ){

			$ruta = new ruta_model();

			$ruta['nombre_ruta'] = $this->input->post("nombre_ruta");
			$ruta['idUsuario'] = $this->input->post("chofer");
			if ( $ruta->save() ){

				redirect('admin/rutas');

			}
		}

		//$perfil = new Perfil_model();

		//$data['perfil'] = $this->perfil->getByIdAsArray($id);
		//$data['perfiles'] = $this->perfil->getAllToSelect();

		$this->load->view("rutas/create");
	}

	public function update($id = null){
		$data['ruta'] = $this->ruta->getByIdAsArray($id);
		if (is_null($id)){
			redirect("admin/rutas");
		}
		if ( $this->input->post() ){

			$r = new Ruta_model();

			$r['idRuta'] = $id;
			$r['nombre_ruta'] = $this->input->post("nombre_ruta");
			$r['idUsuario'] = $this->input->post("chofer");

			if ( $r->save() ){

				redirect('admin/rutas');

			}
		}
		$this->load->view("rutas/update", $data);
	}

	public function delete($id = null){
		$this->ruta['idRuta'] = $id;
		if ( $this->ruta->delete() ){

		}
		redirect("admin/rutas");
	}	
}
