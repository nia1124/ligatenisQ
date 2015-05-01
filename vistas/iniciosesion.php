<?php 
	require_once '../libs/conexion_facebook/app/start.php'; 
?>
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="../recursos/js/jquery-2.1.3.js"></script>
	<script type="text/javascript" src="../recursos/js/bootstrap.js" ></script>
	<script type="text/javascript" src="../recursos/js/basic.js" ></script>
	<link rel="stylesheet" href="../recursos/css/bootstrap.css">
	<link rel="stylesheet" href="../recursos/css/style.css">
</head>
<div class="iniciosesion container margen" id="contenido" >
	<div class="row" >
		<div class="col-md-12" >
			<panel class="col-md-6 col-md-offset-3 panel panel-primary " align="center">
			
				<div  class="panel-body">

						<div class= "form-group">
						<input placeholder="Ingrese su username" class="form-control padding-l" name="username"/>	
						</div>

						<div class= "form-group">
						<input placeholder="Ingrese su contraseña" class="form-control" name="pass"/>	
						</div>

						<div class= "form-group ">
						<input type="submit"  class="btn btn-info padding-b" value="Iniciar sesión"/>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-3">
								<a href="#"  id="accion_registro">Registrate Ahora</a>				
							</div> 
						</div>
				</div>
				<a href="<?php echo $helper->getLoginUrl($config['scopes']);?>">
					<img src="../recursos/img/loginfb.png" height="50%" width="50%" alt="">
				</a> 
			</panel>		
		</div>		
	</div>
</div>