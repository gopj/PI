<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Producto extends MY_Controller {

	function __construct() {
		parent::__construct();
		
		$this->db = $this->load->database('pi6', TRUE); 
		$this->load->library('pagination');
		$this->load->helper(array('url'));

		$this->load->view('layout/navbar');
		$this->load->view('layout/cssjs');
	}

	public function index(){
		$this->load->view('index');
	}

	
}
