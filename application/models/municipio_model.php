<?php 

class Municipio_model extends My_Model {

	public function __construct() {

		$this->tableName = 'municipios';
		$this->primaryKey = 'idMunicipio';

		parent::__construct();

	}

	public function getAllToSelect(){
		$municipiosResult = $this->getAll();
		$municipios = array();
		foreach ($municipioResult as $key => $municipio) {
			$municipios[$municipio->idMunicipio] = $municipio->nombre;
		}
		return $municipios;
	}

}

 ?>