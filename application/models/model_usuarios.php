<?php 

class User_model extends CI_Model {

	public function __construct() {

		$this->tableName = 'usuario';
		$this->primaryKey = 'idUsuario';

		parent::__construct();

	}

}

 ?>