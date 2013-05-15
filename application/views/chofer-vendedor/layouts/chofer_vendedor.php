<!DOCTYPE >
<html>
	<head>
		<title>Pi-6</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<!-- Le styles -->
		<link href="<?= base_url() ?>css/bootstrap.css" rel="stylesheet">
		<link href="<?= base_url() ?>css/bootstrap.min.css" rel="stylesheet">
		<!--<link href="<?= base_url() ?>/css/main.css" rel="stylesheet">
		<link href="<?= base_url() ?>/css/bootstrap-responsive.css" rel="stylesheet">-->

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<![endif]-->

		<!-- Styles -->
		<style type="text/css">
			body {
				padding-top: 60px;
				/*padding-bottom: 40px;*/
			}
			.sidebar-nav {
				padding: 9px 0;
			}

			@media (max-width: 980px) {
				/* Enable use of floated navbar text */
				.navbar-text.pull-right {
					float: none;
					padding-left: 5px;
					padding-right: 5px;
				}
			}
		</style>
	</head>
	<body>
		<!--Header-->
		<header>
			<!--Nav var-->
			<div class="navbar navbar-inverse navbar-fixed-top" >
				<div class="navbar-inner">
					<div class="container-fluid">
						<a class="brand" href="#">Botanitas</a>
						<?= $menu_principal; ?>
					</div>
				</div>
			</div>
			<!--Fin de nav var-->
		</header>
		<!--Fin de header-->
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
					<div class="well">
					    <div class="row-fluid">
				          <?= $contenidoPrincipal; ?>
				        </div>
					</div>
				</div>
			</div>
		</div>
		<!--Fin de contenedor principal-->

		<!--Footer-->
		<hr>
		<footer class="footer">
			<div class="container">
				<p>
					© Company 2013
				</p>
			</div>

			<style>
				.footer {
					text-align: center;
					padding: 30px 0;
					margin-top: 70px;
					border-top: 1px solid #e5e5e5;
					background-color: #f5f5f5;
				}
			</style>
		</footer>
		<!--Fin footer-->

		<script src="<?= base_url() ?>/js/jquery.js"></script>
		<script src="<?= base_url() ?>/js/bootstrap-transition.js"></script>
		<script src="<?= base_url() ?>/js/bootstrap-alert.js"></script>
		<script src="<?= base_url() ?>/js/bootstrap-modal.js"></script>
		<script src="<?= base_url() ?>/js/bootstrap-dropdown.js"></script>
		<script src="<?= base_url() ?>/js/bootstrap-scrollspy.js"></script>
		<script src="<?= base_url() ?>/js/bootstrap-tab.js"></script>
		<script src="<?= base_url() ?>/js/bootstrap-tooltip.js"></script>
		<script src="<?= base_url() ?>/js/bootstrap-popover.js"></script>
		<script src="<?= base_url() ?>/js/bootstrap-button.js"></script>
		<script src="<?= base_url() ?>/js/bootstrap-collapse.js"></script>
		<script src="<?= base_url() ?>/js/bootstrap-carousel.js"></script>
		<script src="<?= base_url() ?>/js/bootstrap-typeahead.js"></script>
		<script src="<?= base_url() ?>/js/bootstrap-affix.js"></script>
		<script src="<?= base_url() ?>/js/holder/holder.js"></script>
		<script src="<?= base_url() ?>/js/application.js"></script>
	</body>

</html>