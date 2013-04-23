<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends My_Controller {

	function __construct() {
		parent::__construct();
		
		$this->setLayout('admin');
	}

	public function index(){

		print_r($_SESSION);

		$this->load->view('index/index');
		
	}

	
}
