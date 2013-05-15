<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Ventas_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this -> load -> database();
	}

	public function getVentas() {
		//un query que obtiene las ventas
		//$query2=$this-> db -> query('');
		$query = $this -> db -> get('ventas');
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