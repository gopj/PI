<div class="span8 offset4">
	<h2>Modificar Producto</h2>

	<?php echo form_open('admin/productos/update/'.$producto['idProducto'], 'class="form-horizontal"'); ?>

		<label class="control-label" for="nombre">Nombre Producto:</label>
		<div class="controls">
			<?=form_input('nombre_producto', $producto['nombre_producto'], ' id="Nombre_producto" placeholder="Nombre del producto"')?> <br />
		</div>

		<label class="control-label" for="clave">Presentación:</label>
		<div class="controls">
			<?=form_input('presentacion', $producto['presentacion'], ' id="Presentacion" placeholder="Gramos"')?> <br />
		</div>

		<label class="control-label" for="clave">Precio Fabrica:</label>
		<div class="controls">
			<?=form_input('precio_fabrica', $producto['precio_fabrica'], ' id="Precio_fabrica" placeholder="Precio de Fabrica"')?> <br />
		</div>

		<label class="control-label" for="clave">Precio Publico:</label>
		<div class="controls">
			<?=form_input('precio_publico', $producto['precio_publico'], ' id="Precio_publico" placeholder="Precio de Publico"')?> <br />
		</div>

		<label class="control-label" for="es">Estado</label>
		<div class="controls">
			<?=form_input('status', $producto['status'], ' id="es" placeholder=""')?> <br />
		</div>

		
		<br /> <br />

		<input type="submit" name="save" value="Guardar" class="btn btn-success" />
	<?php echo form_close(); ?>
</div>