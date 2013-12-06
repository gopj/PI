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

<?php echo form_open('admin/ventas/create/'.$idCliente, 'class="form-horizontal"'); ?>
 

	

	<?php
		if ($clientes == true){
			foreach ($clientes->result() as $cliente) {

				echo "
					<h2>Venta a ".$cliente->nombre."</h2>
				";
			}
		} else {

		}
	?>

	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable" id="example" aria-describedby="example_info">
		<thead>
			<tr role="row">
				<th>Selecciona</th>
				<th>Nombre</th>
				<th>Descripci&oacute;n</th>
				<th>precio</th>
			</tr>
		</thead>

		<?php
			if ($productos == true){
				foreach ($productos as $key => $producto) {
					echo "
						<tr>
							<td> <input type='checkbox' name='idProducto[]' value='{$producto->idProducto}' > </td>
							<td>".$producto->nombre_producto."</td>
							<td>".$producto->descripcion."</td>
							<td>".$producto->precio."</td>									
						</tr>
					";
				}
			} else {

			}
		?>
	</table>
	<br>

	<label class="control-label" for="Plazo">Plazo:</label>
	<div class="controls">
		<?=form_input('plazo', '', ' id="Plazo" placeholder="Plazo de pago" required')?> 
	</div> <br />

	<input type="submit" name="save" value="Vender" class="btn btn-success" />
	<?php echo anchor("admin/ventas", "Cancelar", 'class="btn"'); ?>

<?php echo form_close(); ?>