<?php
class Cliente_model extends My_Model{
	
	public function __construct(){
		$this->tableName = 'clientes';
		$this->primaryKey = 'idCliente';
        // Call the Model constructor
        parent::__construct();
    }

	public function getClientes(){
		//un query que obtiene los cursos
		$query = $this->db->query('
			select cl.idCliente as idCliente, cl.nombre as nombre, cl.direccion as direccion, mu.nombre as idMunicipio , cl.status as status
			from clientes as cl, municipios as mu
			where 
			cl.idMunicipio = mu.idMunicipio;
		');
		//si hay cursos, regresamos los resultados
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