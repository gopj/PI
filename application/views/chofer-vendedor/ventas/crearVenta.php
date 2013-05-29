<!--<?php
 /*if($incompleto==true):
 	?>
 	<div class="alert fade in">
		<button type="button" class="close" data-dismiss="alert">
			&times;
		</button>
		<h4 class="alert-heading">Porfavor!</h4>
		<p>
			Llena los campos correspondientes
		</p>
	</div>
<?php
 endif;*/
?>-->
<?= form_open('chofer-vendedor/ventas/recibirdatosVenta', 'class="form-horizontal"'); ?>
 <div class="row-fluid">
	 <div class="span12">
	 	<h2>1.- Seleccionar cliente</h2>
	 	<div class="accordion" id="accordion2">
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
				 title="Selecciona cliente" href="#clientes"> Clientes </a>
			</div>
			<div id="clientes" class="accordion-body collapse">
				<div class="accordion-inner">
				 	<table class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nombre</th>
								<th>Direccion</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						//vemos si ventas contiene algo
						if($clientes):
							foreach ($clientes->result() as $cliente): 
								?>
									<tr disabled>
										<td>
												<?= $cliente->idCliente; ?>
												<input type="radio" name="cliente" value="<?= $cliente->idCliente; ?>">
											</a>
										</td>
										<td><?= $cliente->nombre; ?></td>
										<td><?= $cliente->direccion; ?></td>
									</tr>
								<?php 
							endforeach;
						else:
							echo "<p>Error en la aplicacion</p>";
						endif;
					?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	 </div>
 </div>
 <div class="row-fluid">
	 <div class="span12">
		<h2>2.- Productos a comprar</h2>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
				 title="Selecciona los productos" href="#productos"> Productos a comprar </a>
			</div>
			<div id="productos" class="accordion-body collapse">
				<div class="accordion-inner">
					<table class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th>Id</th>
								<th>Producto</th>
								<th>Presentacion</th>
								<th>Caducidad</th>
								<th>Precio</th>
								<th>Cantidad actual</th>
								<th>Cantidad comprar</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						//vemos si ventas contiene algo
						if($productos):
							$i = 1;
							foreach ($productos->result() as $producto): 
								
								if($producto->status == "1"): 
									echo "<tr class='success'>";
								else:
									echo "<tr class='error'>"; 
								endif;
								?>
										<td>
											<?= $producto->idProducto; ?>
											<input type="checkbox" name="productos[]" id="check<?=$i?>" onclick="habilitarInput(check<?=$i?>,cantidad<?=$i?>)" value="<?= $producto->idProducto; ?>">
										</td>
										<td>
											<?= $producto->nombre_producto; ?>
										</td>
										<td><?= $producto->presentacion . " gr"; ?></td>
										<td><?= $producto->fecha_caducidad; ?></td> 
										<td><?= $producto->precio_publico; ?></td>
										<td><?= $producto->cantidad; ?></td> 
										<td><input type="text" class="input-small" id="cantidad<?=$i?>"   name="cantidadComprar[]" disabled="true" /></td>
									</tr>
								<?php 
								$i++;
							endforeach;
						else:
							echo "<p>Error en la aplicacion</p>";
						endif;
					?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span12">
		<h2>3.- Agregar producto caducado</h2>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
				 title="Productos expirados" href="#productosEx"> Lista productos </a>
			</div>
			<div id="productosEx" class="accordion-body collapse">
				<div class="accordion-inner">
					<table class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th>Id</th>
								<th>Producto</th>
								<th>Presentacion</th>
								<th>Precio</th>
								<th>Caducidad</th>
								<th>Cantidad devolver</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						//vemos si ventas contiene algo
						if($todosProductos):
							$i = 1;
							foreach ($todosProductos->result() as $producto): 
								if($producto->status == "1"): 
									echo "<tr class='success'>";
								else:
									echo "<tr class='error'>"; 
								endif;
								?>
										<td>
											<?= $producto->idProducto; ?>
											<input type="checkbox" name="productosT[]" id="checkT<?=$i?>" 
											onclick="habilitarInput(checkT<?=$i?>,cantidadT<?=$i?>)" 
											value="<?= $producto->idProducto; ?>">
										</td>
										<td>
											<?= $producto->nombre_producto; ?>
										</td>
										<td><?= $producto->presentacion . " gr"; ?></td> 
										<td><?= $producto->precio_publico; ?></td> 
										<td><?= $producto->fecha_caducidad; ?></td> 
										<td>	
											<input type="text" class="input-small" id="cantidadT<?=$i?>" 
											name="cantidadCaducados[]" disabled="true" />
										</td>

									</tr>
								<?php 
								$i++;
							endforeach;
						else:
							echo "<p>Error en la aplicacion</p>";
						endif;
					?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<hr>
<input type="submit" name="enviar" value="Enviar venta" class="btn btn-success btn-large" />
<?= form_close(); ?>

<!--Funcion para habilitar  deshabilitar el input dentro de la fila--> 
<script type="text/javascript">
function habilitarInput(check, input){
	if(check.checked==true){
		input.disabled = false;
	}
	if(check.checked==false){
		input.disabled = true;
	}
}

function validar(tabla) {
  for(i=0; ele=tabla.elements[i]; i++){
    if (ele.type=='checkbox' && ele.checked)
      return true;
  	alert('Error');
  	return false;
  }
}
</script>
