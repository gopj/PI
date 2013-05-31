<h2>Roles</h2>
<table class="table table-striped table-bordered" >
	<thead>
		<tr>
			<th>Id Cliente</th>
			<th>Cliente</th>
			<th>Dirección</th>
			<th>Municipio</th>
			<th>Opciones</th>
		</tr>
	</thead>

	<?php
		foreach ($clientes ->result() as $Cliente) {
			echo "
				<tr>
					<td>".$Cliente->idCliente."</td>
					<td>".$Cliente->nombre."</td>
					<td>".$Cliente->direccion."</td>
					<td>".$Cliente->idMunicipio."</td>
					<td>
						" . anchor( "jefeVentas/clienteRol/delete/".$Cliente->idRol_cliente , "Eliminar de este rol" , "class='btn btn-primary'" ) . "
					</td>
				</tr>
			";
		}
	?>
</table>