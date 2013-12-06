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

    public function getVentaById($idCliente){
    	
		$query = $this->db->query("
			SELECT *
			FROM ventas
			WHERE idCliente = {$idCliente};
		");

		if($query -> num_rows() > 0) {
			return $query;
		}
		//si no hay regresamos un false
		else{
			return false;	
		}
    }
	
}

?>