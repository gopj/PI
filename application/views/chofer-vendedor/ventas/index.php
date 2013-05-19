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

<p><?php for ($i = 0; $i < count($productos); $i++){ 
	echo $productos[$i];
	echo "<h1>hola</h1>";
} ?>
</p>
<hr>
<p><?php for ($i = 0; $i < count($cantidad); $i++){ 
	echo $cantidad[$i];
	echo "<h1>hola</h1>";
} 
?></p>
<!--<p><?php //echo $cantidad ?></p>
<p><?php //for ($i = 0; $i < count($cantidad); $i++){ echo $cantidad[$i];} ?></p>
<hr>
<p><?= $usuario ?></p>
<p><?= $cliente ?></p>
<p><?= $fecha ?></p>
<p><?= $total ?></p>

<!--<p><?= $id ?></p>-->
