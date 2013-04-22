<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends My_Controller {

	function __construct() {
		parent::__construct(true);
	}

	public function index($pag = null){
		$data['usuarios'] = "hola";

		$this->load->view('usuarios/create', $data);
	}

	
}
