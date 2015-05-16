<div class="iniciosesion container margen" id="contenido" >
	<div class="row" >
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " style="margin: 0%">
			<form role="form" id="accion_iniciosesion" action="home/login" method="POST" accept-charset="utf-8">
				<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 panel borde " align="center">
					<div class="panel-heading">
						<h1 class="panel-title" align="left">Iniciar Sesión</h1>
					</div>
					<div  class="panel-body">
						<div class= "form-group">
						<input id="inicios_nombre" placeholder="Ingrese su username" class="form-control padding-l" name="username"/>	
						</div>

						<div class= "form-group">
						<input id="inicios_pass" type="password" placeholder="Ingrese su contraseña" class="form-control" name="pass"/>	
						</div>

						<div class= "form-group ">
						<input id="boton_iniciosesion" type="submit"  class="btn btn-info padding-b" value="Iniciar sesión"/>
						</div>

						<div class="form-group">
						<a href="<?php echo $_COOKIE['fb'] ?>">
						<img class="img-responsive" src="recursos/img/loginfb.png" height="40%" width="40%" alt="">
						</a>
						</div>
					</div>
				</div>
			</form>
		</div>
		<h2 id="result_login"></h2>		
	</div>
</div>
