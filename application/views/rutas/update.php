<div class="span8 offset4">
	<h2>Modificar Ruta</h2>

	<?php echo form_open('admin/rutas/update/'. $ruta['idRuta'], 'class="form-horizontal"');?>

		<label class="control-label" for="nombre_ruta1">Nombre ruta:</label>
		<div class="controls">
			<?=form_input('nombre_ruta', $ruta['nombre_ruta'], '  id="nombre_ruta1" placeholder="Nombre ruta"')?> <br />
		</div>

		<label class="control-label" for="chofer1">Chofer a cargo:</label>
		<div class="controls">
			<?=form_input('chofer', $ruta['idUsuario'], '  id="chofer1" placeholder="Chofer"')?> <br />
		</div>

		<br /> <br />

		<input type="submit" name="save" value="Guardar" class="btn btn-success" />
	<?php echo form_close(); ?>
</div>