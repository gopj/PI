<?php 

class Pago_model extends My_Model {

	public function __construct() {

		$this->tableName = 'pagos';
		$this->primaryKey = 'idPago';
		$this->load->database();

		parent::__construct();

	}


	public function getPagoById($idVenta){
		$query = $this->db->query("
			SELECT p.idPago, v.idCliente, p.idVenta, p.monto 
			FROM pagos p, ventas v
			WHERE v.idVenta = p.idVenta AND v.idVenta = {$idVenta}  ;
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