<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="recursos/js/jquery-2.1.3.js"></script>
	<script type="text/javascript" src="recursos/js/bootstrap.js" ></script>
	<script type="text/javascript" src="recursos/js/basic.js" ></script>
	<link rel="stylesheet" href="recursos/css/bootstrap.css">
	<link rel="stylesheet" href="recursos/css/style.css">
	<?php 
		session_start();
		include_once('/libs/conexion_facebook/app/start.php'); 
		//esta es la linea que permite iniciar sesion, la almaceno en una variable y esa la coloco como cookie
		$facebook= $helper->getLoginUrl($config['scopes']); 
		//aca, entonces cuando se carga la vista de login solo se lee la cookie en ve de reimportar el archivo
		setcookie("fb", "$facebook", time()+3600, "");
	?>
</head>
<body class="fondo-B">
<div class="container">
	<?php include 'header.php';
	
	

?>
	<div id="contenido" class="container">
		<div class="row padding-l">
			<div class=" col-xs-12 col-sm-12 col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 ">
				<div class="panel panel-primary fondopagina borde fondo-B">
  					<div class="panel-heading ">
    					<h1 class="panel-title" align="left">Noticias Destacadas</h1>
  					</div>
  					<div class="panel-body">
	  					<div class="row">
	 						<div class="col-xs-12  col-sm-6 col-md-4 col-lg-4">
	    						<div class="thumbnail">
		      						<img class="img-responsive" src="recursos/img/carlos.jpg" alt="...">
		      						<div class="caption">
		        						<h3>Thumbnail label</h3>
		        						<p>...</p>
		        						<p><a href="#" class="btn btn-primary" role="button">Ver mas</a></p>
	      					 		</div>
	    						</div>
	  						</div>
	  						<div class="col-xs-12  col-sm-6 col-md-4 col-lg-4">
	    						<div class="thumbnail">
		      						<img class="img-responsive" src="recursos/img/carlos.jpg" alt="...">
		      						<div class="caption">
		        						<h3>Thumbnail label</h3>
		        						<p>...</p>
		        						<p><a href="#" class="btn btn-primary" role="button">Ver mas</a></p>
	      					 		</div>
	    						</div>
	  						</div>
	  						<div class="col-xs-12  col-sm-6 col-md-4 col-lg-4">
	    						<div class="thumbnail">
		      						<img class="img-responsive" src="recursos/img/carlos.jpg" alt="...">
		      						<div class="caption">
		        						<h3>Thumbnail label</h3>
		        						<p>...</p>
		        						<p><a href="#" class="btn btn-primary" role="button">Ver mas</a></p>
	      					 		</div>
	    						</div>
	  						</div>
	  						<div class="col-xs-12  col-sm-6 col-md-4 col-lg-4">
	    						<div class="thumbnail">
		      						<img class="img-responsive" src="recursos/img/carlos.jpg" alt="...">
		      						<div class="caption">
		        						<h3>Thumbnail label</h3>
		        						<p>...</p>
		        						<p><a href="#" class="btn btn-primary" role="button">Ver mas</a></p>
	      					 		</div>
	    						</div>
	  						</div>
	  						<div class="col-xs-12  col-sm-6 col-md-4 col-lg-4">
	    						<div class="thumbnail">
		      						<img class="img-responsive" src="recursos/img/carlos.jpg" alt="...">
		      						<div class="caption">
		        						<h3>Thumbnail label</h3>
		        						<p>...</p>
		        						<p><a href="#" class="btn btn-primary" role="button">Ver mas</a></p>
	      					 		</div>
	    						</div>
	  						</div>
	  						<div class="col-xs-12  col-sm-6 col-md-4 col-lg-4">
	    						<div class="thumbnail">
		      						<img class="img-responsive" src="recursos/img/carlos.jpg" alt="...">
		      						<div class="caption">
		        						<h3>Thumbnail label</h3>
		        						<p>...</p>
		        						<p><a href="#" class="btn btn-primary" role="button">Ver mas</a></p>
	      					 		</div>
	    						</div>
	  						</div>
						</div>
  					</div>

				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
	</div>
</body>
</html>