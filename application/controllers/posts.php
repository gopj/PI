<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('postModel');

		$this->db = $this->load->database('default', TRUE); 
		$this->load->library('pagination');
		$this->load->model('modelo_paginador', 'modelo');
		$this->load->helper(array('url'));
	}

	public function index(){
	
		$this->load->view('newPost');

	}

	public function newPost(){

		$data = array(
			"name" => $this->input->post('name'),
			"title" => $this->input->post('title'),
			"content" => $this->input->post('cont')
		);

		$this->db->insert('posts', $data);

		//$this->load->view('newPost');
	}

	public function getPost(){
		//echo "<h3> Posts: </h3>";

		$query_result = $this->postModel->getPosts();
		
		$data = $query_result;

		echo "<pre>";
		print_r($data);
		echo "</pre>";

		foreach ($data as $row) {

  			echo $row['name']."<br>";
  			echo $row['title']."<br>";
  			echo $row['content']."<br>";

  		}

		$this->load->view('verPosts', $data);
	}

	public function getDate(){
		 $dia  = '07';
		 $mes  = '02';
		 $year = '2013';

		$fecha = mktime ($mes, 1, $year);

		@$weekNum = date(“W”) – date(“W”,strtotime(date(“2013-02-07”))) + 1;

		@$numberOfWeek = ceil (($dia + (date (“W”, $fecha) - 1)) / 7);

		echo $weekNum;

	}

}
