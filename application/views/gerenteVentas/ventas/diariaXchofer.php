<h2>Reportes de ventas diarias por chofer</h2>
<?php 
if ($infor <> ""){
	echo $infor;
}
echo form_open('gerenteVentas/ventas/reporteDiariaXchofer'); ?>

<label for="fecha">Fecha de venta: </label>
<div class="controls">
	<input name="fecha" type="date" value="2013-05-01"/>
</div>
<input type="submit" name="save" value="Traer Reporte" class="btn btn-success" />
<?php echo form_close(); ?>