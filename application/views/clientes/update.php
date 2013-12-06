<?php echo form_open('admin/clientes/update/'. $cliente['idCliente']);?>

	<h2>Modificar Cliente</h2>

	<label class="control-label" for="nombre">Nombre Cliente:</label>
	<div class="controls">
		<?=form_input('nombre', $cliente['nombre'], '  id="nombre" placeholder="Nombre del Cliente"')?> <br />
	</div>

	<label class="control-label" for="direccion">Dirección:</label>
	<div class="controls">
		<?=form_input('direccion', $cliente['direccion'], ' id="direccion" placeholder="Dirección"')?> <br />
	</div>

	<label class="control-label" for="Telefono">Teléfono:</label>
	<div class="controls">
		<?=form_input('telefono', $cliente['telefono'], ' id="Telefono" placeholder="3132139482"')?> <br />
	</div>

	<input type="submit" name="save" value="Guardar" class="btn btn-success" />
	<?php echo anchor("admin/clientes", "Cancelar", 'class="btn"'); ?>
<?php echo form_close(); ?>