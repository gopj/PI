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

<h2>Venta</h2>

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
							" . anchor( "admin/ventas/vender/".$cliente->idCliente , "Vender" , "class='btn btn-primary'" ) . "
							" . anchor( "admin/ventas/reporte/".$cliente->idCliente , "Reporte" , "class='btn btn-primary' " ) . "
						</td>
					</tr>
				";
			}
		} else {

		}
	?>
</table>