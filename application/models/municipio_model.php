<?php
class Municipio_model extends My_Model{
	  
	public function __construct(){
		$this->tableName = 'municipios';
		$this->primaryKey = 'idMunicipio';
        // Call the Model constructor
        parent::__construct();
    }

	public function getAllToSelect(){
		$muniResult = $this->getAll();
		$muni = array();
		foreach ($muniResult as $key => $municipio) {
			$muni[$municipio->idMunicipio] = $municipio->nombre;
		}
		return $muni;
	}
}

	