<?php echo form_open('admin/productos/update/'.$producto['idProducto']);
	$activo = $producto['estado'];
	if ($activo == '1'){
		$activo="<option value='1' selected>Activo</option>
		 <option value='0'>Inactivo</option>";
		}
	else{
		 $activo="<option value='1'>Activo</option>
		 <option value='0' selected>Inactivo</option>";
		 }

	?>
		
	<h3>Actulizar producto</h3>

		<label class="control-label" for="Nombre_producto">Nombre Producto:</label>
		<div class="controls">
			<?=form_input('nombre_producto', $producto['nombre_producto'], ' id="Nombre_producto" placeholder="Nombre del producto"')?> <br />
		</div>

		<label class="control-label" for="Descripcion">Descripción:</label>
		<div class="controls">
			<?=form_input('descripcion', $producto['descripcion'], ' id="Descripcion" placeholder="Descripción del producto"')?> <br />
		</div>

		<label class="control-label" for="Precio">Precio:</label>
		<div class="controls">
			<?=form_input('precio', $producto['precio'], ' id="precio" placeholder="Precio del producto"')?> <br />
		</div>


		<label class="control-label" for="status">Estado:</label>
		<div class="controls">
			<select name="estado">
				<?php echo $activo; ?>
			</select>
		</div>

		<input type="submit" name="save" value="Guardar" class="btn btn-success" />
		<?php echo anchor("admin/productos", "Cancelar", 'class="btn"'); ?>
	
<?php echo form_close(); ?>
