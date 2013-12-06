<?php 

class Venta_model extends My_Model {

	public function __construct() {

		$this->tableName = 'ventas';
		$this->primaryKey = 'idVenta';
		$this->load->database();

		parent::__construct();

	}

	public function getLastId(){
    	
		$query = $this->db->query("
			SELECT MAX(idVenta) AS id FROM ventas
		");

		$ret = $query->row();
		
		if($query -> num_rows() > 0) {
			return $ret->id;
		}
		//si no hay regresamos un false
		else{
			return false;	
		}
    }
	
}

?>