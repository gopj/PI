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
			<th colspan="2">Opciones</th>
		</tr>
	</thead>

	<?php
		foreach ($clientes as $key => $cliente) {
			echo "
				<tr>
					<td>".$cliente->idCliente."</td>
					<td>".$cliente->nombre."</td>
					<td>".$cliente->direccion."</td>
					
					<td>
						" . anchor( "admin/clientes/update/".$cliente->idCliente , "Editar" , "class='btn btn-primary'" ) . "
						" . anchor( "admin/clientes/delete/".$cliente->idCliente , "Eliminar" , "class='btn btn-danger'" ) . "
					</td>
				</tr>
			";
		}
	?>
</table>