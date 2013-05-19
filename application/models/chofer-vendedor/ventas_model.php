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

	public function agregarVenta($data){
		//agregar la venta realizada en la tabla de venta
		$this->db->insert('ventas',
			array('idUsuario' => $data['usuario'],
			 	  'idCliente' => $data['cliente'],
			 	  'fecha_venta' => $data['fecha'],
			 	  'total' => $data['total']
			 	  )
		);

		$id = $this->db->insert_id();

		for ($i = 0; $i < count($data['productos']); $i++){
			 $this->db->set('idVenta', $id);
			 $this->db->set('idProducto', $data['productos'][$i]);
			 $this->db->set('cantidad', $data['cantidad'][$i]);
			 $this->db->insert('vta_detalles');
		} 
	}

	public function obtenerTotalProductos($productos,$cantidad){
		$total = 0;
		for ($i = 0; $i < count($productos); $i++) {
			$this->db->where('idProducto',$productos[$i]);
			$precio = $this->db->get('productos');
			if($precio -> num_rows() > 0) {
				foreach ($precio->result() as $producto){
					$mul = $producto->precio_publico * $cantidad[$i]; 
				}
				$total = $total + $mul;
			}
		} 
		return $total;
	}

}
?>