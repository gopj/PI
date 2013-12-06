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

 
	<?php
		if ($clientes == true){
			foreach ($clientes->result() as $cliente) {

				echo "
					<h2>Reporte de ".$cliente->nombre."</h2>
				";

			}
		} else {

		}
	?>

	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable" id="example" aria-describedby="example_info">
		<thead>
			<tr role="row">
				<th width="30">No Venta</th>
				<th>Fecha</th>
				<th>total</th>
				<th width="140" >Opciones</th>
			</tr>
		</thead>

		<?php
			$x = 1;
			foreach ($ventas->result() as $venta) {
				echo "
					<tr>
						<td>".$x."</td>
						<td>".$venta->fecha_venta."</td>
						<td>".$venta->total."</td>
						<td>
							" . anchor( "admin/ventas/detalle/".$venta->idVenta."/".$idCliente , "Detalle" , "data-toggle='update' class='btn btn-primary'" ) . "
						</td>
					</tr>
				";

				$x = $x+1;
			}
		?> 
	</table>
	<br>
	<?php echo anchor("admin/ventas", "Cancelar", ' class="btn"'); ?>