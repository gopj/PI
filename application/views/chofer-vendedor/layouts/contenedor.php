<!--Sub nav var-->
<div class="navbar">
	<?= $menu_secundario; ?>
</div>
<!--Fin sub nav var-->

<!--Contenedor principal-->
<div class="container-fluid" >
	<div class="row-fluid">
		<!--Span 3-->
		<div class="span3">
			<!--Sidebar-->
			<aside class="well sidebar-nav">
				<?= $sidebar; ?>
			</aside>
			<!--Fin sidebar-->
		</div>
		<!--Fin span 3-->
		<div class="span9">
			<div class="hero-unit">
				<?= $contenidoPrincipal; ?>
			</div>
		</div>
	</div>
</div>
<!--Fin de contenedor principal-->