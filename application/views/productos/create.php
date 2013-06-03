<div id="create">
	<?php echo form_open('admin/productos/create'); ?>
		<div class="row-fluid">
			<div class="span6">
				<p><h4> <div class="title">Nuevo producto</h4></p> 
				<input type="hidden" name="" value="">

				<p><label class="control-label" for="Nombre_producto">Nombre Producto:</label>
				<div class="controls">
					<?=form_input('nombre_producto', '', ' id="Nombre_producto" placeholder="Nombre del producto"')?> <br />
				</div></p>

				<p><label class="control-label" for="Presentacion">Presentación:</label>
				<div class="controls">
					<?=form_input('presentacion', '', ' id="Presentacion" placeholder="Gramos"')?> <br />
				</div></p>

				<p><label class="control-label" for="precio_fabrica">Precio Fabrica:</label>
				<div class="controls">
					<?=form_input('precio_fabrica', '', ' id="Precio_fabrica" placeholder="Precio de Fabrica"')?> <br />
				</div></p>

				<p><label class="control-label" for="precio_publico">Precio Publico:</label>
				<div class="controls">
					<?=form_input('precio_publico', '', ' id="Precio_publico" placeholder="Precio de Publico"')?> <br />
				</div></p>

				<p><label class="control-label" for="cantidad">Cantidad:</label>
				<div class="controls">
					<?=form_input('cantidad', '', ' id="cantidad" placeholder="Cantidad"')?> <br />
				</div></p>

				<p><label for="caducidad">Fecha de caducidad: </label>
				<div class="controls">
					<input name="caducidad" type="date" value="2013-05-01"/>
				</div></p>
			</div>
		</div>
	
		<input type="submit" name="save" value="Guardar" class="btn btn-success" />
		<?php echo anchor("admin/productos", "Cancelar", 'class="btn"'); ?>


	</form>

</div>