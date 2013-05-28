<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rutas extends My_Controller {

	function __construct() {
		parent::__construct(true);

		$this->load->model("ruta_model","ruta");
		$this->load->model("user_model","user");
		$this->load->model("municipio_model","municipio");
		$this->setLayout('admin');
	}

	public function index($pag = null){
		
		$data['rutas'] = $this->ruta->getRutas();	

		$this->load->view('rutas/index', $data);
	}

	public function create($id = null){

		if ( $this->input->post() ){
			$nombreRuta = $this->input->post("municipio"). ': ' . $this->input->post("nombre_ruta");
			$ruta = new ruta_model();

			$ruta['nombre_ruta'] = $nombreRuta;
			$ruta['idUsuario'] = $this->input->post("chofer");
			if ( $ruta->save() ){

				redirect('admin/rutas');

			}
		}

		$data['mun'] = $this->municipio->getMunicipios();
		$data['nombres'] = $this->user->getChoferes();	
		$this->load->view("rutas/create", $data);
	}

	public function update($id = null){
		//municipio
		$data['ruta'] = $this->ruta->getByIdAsArray($id);
		if (is_null($id)){
			redirect("admin/rutas");
		}
		if ( $this->input->post() ){

			$r = new Ruta_model();
			$nombre = $this->input->post("municipio"). ': ' . $this->input->post("nombre_ruta");;
			$r['idRuta'] = $id;
			$r['nombre_ruta'] = $nombre;
			$r['idUsuario'] = $this->input->post("chofer");

			if ( $r->save() ){

				redirect('admin/rutas');

			}
		}
		$data['mun'] = $this->municipio->getMunicipios();
		$data['nombres'] = $this->user->getChoferes();	
		$this->load->view("rutas/update", $data);
	}

	public function delete($id = null){
		$this->ruta['idRuta'] = $id;
		if ( $this->ruta->delete() ){

		}
		redirect("admin/rutas");
	}	
}
