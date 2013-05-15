<h1>Ventas del dia</h1>
<?php 
	//vemos si ventas contiene algo
	if($ventas){
		foreach ($ventas->result() as $venta){ ?>
			<ul>
				<li><a href="<?= $venta->idVenta; ?>"> <?= $venta->fecha_venta; ?> </a></li>
			</ul>
		<?php }
	}else{
		echo "<p>Error en la aplicacion</p>";
	}
?>