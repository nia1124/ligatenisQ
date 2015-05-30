<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" name="viewport" content="text/html" initial-scale="1.0" charset="utf-8">
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

		<?php 
			if (!isset($_COOKIE['chsm']) || $_COOKIE['chsm']=="logedin") 
			{
		?>
				<div class="row padding-l">
					<div class=" col-xs-12 col-sm-12 col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 ">
						<div class="panel panel-primary fondopagina borde fondo-B">
		  					<div class="panel-heading ">
		    					<h1 class="panel-title" align="left">Noticias Destacadas</h1>
		  					</div>
		  					<div class="panel-body">
			  					<div class="table-responsive">
									<table class="table table-hover" id="tablaNoticias"> 
										<thead>
											<tr>
												<th class="col-lg-3"></th>
												<th class="col-lg-4"></th>
												<th class="col-lg-6"></th>
											</tr>
										</thead>
										<tbody>
									
										<?php
											$data = $parametros;
											$tabla = "";
										 	for ($i=0; $i < count($data) ; $i++)
										 	{ 
												$tabla .= "<tr><th>"."<h3>".utf8_encode($data[$i]['titulo'])."</h3>"."</th><th>".'<img class="img-responsive thumbnail" src="'.$data[$i]['imagen'].'"/>'."</th><th>".utf8_encode($data[$i]['descripcion'])."</th><tr>";
												
											}
											echo $tabla;

										?>
										</tbody>
									</table>
								</div>
		  					</div>
						</div>
					</div>
				</div>
			</div>
				<?php
				}else{

				 ?>
				<div class="row">
       	    	<div class="col-md-10 col-md-offset-1 padding-left">
       	    	<form method="POST" accept-charset="utf-8">
            	    <div class="panel-heading ">
    					<h1 class="panel-title" align="left">Administrar Noticias</h1>
  					</div>
					<div class="panel-body" >
						<div class="table-responsive">
							<div>
								<button type="submit" id="accion_registrarNoticia" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></button>
							</div>
							<table class="table table-hover" id="tablaNoticias"> 
								<thead>
									<tr>
										<th class="col-lg-3">Titulo</th>
										<th class="col-lg-4">Imagen</th>
										<th class="col-lg-4">Descripción</th>
										<th class="col-lg-3">Acciones</th>
									</tr>
								</thead>
								<tbody>
								<?php

									$data = $parametros;
									$tabla = "";
								 	for ($i=0; $i < count($data) ; $i++) 
								 	{ 
										$tabla .= "<tr><th>"."<h3>".utf8_encode($data[$i]['titulo'])."</h3>"."</th><th>".'<img class="img-responsive thumbnail" src="'.$data[$i]['imagen'].'"/>'."</th><th>".utf8_encode($data[$i]['descripcion'])."</th>".
															'<th><button type="submit" id="boton_actualizarNoti class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span></button>
											  	    			 <button type="submit" id="boton_eliminarNoti class="btn btn-default"><span class="glyphicon glyphicon-remove"></span></button></th></tr>';
											
									}
									echo $tabla;
								?>
								</tbody>
							</table>
						</div>
					</div>
       	    	</form>
       	    	</div>
       			</div>
				<?php 
				}
				 ?>					
	</div>
	<?php include 'footer.php'; ?>
	</div>
</body>
</html>