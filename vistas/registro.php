
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="../recursos/js/jquery-2.1.3.js"></script>
	<script type="text/javascript" src="../recursos/js/bootstrap.js" ></script>
	<script type="text/javascript" src="../recursos/js/basic.js" ></script>
	<link rel="stylesheet" href="../recursos/css/bootstrap.css">
	<link rel="stylesheet" href="../recursos/css/style.css">
</head>
	<div id="contenido" class="container margen registro">
		<div class="row ">
			<div class="col-md-12">
				<panel class="col-md-6 col-md-offset-3 panel panel-success " align="center">	
						<div class="panel-body" action="home/register" method="POST" accept-charset="utf-8">
							<div class= "form-group">
							<input placeholder="Ingrese su nombre" name="nombre" class="form-control" required/>
							</div>
							<div class= "form-group">
							<input placeholder="Ingrese su usuario" name="username" class="form-control" required/>	
							</div>
							<div class= "form-group">
							<input placeholder="Ingrese la contraseña" name="pass" class="form-control" required/>	
							</div>
							<div class= "form-group">
							<input placeholder="Ingrese de nuevo la contraseña" name="pass2" class="form-control" required/>	
							</div>
							<div class= "form-group">
							<input type="submit" class="form-control  btn btn-success" value="Registrasre"/>	
							</div>
						</div>
				</panel>
			</div>
		</div>
	</div>	


						
				

