<?php 
	require_once '../libs/conexion_facebook/app/start.php'; 
?>

<div class="iniciosesion container margen" id="contenido" >
	<div class="row" >
		<div class="col-md-12" >
			<div class="col-md-6 col-md-offset-3 panel panel-primary borde" align="center">
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
						<a href="<?php echo $helper->getLoginUrl($config['scopes']);?>">
						<img src="../recursos/img/loginfb.png" height="40%" width="40%" alt="">
						</a>
					</div>
				</div>
				
					
			</div>
				
		</div>		
	</div>
</div>
