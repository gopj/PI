<div class="span8 offset4">
	<h2>Crear Ruta</h2>

	<?php echo form_open('admin/rutas/create', 'class="form-horizontal"'); ?>

		<label class="control-label" for="nombre">Nombre ruta:</label>
		<div class="controls">
			<?=form_input('nombre_ruta', '', '  id="nombre" placeholder="Nombre Ruta"')?> <br />
		</div>

		<label class="control-label" for="user">Chofer a cargo:</label>
		<div class="controls">
			<?=form_input('chofer', '', ' id="user" placeholder="Chofer"')?> <br />
		</div>
		<br /> <br />

		<input type="submit" name="save" value="Guardar" class="btn btn-success" />
	<?php echo form_close(); ?>
</div>