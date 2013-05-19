 <?= form_open('chofer-vendedor/ventas/recibirdatosVenta', 'class="form-horizontal"'); ?>
 <div class="row-fluid">
	 <div class="span12">
	 	<h2>Seleccionar cliente</h2>
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
								<a href="<?= $cliente->idCliente; ?>">
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
 <div class="row-fluid">
	 <div class="span12">
		<h2>Especificar productos</h2>
	 	<h3>Compra</h3>
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
								<a href="<?= $producto->idProducto; ?>">
									<?= $producto->idProducto; ?>
									<input type="checkbox" name="productos[]" id="check<?=$i?>" onclick="habilitarInput(check<?=$i?>,cantidad<?=$i?>)" value="<?= $producto->idProducto; ?>">
								</a>
							</td>
							<td>
								<?= $producto->nombre_producto; ?>
							</td>
							<td><?= $producto->presentacion; ?></td>
							<td><?= "no hay aun"; ?></td>
							<td><?= $producto->precio_publico; ?></td>
							<td><?= "5"; ?></td>
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

<div class="row-fluid">
	<div class="span12">
		<h2>Productos expirados</h2>
		<input type="button" name="agregarExpirado" value="Agregar" class="btn" onclick="crearFilas('tabla')"/>
		<br><br>
		<table class="table table-bordered table-striped table-hover" >
			<thead>
				<tr>
					<th>Id</th>
					<th>Producto</th>
					<th>Presentacion</th>
					<th>Caducidad</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th></th>
				</tr>
			</thead>
			<tbody id="tabla"></tbody>
		</table>
	</div>
</div>
<hr>
<input type="submit" name="enviar" value="Enviar venta" class="btn btn-success" />
<?= form_close(); ?>

<script type="text/javascript">
//Funcion para habilitar  deshabilitar el input dentro de la fila
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

<script type="text/javascript">
//Funcion agregar nuevas filas 
num=0;
function crearFilas(obj) {
  num++;
  fi = document.getElementById('tabla'); 
  contenedor = document.createElement('tr'); 
  contenedor.id = 'tr'+num; 
  fi.appendChild(contenedor); 
  
  //numero--------------------------
  //elemento1, columna
 var ele1 = document.createElement('th');
  contenedor.appendChild(ele1); 
  
  //elemento2, input dentro de la columna
  var ele2 = document.createElement('div'); 
  ele2.innerHTML = "<input type='text' class='input-mini' name='" + 'numero'+num + "' />";
  
  //lo ponemos dentro
  ele1.appendChild(ele2);
  //------------------------------
  
  //producto
  var ele3 = document.createElement('th'); 
  contenedor.appendChild(ele3); 
  
  var ele4 = document.createElement('div'); 
  ele4.innerHTML = "<input type='text' class='input-small' name='" + 'producto'+num + "' />";
  ele3.appendChild(ele4); 
  
  //presentacion
  var ele5 = document.createElement('th'); 
  contenedor.appendChild(ele5); 
  
  var ele6 = document.createElement('div'); 
  ele6.innerHTML = "<input type='text' class='input-small' name='" + 'presentacion'+num + "' />";
  ele5.appendChild(ele6); 
  
  //caducidad
  var ele7 = document.createElement('th'); 
  contenedor.appendChild(ele7); 
  
  var ele8 = document.createElement('div'); 
  ele8.innerHTML = "<input type='text' class='input-small' name='" + 'caducidad'+num + "' />";
  ele7.appendChild(ele8); 
  
  //precio------------------
  var ele9 = document.createElement('th'); 
  contenedor.appendChild(ele9); 
 
  var ele10 = document.createElement('div'); 
  ele10.innerHTML = "<input type='text' class='input-mini' name='" + 'precio'+num + "' />";
  ele9.appendChild(ele10); 
  
  //-----------------------
  
  //cantidad
  var ele11 = document.createElement('th');
  contenedor.appendChild(ele11); 
  
  var ele12 = document.createElement('div'); 
  ele12.innerHTML = "<input type='text' class='input-mini' name='" + 'cantidad'+num + "' />";
  ele11.appendChild(ele12); 
  
  /*--------------------------------------------*/
  var ele13 = document.createElement('th');
  contenedor.appendChild(ele13); 

  ele = document.createElement('div');
  ele.name = 'tr'+num; 
  ele.innerHTML = "<input type='button' class='btn' name='" + 'tr'+num + "' value='borrar' />";
  
  ele.onclick = function () {borrar(this.name)} 
  ele13.appendChild(ele); 
}
function borrar(obj) {
  fi = document.getElementById('tabla'); 
  fi.removeChild(document.getElementById(obj)); 
}
 
</script>