<h2>Productos</h2>
<p>
	<?=anchor( "admin/productos/create/" ,"Agregar" ,"class='btn btn-primary'" )?>
</p>
<table class="table table-striped table-bordered" >
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Presentaci&oacute;n</th>
			<th>Precio Fabrica</th>
			<th>Precio Venta</th>
			<th>Estado del producto</th>
			<th>Cantidad</th>
			<th>Fecha de caducidad</th>
			<th colspan="2">Opciones</th>
		</tr>
	</thead>

	<?php
		foreach ($productos as $key => $producto) {
			$val = $producto->status;
			if ($val == '1'){$val = "Activo";}
			else {$val = "Inactivo";}
			echo "
				<tr>
					<td>".$producto->idProducto."</td>
					<td>".$producto->nombre_producto."</td>
					<td>".$producto->presentacion." gms </td>
					<td> $ ".$producto->precio_fabrica."</td>
					<td> $ ".$producto->precio_publico."</td>
					<td>".$val."</td>
					<td>".$producto->cantidad." piezas</td>
					<td>".$producto->fecha_caducidad."</td>
					<td>
						" . anchor( "admin/productos/update/".$producto->idProducto , "Editar" , "class='btn btn-primary'" ) . "
						" . anchor( "admin/productos/delete/".$producto->idProducto , "Eliminar" , "class='btn btn-danger'" ) . "
					</td>
				</tr>
			";
		}
	?>
</table>