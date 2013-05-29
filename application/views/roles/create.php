<div class="span8 offset4">
	<h2>Crear Rol</h2>

	<?php echo form_open('admin/roles/create'); ?>

		<label class="control-label" for="roln">Nombre rol:</label>
		<div class="controls">
			<?=form_input('rol', '', ' id="roln" placeholder="Nombre rol"')?> <br />
		</div>



		<label class="control-label" for="perfil">Ruta:</label>
		<div class="controls">
			<?=form_dropdown('ruta', $nombre, @$id['nombre_ruta']);?>
		</div>
		<br /> <br />

		<input type="submit" name="save" value="Guardar" class="btn btn-success" />
	<?php echo form_close(); ?>
</div>