<h2>Clientes</h2>
<p>
	<?=anchor( "admin/clientes/create/" ,"Agregar" ,"class='btn btn-primary'" )?>
</p>
<table class="table table-striped table-bordered" >
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Direcci&oacute;n</th>
			<th>Municipio</th>
			<th colspan="2">Opciones</th>
		</tr>
	</thead>

	<?php
		foreach ($clientes ->result() as $cliente) {
			$val = $cliente->status;
			if ($val == '1'){$val = "Activo";}
			else {$val = "Inactivo";}
			echo "
				<tr>
					<td>".$cliente->idCliente."</td>
					<td>".$cliente->nombre."</td>
					<td>".$cliente->direccion."</td>
					<td>".$cliente->idMunicipio."</td>
					<td>".$val."</td>					
					<td>
						" . anchor( "admin/clientes/update/".$cliente->idCliente , "Editar" , "class='btn btn-primary'" ) . "
						" . anchor( "admin/clientes/delete/".$cliente->idCliente , "Eliminar" , "class='btn btn-danger'" ) . "
					</td>
				</tr>
			";
		}
	?>
</table>