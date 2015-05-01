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

<?php include 'header.php'; ?>
<div id="contenido" class="container margen iniciosesion">
	<div class="row" >
		<div class="col-md-12" >
			<panel class="col-md-6 col-md-offset-3 panel panel-primary " align="center">
					<div  class="panel-body" action="/ChatSystem/home/login" method="POST">
						
						<div class= "form-group">
						<?php if (!isset($_SESSION['facebook'])): ?>
						<input placeholder="Ingrese su username" class="form-control padding-l" name="username"/>	
						</div>
						<div class= "form-group">
						<input placeholder="Ingrese su contraseña" class="form-control" name="pass"/>	
						</div>
						<div class= "form-group ">
						<input type="submit"  class="btn btn-info padding-b" value="Iniciar sesión"/>	
						</div>
						<div class="form-group">
						<a href="<?php echo $helper->getLoginUrl($config['scopes']);?>"
						<button  type="submit"><img src="../recursos/img/facebook.png" height="68" width="68" alt="">
						</button> 	
						<button type="submit"><img src="../recursos/img/tweet.png" height="68" width="68" alt="">
						</button> 	
						</div>
						<?php else: ?>
						<p>
							Bienvenido, <?php echo $facebook_user->getName();?>
						</p>
						<a href="libs/conexion_facebook/app/logout.php"><button type="submit" class="form-control btn btn-success" value="Registrasre"/></button></a>
						<?php endif; ?>
					</div>
			</panel>		
		</div>		
	</div>
</div>