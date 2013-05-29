
	<h2>Inventario</h2>
	<table class="table table-hover table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Producto</th>
				<th>Presentacion</th>
				<th>Vigente</th>
				<th>Caducidad</th>
				<th>Precio publico</th>
				<th>Cantidad actual</th>
			</tr>
		</thead>
		<tbody>
	<?php 
		//vemos si ventas contiene algo
		if($productosChofer):
			foreach ($productosChofer->result() as $producto): 
				if($producto->status == "1"): 
					echo "<tr class='success'>";
					$existencia = 'Si';
				else:
					echo "<tr class='error'>"; 
					$existencia = 'No';
				endif;
				?>
						<td><?= $producto->idProducto; ?> </td>
						<td><?= $producto->nombre_producto; ?></td>
						<td><?= $producto->presentacion . " gr"; ?></td>
						<td><?= $existencia; ?></td> 
						<td><?= $producto->fecha_caducidad; ?></td> 
						<td><?= $producto->precio_publico; ?></td>
						<td><?= $producto->cantidad; ?></td> 
					</tr>
				<?php 
			endforeach;
		else:
			echo "<p>Error en la aplicacion</p>";
		endif;
	?>
		</tbody>
	</table>

