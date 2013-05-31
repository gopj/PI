<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class RolCliente_model extends My_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function insertClienteRol($clientes, $idRol){
		for ($i = 0; $i < count($clientes); $i++){
			$this->db->set('idRol', $idRol);
			$this->db->set('idCliente', $clientes[$i]);
			$this->db->insert('rol_clientes');
		}

	}

}
?>