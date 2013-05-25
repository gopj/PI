<h2>Usuarios</h2>
<p>
	<?=anchor( "admin/rutas/create/" ,"Agregar" ,"class='btn btn-primary'" )?>
</p>
<table class="table table-striped table-bordered" >
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Chofer a cargo</th>
			<th colspan="2">Opciones</th>
		</tr>
	</thead>

	<?php
		foreach ($rutas as $key => $ruta) {
			echo "
				<tr>
					<td>".$ruta->idRuta."</td>
					<td>".$ruta->nombre_ruta."</td>
					<td>".$ruta->idUsuario."</td>
					<td>
						" . anchor( "admin/rutas/update/".$ruta->idRuta , "Editar" , "class='btn btn-primary'" ) . "
						" . anchor( "admin/rutas/delete/".$ruta->idRuta , "Eliminar" , "class='btn btn-danger'" ) . "
					</td>
				</tr>
			";
		}
	?>
</table>