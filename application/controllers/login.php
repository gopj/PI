<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends My_Controller {

	public function __construct(){
		parent::__construct();
	}
	
	public function index(){

		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$this->load->model("User_model", "user");

			if($this->user->identificar($this->input->post('usuario'), $this->input->post('clave'))){
				// Preparar informacion para la sesion
				$usuario = array(
					'idUsuario' => $user['idUsuario'],
					'perfil' => $user['idTipo_usuario']
				);

				$this->session->set_userdata('user', $usuario);
				redirect("admin/index/");
			} else {
				// Mostrar motivo de error

			}
		}

		$this->load->view('login/index');
	}


	public function logout(){
		$this->session->sess_destroy();
		redirect("index");
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */