<?php
class Cliente_model extends My_Model{
	
	public function __construct(){
		$this->tableName = 'clientes';
		$this->primaryKey = 'idCliente';
        // Call the Model constructor
        parent::__construct();
    }

	public function getAllToSelect(){
	/*	$perfilesResult = $this->getAll();
		$perfiles = array();
		foreach ($perfilesResult as $key => $perfil) {
			$perfiles[$perfil->idTipo_usuario] = $perfil->nombre;
		}
		return $perfiles;*/
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