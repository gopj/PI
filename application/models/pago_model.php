<?php 

class Pago_model extends My_Model {

	public function __construct() {

		$this->tableName = 'pagos';
		$this->primaryKey = 'idPago';
		$this->load->database();

		parent::__construct();

	}


}

?>