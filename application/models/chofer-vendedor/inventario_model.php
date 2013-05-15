<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Inventario_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this -> load -> database();
	}

	public function getProductos() {
		//un query que obtiene las ventas
		//$query2=$this-> db -> query('');
		$query = $this -> db -> get('productos');
		//si hay ventas, regresamos los resultados
		if ($query -> num_rows() > 0) {
			return $query;
		}
		//si no hay regresamos un false
		else {
			return false;
		}
	}

}
?>