<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends MY_Controller {

	function __construct() {
		parent::__construct();
		
		$this->setLayout('admin');
	}

	public function index(){

		$this->load->view('index/index');
		
	}

	
}
