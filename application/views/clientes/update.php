<div class="span8 offset4">
	<h2>Modificar Cliente</h2>

	<?php echo form_open('admin/clientes/update/'. $cliente['idCliente'], 'class="form-horizontal"'); 
	$activo = $cliente['status'];
	if ($activo == '1'){
		$activo="<option value='1' selected>Activo</option>
		 <option value='0'>Inactivo</option>";
		}
	else{
		 $activo="<option value='1'>Activo</option>
		 <option value='0' selected>Inactivo</option>";
		 }
	?>

		<label class="control-label" for="nombre">Nombre usuario:</label>
		<div class="controls">
			<?=form_input('nombre', $cliente['nombre'], '  id="nombre" placeholder="Nombre del Cliente"')?> <br />
		</div>

		<label class="control-label" for="direccion">Dirección:</label>
		<div class="controls">
			<?=form_input('direccion', $cliente['direccion'], ' id="direccion" placeholder="Dirección"')?> <br />
		</div>

		<label class="control-label" for="idMunicipio">Municipio:</label>
		<div class="controls">
			<?=form_dropdown('idMunicipio', $perfiles, @$perfil['nombre']);?>
		</div>

		<label class="control-label" for="estado">Estado:</label>
		<div class="controls">
			<select name="estado">
				<?php echo $activo; ?>
			</select>
		</div>

		<br /> <br />

		<input type="submit" name="save" value="Guardar" class="btn btn-success" />
	<?php echo form_close(); ?>