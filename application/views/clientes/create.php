<?php echo form_open('admin/clientes/create', 'class="form-horizontal"');?>
			
	<h3>Nuevo cliente</h3>
		
	<label class="control-label" for="nombre">Nombre Cliente:</label>
	<div class="controls">
		<?=form_input('nombre', '', '  id="nombre" placeholder="Nombre del Cliente"')?> <br />
	</div>

	<label class="control-label" for="clave">Dirección:</label>
	<div class="controls">
		<?=form_input('direccion', '', ' id="direccion" placeholder="Dirección"')?> <br />
	</div>

	<label class="control-label" for="Telefono">Teléfono:</label>
	<div class="controls">
		<?=form_input('telefono', '', ' id="Telefono" placeholder="3142138543"')?> <br />
	</div>

	
	<input type="submit" name="save" value="Guardar" class="btn btn-success" />
	<?php echo anchor("admin/clientes", "Cancelar", 'class="btn"'); ?>

<?php echo form_close(); ?>

