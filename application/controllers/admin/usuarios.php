<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends My_Controller {

	function __construct() {
		parent::__construct(true);

		$this->load->model("user_model","user");
		$this->load->model("perfil_model","perfil");
		$this->load->model("producto_model", "producto");

		$this->setLayout('admin');
	}

	public function index($pag = null){
		
		$data['users'] = $this->user->getAll();	

		$this->load->view('usuarios/index', $data);
	}

	public function create($id = null){

		if ( $this->input->post() ){

			$user = new User_model();

			$user['nombre_usuario'] = $this->input->post("nombre_usuario");
			$user['clave'] = $this->input->post(MD5("clave"));
			$user['idTipo_usuario'] = $this->input->post("idTipo_usuario");

			if ( $user->save() ){

				redirect('admin/usuarios');

			}
		}

		$perfil = new Perfil_model();

		$data['perfil'] = $this->perfil->getByIdAsArray($id);
		$data['perfiles'] = $this->perfil->getAllToSelect();

		$this->load->view("usuarios/create", $data);
	}

	public function update(){
		
	}

	public function delete($id = null){
		$this->user['idUsuario'] = $id;
		if ( $this->user->delete() ){

		}
		redirect("admin/usuarios");
	}	
}
