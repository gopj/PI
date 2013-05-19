
	<h2>Clientes</h2>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Direccion</th>
			</tr>
		</thead>
		<tbody>
	<?php 
		//vemos si ventas contiene algo
		if($clientesChofer):
			foreach ($clientesChofer->result() as $cliente): 
				?>
					<tr>
						<td>
						<a href="<?= $cliente->idCliente; ?>">
								<?= $cliente->idCliente; ?> 
							</a>
						</td>
						<td><?= $cliente->nombre; ?></td>
						<td><?= $cliente->direccion; ?></td>
					</tr>
				<?php 
			endforeach;
		else:
			echo "<p>Error en la aplicacion</p>";
		endif;
	?>
		</tbody>
	</table>