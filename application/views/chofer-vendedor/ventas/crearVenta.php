 <div class="row-fluid">
	 <div class="span12">
		<h2>Productos disponibles</h2>
		<?= form_open('chofer-vendedor/ventas/recibirdatosVenta', 'class="form-horizontal"'); ?>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Producto</th>
					<th>Presentacion</th>
					<th>Existencia</th>
					<th>Caducidad</th>
					<th>Precio</th>
					<th>Cantidad</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			//vemos si ventas contiene algo
			if($productos):
				foreach ($productos->result() as $producto): 
					if($producto->status == "1"): 
						echo "<tr class='success'>";
					else:
						echo "<tr class='error'>"; 
					endif;
					?>
							<td>
								<a href="<?= $producto->idProducto; ?>">
									<?= $producto->idProducto; ?>
									<input type="checkbox" name="productos[]" value="<?= $producto->idProducto; ?>">
								</a>
							</td>
							<td>
								<?= $producto->nombre_producto; ?>
							</td>
							<td><?= $producto->presentacion; ?></td>
							<td><?= $producto->status; ?></td>
							<td><?= "no hay aun"; ?></td>
							<td><?= $producto->precio_publico; ?></td>
							<td><?= "5"; ?></td>
						</tr>
					<?php 
				endforeach;
			else:
				echo "<p>Error en la aplicacion</p>";
			endif;
		?>
			</tbody>
		</table>
		<input type="submit" name="agregar" value="Agregar al carro" class="btn btn-success" />
		<?= form_close(); ?>
	</div>
</div>

<div class="row-fluid">
	<div class="span12">
		<h2>Productos en compra</h2>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Producto</th>
					<th>Presentacion</th>
					<th>Existencia</th>
					<th>Caducidad</th>
					<th>Precio</th>
					<th>Cantidad</th>
				</tr>
			</thead>
			<tbody>
		
			</tbody>
		</table>
	</div>
</div>
