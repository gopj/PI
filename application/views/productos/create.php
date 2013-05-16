<div class="span8 offset4">
	<h2>Crear Productos</h2>

	<?php echo form_open('admin/productos/create', 'class="form-horizontal"'); ?>

		<label class="control-label" for="nombre">Nombre Producto:</label>
		<div class="controls">
			<?=form_input('nombre_producto', '', ' id="Nombre_producto" placeholder="Nombre del producto"')?> <br />
		</div>

		<label class="control-label" for="clave">Presentación:</label>
		<div class="controls">
			<?=form_input('presentacion', '', ' id="Presentacion" placeholder="Gramos"')?> <br />
		</div>

		<label class="control-label" for="clave">Precio Fabrica:</label>
		<div class="controls">
			<?=form_input('precio_fabrica', '', ' id="Precio_fabrica" placeholder="Precio de Fabrica"')?> <br />
		</div>

		<label class="control-label" for="clave">Precio Publico:</label>
		<div class="controls">
			<?=form_input('precio_publico', '', ' id="Precio_publico" placeholder="Precio de Publico"')?> <br />
		</div>

		
		<br /> <br />

		<input type="submit" name="save" value="Guardar" class="btn btn-success" />
	<?php echo form_close(); ?>
</div>