<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Ventas_model extends My_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getVentas() {
		//un query que obtiene las ventas
		//$query2=$this-> db -> query('');
		$query = $this->db-> get('ventas');
		//si hay ventas, regresamos los resultados
		if ($query -> num_rows() > 0) {
			return $query;
		}
		//si no hay regresamos un false
		else {
			return false;
		}
	}

	public function agregarVenta($productos, $cantidad){
		//agregar la venta realizada en la tabla de venta
		$this->db->insert('ventas',
			array('idUsuario' => $data['usuario'],
			 	  'idCliente' => $data['cliente'],
			 	  'fecha_venta' => $data['fecha'],
			 	  'total' => $data['total']
			 	  )
		);

		for ($i = 0; $i < count($productos); $i++) {
			$this->db->insert('vta_detalles',
				array('idVenta' => $data['venta'],
				 	  'idProducto' => $data['producto'],
				 	  'cantidad' => $data['cantidad'],
				 	  )
			);
		} 
	}

}
?>