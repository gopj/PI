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
}