 <div class="span3">
 	<div class="well">
 	<h4>Crear venta</h2>
 	<form>
	    <label for="producto">
	    	Producto: 	
	    </label>
	    <input class="input-small" type="text" placeholder="Producto" id="producto">
	    <label for="cantidad">
	    	Cantidad: 
	    </label>
	    <input class="input-small" type="text" placeholder="Cantidad" id="cantidad">
	    <button type="submit" class="btn">Submit</button>
	</form>
	</div>
 </div>
 <div class="span9">
	<h2>Productos en carro</h2>
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
		if($productos):
			foreach ($productos->result() as $producto): 
				if($producto->status == "disponible"): 
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
</div>
