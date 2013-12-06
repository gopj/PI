<?php
class Cliente_model extends My_Model{
	
	public function __construct(){

		$this->tableName = 'clientes';
		$this->primaryKey = 'idCliente';

		$this->load->database();
        // Call the Model constructor
        parent::__construct();
    }

	public function getClientes(){
		$query = $this->db->query('
			SELECT * FROM clientes
		');
		
		if($query -> num_rows() > 0) {
			return $query;
		}
		//si no hay regresamos un false
		else{
			return false;	
		}
	
	}

	public function getCliente($idCliente){
		$query = $this->db->query("SELECT * from clientes Where idCliente = {$idCliente};");

		if($query -> num_rows() > 0) {
			return $query;
		}
		//si no hay regresamos un false
		else{
			return false;	
		}
	}

	public function getByIdToSelect($id){
		$clientesResult = $this->getAllBy("idMunicipio", $id);
		$clientes = array();
		foreach ($clientesResult as $key => $cliente) {
			$clientes[$cliente->idCliente] = $cliente->nombre;
		}
		return $clientes;
	}

}