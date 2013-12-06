<h2>Usuarios</h2>
<p>
	<?=anchor( "admin/usuarios/create/" ,"Agregar" ,"class='btn btn-primary'" )?>
</p>
<table class="table table-striped table-bordered" >
	<thead>
		<tr>
			<th>Id</th>
			<th>Tipo de usuario</th>
			<th>Nombre</th>
			<th>Opciones</th>
		</tr>
	</thead>

	<?php
		foreach ($users->result() as $user) {
			echo "
				<tr>
					<td>".$user->idUsuario."</td>
					<td>".$user->idTipo_usuario."</td>
					<td>".$user->nombre_usuario."</td>
					<td>
						" . anchor( "admin/usuarios/update/".$user->idUsuario , "Editar" , "class='btn btn-primary'" ) . "
						" . anchor( "admin/usuarios/delete/".$user->idUsuario , "Eliminar" , "class='btn btn-danger'" ) . "
					</td>
				</tr>
			";
		}
	?>
</table>