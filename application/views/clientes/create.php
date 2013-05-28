<div class="span8 offset4">
	<h2>Crear Cliente</h2>

	<?php echo form_open('admin/clientes/create'); ?>

		<label class="control-label" for="nombre">Nombre Cliente:</label>
		<div class="controls">
			<?=form_input('nombre', '', '  id="nombre" placeholder="Nombre del Cliente"')?> <br />
		</div>

		<label class="control-label" for="clave">Dirección:</label>
		<div class="controls">
			<?=form_input('direccion', '', ' id="direccion" placeholder="Dirección"')?> <br />
		</div>

		<label class="control-label" for="clave">Municipio:</label>
		<div class="controls">
			<?=form_dropdown('idMunicipio', $perfiles, @$perfil['nombre']);?>
		</div>

		<br /> <br />

		<input type="submit" name="save" value="Guardar" class="btn btn-success" />
	<?php echo form_close(); ?>
</div>