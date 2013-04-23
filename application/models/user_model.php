<?php 

class User_model extends My_Model {

	public function __construct() {

		$this->tableName = 'usuarios';
		$this->primaryKey = 'idUsuario';

		parent::__construct();

	}

	public function identificar($nombre_usuario, $clave){

		$identificar = FALSE;

		// Limpiamos los valores de posible inyeccion XSS
		$nombre_usuario = $this->security->xss_clean($nombre_usuario);
		$clave = $this->security->xss_clean($clave);

		// Preparar la consulta
		$this->db->where('nombre_usuario', $nombre_usuario);
		$this->db->where('clave', MD5($clave));
		$this->db->join('tipo_usuarios', "usuarios.idTipo_usuario = tipo_usuarios.idTipo_usuario");
		$this->db->limit(1);

		// Obtenemos el resultado de la consulta
		$query = $this->db->get($this->tableName);

		// Si se encontro un resultado
		if($query->num_rows() == 1){
			// Asignar los valores al record
			$this->record = $query->row_array();
			// Asignar identificacion positiva
			$identificar = TRUE;
		}

		return $identificar;
	}

}

 ?>