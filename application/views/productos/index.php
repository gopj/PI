<script type="text/javascript">
	$(document).ready(function() {
		$('#example').dataTable( {
			"sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>"
		} );
	} );

	$.extend( $.fn.dataTableExt.oStdClasses, {
		"sWrapper": "dataTables_wrapper form-inline"
	} );
</script>


<h2>Productos</h2>
<p>
	<?=anchor("admin/productos/create", "Agregar", "data-toggle='create' class='btn btn-primary'")?>
</p>


<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable" id="example" aria-describedby="example_info">
	<thead>
		<tr role="row">
			<th width="30">Id</th>
			<th>Nombre</th>
			<th>Descripcion</th>
			<th>Precio</th>
			<th>Estado</th>
			<th width="140" >Opciones</th>
		</tr>
	</thead>

	<?php
		foreach ($productos as $key => $producto) {
			$val = $producto->estado;
			if ($val == '1'){$val = "Activo";}
			else {$val = "Inactivo";}
			echo "
				<tr>
					<td>".$producto->idProducto."</td>
					<td>".$producto->nombre_producto."</td>
					<td>".$producto->descripcion."</td>
					<td> $ ".$producto->precio."</td>
					<td>".$val."</td>
					<td>
						" . anchor( "admin/productos/update/".$producto->idProducto , "Editar" , "data-toggle='update' class='btn btn-primary'" ) . "
						" . anchor( "#dDelete" , "Eliminar" , "class='btn btn-danger' data-toggle='modal'" ) . "
					</td>
				</tr>
			";
		}
	?> 
</table>

<div id="dDelete" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Eliminar</h3>
	</div>
	<div class="modal-body">
		<p>¿Estas seguro que deseas eliminar el producto?</p>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
		<?php echo anchor( "admin/productos/delete/".$producto->idProducto , "Eliminar" , "class='btn btn-danger'" ); ?>
	</div>
</div>