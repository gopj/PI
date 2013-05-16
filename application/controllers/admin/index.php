<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends MY_Controller {

	function __construct() {
		parent::__construct();
		
		$this->setLayout('admin');
	}

	public function index(){

		echo "<pre>";
		print_r( $this->session->userdata);
		print($this->session->userdata['user']['perfil']);
		echo "</pre>";

		$this->load->view('index/index');
		
	}

	
}
