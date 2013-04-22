<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends My_Controller {

	function __construct() {
		parent::__construct(true);

		$this->load->model("user_model","user");

		$this->setLayout('admin');
	}

	public function index($pag = null){
		
		$data['users'] = $this->user->getAll();	

		$this->load->view('usuarios/index');
	}

	public function create(){

	}

	public function update(){
		
	}

	public function delete(){
		
	}	
}
