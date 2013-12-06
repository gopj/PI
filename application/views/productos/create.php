<?php echo form_open('admin/productos/create', 'class="form-horizontal"'); ?>		
	<h3>Nuevo producto</h3>

	
	<label class="control-label" for="nombre">Nombre Producto:</label>
	<div class="controls">
		<?=form_input('nombre_producto', '', ' id="nombre" placeholder="Nombre del producto"')?> 
	</div> <br />

	<label class="control-label" for="Descripcion">Descripción:</label>
	<div class="controls">
		<?=form_input('descripcion', '', ' id="Descripcion" placeholder="Descripción del producto"')?> 
	</div> <br />

	<label class="control-label" for="precio">Precio:</label>
	<div class="controls">
		<?=form_input('precio', '', ' id="precio" placeholder="Precio de venta"')?> 
	</div> <br />


	<input type="submit" name="save" value="Guardar" class="btn btn-success" />
	<?php echo anchor("admin/productos", "Cancelar", 'class="btn"'); ?>

<?php echo form_close(); ?>
