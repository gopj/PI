<?php $this->load->view('includes/navbar'); ?>
<?php $this->load->view('includes/cssjs'); ?>
<?php $this->load->view('includes/tinymce'); ?>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Posts</title>

	<style type="text/css"> 
	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>

</head>
<body>

<div id="container">
	<div id="body">

		<div class="hero-unit">
			<h2>Publicar Post </h2>

			<form class="form-horizontal" action="<?=base_url();?>posts/newPost/" method="POST" >
				<div class="control-group">
					<label class="control-label" for="name"> Nombre </label>
					<div class="controls">
						<input type="text" id="name" placeholder="Nombre">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="title"> Titulo </label>
					<div class="controls">
						<input type="text" id="title" placeholder="Titulo">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="cont"> Contenido </label>
					<div class="controls">
						<textarea name="cont" id="cont" rows="7" style="width:50%"></textarea> 
					
						<br />

						<button class="btn btn-primary" type="submit" value="Guardar Post" id="save"> Guardar Post </button>
					</div>
				</div>
			</form>

				
			<form class="form-horizontal" action="<?=base_url();?>posts/getDate/" method="POST" >
				<button class="btn btn-primary" type="submit" value="Fechas"> fecha </button>
			</form>

			<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
		</div>

    </div>			    
	
</div>

</body>
</html>