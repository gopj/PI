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
					<h2>Detalle ".$cliente->nombre."</h2>
				";
			}
		} else {

		}
	?>

	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable" id="example" aria-describedby="example_info">
		<thead>
			<tr role="row">
				<th width="30">No pago</th>
				<th>Monto</th>
				<th width="140" >Opciones</th>
			</tr>
		</thead>

		<?php
			$x = 1;
			foreach ($detalles->result() as $detalle) {
				echo "
					<tr>
						<td>".$x."</td>
						<td> $". $detalle->monto."</td>
						<td>
							" . anchor( "admin/ventas/pagado/".$detalle->idPago , "Pagar" , " class='btn btn-success'" ) . "
						</td>
					</tr>
				";
				$x += 1;
			}

		?> 
	</table>
	<br>
	<?php echo anchor("admin/ventas/reporte/".$idCliente, "Cancelar", 'class="btn"'); ?>