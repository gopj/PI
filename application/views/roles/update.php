<div class="span8 offset4">
	<h2>Modificar Rol</h2>

	<?php echo form_open('admin/roles/update/'. $rol['idRol']);?>

		<label class="control-label" for="rol1">Nombre rol:</label>
		<div class="controls">
			<?=form_input('nombre_rol', $rol['dia'], '  id="rol1" placeholder="Nombre ruta"')?> <br />
		</div>

		<label class="control-label" for="perfil">Nombre Ruta:</label>
		<div class="controls">
			<?=form_dropdown('nombreRuta', $perfiles, @$perfil['nombre_ruta']);?>
		</div>

		<br /> <br />

		<input type="submit" name="save" value="Guardar" class="btn btn-success" />
	<?php echo form_close(); ?>
</div>