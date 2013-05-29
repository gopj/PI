<?php 

class Rol_model extends My_Model {

	public function __construct() {

		$this->tableName = 'roles';
		$this->primaryKey = 'idRol';
		$this->load->database();
		parent::__construct();
	}

	public function getRoles(){

		$query = $this->db->query('
			select ro.idRol as idRol, ro.dia as dia, ru.nombre_ruta as nombre 
			from roles as ro, rutas as ru
			where 
			ro.idRuta = ru.idRuta;
		');
		return $query;
	}
}

 ?>