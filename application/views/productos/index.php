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
	<?=anchor( "admin/productos/create/" ,"Agregar" ,"class='btn btn-primary'" )?>
</p>


<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable" id="example" aria-describedby="example_info" width="100%">
	<thead>
		<tr>
			<th width="30">Id</th>
			<th>Nombre</th>
			<th width="80">Presentaci&oacute;n</th>
			<th width="50">Precio Fabrica</th>
			<th width="50">Precio Venta</th>
			<th width="50">Estado del producto</th>
			<th width="80">Cantidad</th>
			<th width="80">Fecha de caducidad</th>
			<th width="135">Opciones</th>
		</tr>
	</thead>

	<?php
		foreach ($productos as $key => $producto) {
			$val = $producto->status;
			if ($val == '1'){$val = "Activo";}
			else {$val = "Inactivo";}
			echo "
				<tr>
					<td>".$producto->idProducto."</td>
					<td>".$producto->nombre_producto."</td>
					<td>".$producto->presentacion." gms </td>
					<td> $ ".$producto->precio_fabrica."</td>
					<td> $ ".$producto->precio_publico."</td>
					<td>".$val."</td>
					<td>".$producto->cantidad." piezas</td>
					<td>".$producto->fecha_caducidad."</td>
					<td>
						" . anchor( "admin/productos/update/".$producto->idProducto , "Editar" , "class='btn btn-primary'" ) . "
						" . anchor( "admin/productos/delete/".$producto->idProducto , "Eliminar" , "class='btn btn-danger'" ) . "
					</td>
				</tr>
			";
		}
	?>
</table>
