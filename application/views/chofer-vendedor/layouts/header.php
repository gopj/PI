<!DOCTYPE >
<html>
	<head>
		<title>Pi-6</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<!-- Le styles -->
		<link href="<?= base_url() ?>/css/bootstrap.css" rel="stylesheet">
		<link href="<?= base_url() ?>/css/main.css" rel="stylesheet">
		<link href="<?= base_url() ?>/css/bootstrap-responsive.css" rel="stylesheet">

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

