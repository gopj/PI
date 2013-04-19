<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class postModel extends CI_Model {

	function __construct() {
		parent::__construct();

	}
	

	 function getPosts(){

        $query = $this->db->query("SELECT * FROM posts");
        
        

    }
}
