<script type="text/javascript">
	$(document).ready(function() {
		$('#example').dataTable( {
			"sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>"
		} );
	} );

	$.extend( $.fn.dataTableExt.oStdClasses, {
		"sWrapper": "dataTables_wrapper form-inline"
	} );
</script>


<h2>Clientes</h2>
<p>
	<?=anchor( "admin/clientes/create/" ,"Agregar" ,"class='btn btn-primary'" )?>
</p>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable" id="example" aria-describedby="example_info">
	<thead>
		<tr role="row">
			<th>Id</th>
			<th>Nombre</th>
			<th>Direcci&oacute;n</th>
			<th>Tel&eacute;fono</th>
			<th>Opciones</th>
		</tr>
	</thead>

	<?php
		if ($clientes == true){
			foreach ($clientes->result() as $cliente) {
				echo "
					<tr>
						<td>".$cliente->idCliente."</td>
						<td>".$cliente->nombre."</td>
						<td>".$cliente->direccion."</td>
						<td>".$cliente->telefono."</td>									
						<td>
							" . anchor( "admin/clientes/update/".$cliente->idCliente , "Editar" , "data-toggle='update' class='btn btn-primary'" ) . "
							" . anchor( "#dDelete" , "Eliminar" , "class='btn btn-danger' data-toggle='modal'" ) . "
						</td>
					</tr>
				";
			}
		} else {

		}
	?>
</table>

<div id="dDelete" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Eliminar</h3>
	</div>
	<div class="modal-body">
		<p>¿Estas seguro que deseas eliminar el cliente?</p>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
		<?php echo anchor( "admin/clientes/delete/".$cliente->idCliente, "Eliminar" , "class='btn btn-danger'" ); ?>
	</div>
</div>
