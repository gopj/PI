<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct() {
		parent::__construct();
		
		$this->db = $this->load->database('default', TRUE); 
		$this->load->library('pagination');
		$this->load->model('modelo_paginador', 'modelo');
		$this->load->helper(array('url'));

		$this->load->view('layout/navbar');
		$this->load->view('layout/cssjs');
	}

	public function index(){
		$this->load->view('index');
	}

	
}
