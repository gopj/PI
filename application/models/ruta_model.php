<?php 

class Ruta_model extends My_Model {

	public function __construct() {

		$this->tableName = 'rutas';
		$this->primaryKey = 'idRuta';
		parent::__construct();

	}
}

 ?>