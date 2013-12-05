<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class RpCliente extends My_Controller {

	function __construct() {
		parent::__construct(true);

		$this->setLayout('admin');

	}

	//el index de ventas del usuario chofer vendedor
	public function index() {
		if ($this->session->userdata['user']['perfil'] != '1'){
			if ($this->session->userdata['user']['perfil'] == FALSE || $this->session->userdata['user']['perfil'] != '1'){
				redirect(base_url().'login');
			}
		}
		$this->load->view('rpCliente/index');

	}


	
}
?>