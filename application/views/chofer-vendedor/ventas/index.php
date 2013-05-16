<h2>Ventas del dia</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Usuario</th>
			<th>Cliente</th>
			<th>Fecha</th>
			<th>Total</th>
		</tr>
	</thead>
	<tbody>
<?php 
	//vemos si ventas contiene algo
	if($ventas):
		foreach ($ventas->result() as $venta): 
			?>
				<tr>
					<td>
					<a href="<?= $venta->idVenta; ?>">
							<?= $venta->idVenta; ?> 
						</a>
					</td>
					<td><?= $venta->idUsuario; ?></td>
					<td><?= $venta->idCliente; ?></td>
					<td><?= $venta->fecha_venta; ?></td>
					<td><?= $venta->total; ?></td>
				</tr>
			<?php 
		endforeach;
	else:
		echo "<p>Error en la aplicacion</p>";
	endif;
?>
	</tbody>
</table>
<?php 
		//vemos si cursos contiene algo
		if($productos){
			foreach ($productos->result() as $producto){ ?>
				<ul>
					<li><a href="<?= $producto->idProducto; ?>"> <?= $producto->idProducto; ?> </a></li>
				</ul>
			<?php }
		}else{
			echo "<p>Error en la aplicacion</p>";
		}
?>