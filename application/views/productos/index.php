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
			<th colspan="2">Opciones</th>
		</tr>
	</thead>

	<?php
		foreach ($productos as $key => $producto) {
			echo "
				<tr>
					<td>".$producto->idProducto."</td>
					<td>".$producto->nombre_producto."</td>
					<td>".$producto->presentacion." gms </td>
					<td> $ ".$producto->precio_fabrica."</td>
					<td> $ ".$producto->precio_publico."</td>
					<td>".$producto->status."</td>
					<td>
						" . anchor( "admin/productos/update/".$producto->idProducto , "Editar" , "class='btn btn-primary'" ) . "
						" . anchor( "admin/productos/delete/".$producto->idProducto , "Eliminar" , "class='btn btn-danger'" ) . "
					</td>
				</tr>
			";
		}
	?>
</table>