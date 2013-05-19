
	<h2>Inventario</h2>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Producto</th>
				<th>Presentacion</th>
				<th>Existencia</th>
				<th>Caducidad</th>
				<th>Precio publico</th>
			</tr>
		</thead>
		<tbody>
	<?php 
		//vemos si ventas contiene algo
		if($productosChofer):
			foreach ($productosChofer->result() as $producto): 
				if($producto->status == "1"): 
					echo "<tr class='success'>";
				else:
					echo "<tr class='error'>"; 
				endif;
				?>
						<td>
						<a href="<?= $producto->idProducto; ?>">
								<?= $producto->idProducto; ?> 
							</a>
						</td>
						<td><?= $producto->nombre_producto; ?></td>
						<td><?= $producto->presentacion; ?></td>
						<td><?= $producto->status; ?></td>
						<td><?= "no hay aun"; ?></td>
						<td><?= $producto->precio_publico; ?></td>
					</tr>
				<?php 
			endforeach;
		else:
			echo "<p>Error en la aplicacion</p>";
		endif;
	?>
		</tbody>
	</table>

