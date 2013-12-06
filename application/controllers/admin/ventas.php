<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ventas extends My_Controller {

	function __construct() {
		parent::__construct(true);
		
		$this->load->model("venta_model", "venta");

		$this->setLayout('admin');
	}

	public function index($pag = null){
		
	}

}