<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends My_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('pagination');
		
		$this->setLayout('admin');
	}

	public function index(){

		$this->load->view('index/index');
	}

	
}
