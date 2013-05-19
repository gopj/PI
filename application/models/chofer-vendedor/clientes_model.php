<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Clientes_model extends My_Model {
	public function __construct() {
		parent::__construct();
		$this -> load -> database();
	}

	//funcion para obtener los productos que comercializa un chofer especifico
	public function getClientesChofer($data) {
		//obtenemos productos del chofer
		$query = $this->db->query("
			SELECT 
			    c.idCliente,
			    c.nombre as nombre,
			    c.direccion as direccion
			FROM
			    rol_clientes as rc
			INNER JOIN 
			    rol_vendedores as rv ON rc.idRol = rv.idRol 
			INNER JOIN
			    clientes as c ON rc.idCliente = c.idCliente 
			WHERE 
			    rv.idUsuario = ". $data['usuario'] ."
			ORDER BY nombre;
		");
		//si hay productos, regresamos los resultados
		if ($query -> num_rows() > 0) {
			return $query;
		}
		else{
			return false;
		}

	}

	public function getCliente($id){
		//comparamos si los id son iguales 
		$this->db->where('idCliente',$id);
		$query=$this->db->get('clientes');
		if($query -> num_rows() > 0) {
			return $query;
		}
		else{
			return false;	
		}
	}

}
?>