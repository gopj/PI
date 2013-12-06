<?php
class Producto_model extends My_Model{
	
	public function __construct(){
		$this->tableName = 'productos';
		$this->primaryKey = 'idProducto';
        // Call the Model constructor
        parent::__construct();
    }

    public function precioDe($idProd){
    	$sQuery = "";

    	for ($i=0; $i < count($idProd) ; $i++) { 

	    	if (($i+1) == count($idProd)) {
	    		$sQuery .= " idProducto = {$idProd[$i]} ;";
	    	} else {
	    		$sQuery .= " idProducto = {$idProd[$i]} OR";
	    	}

    	}

		$query = $this->db->query("
			SELECT sum(precio) as total
			FROM productos
			WHERE 
			{$sQuery}
		");

		
		if($query -> num_rows() > 0) {
			return $query;
		}
		//si no hay regresamos un false
		else{
			return false;	
		}
    }


}