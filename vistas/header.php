<header>
	<?php 
	require_once '../libs/conexion_facebook/app/start.php'; 
?>
</header>
<div class="container">
		<div class="row ">
			<nav>
				<div class=" col-xs-12 col-md-12 padding-left">
					<div>
						<img src="../recursos/img/header.jpg" class="img-responsive" role="navigation" style="margin-bottom: 0%">
					</div>
					<ul id="main-menu" class="nav nav-pills nav-justified navbar navbar-inverse  menu" role="navigation">
						<li class="active"><a href="index.php" >Inicio</a></li>
		                <li class="dropdown">
			                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Institución<span class="caret"></span></a>
				                <ul class="dropdown-menu" role="menu">
				                	<li><a href="#" id="accion_mv">Misión y Visión</a></li>
				               		<li><a href="#">Estatutos</a></li>
				               		<li><a href="#" id="accion_organoAdm">Órgano Administrativo</a></li>
				               	</ul>
			            </li>
		                <li><a href="#" id="accion_club">Clubes</a></li>
		                <li class="dropdown">
		                	<a href="#" class="dropdown-toggle" data-toogle="dropdown">Integrantes<span class="caret"></span></a>
		                	<ul class="dropdown-menu" role="menu">
				                	<li><a href="#" id="accion_deportista">Deportistas</a></li>
				                	<li><a href="#" id="accion_entrenador">Entrenadores</a></li>
				               	</ul>
		                </li>
		                <li class="dropdown">
		                	<a href="#" class="dropdown-toggle" data-toogle="dropdown">Ranking<span class="caret"></span></a>
				                <ul class="dropdown-menu" role="menu">
				                	<li><a href="#" id="accion_rankingF">Ranking Femenino</a></li>
				                	<li><a href="#" id="accion_rankingM">Ranking Masculino</a></li>
				               	</ul>
			            </li>
		                <li class="dropdown">
			                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Galeria<span class="caret"></span></a>
			                	<ul class="dropdown-menu" role="menu">
				                	<li><a href="#">Fotos</a></li>
				                	<li><a href="#">Videos</a></li>
				               	</ul>
			             </li>
		                <li><a href="#" id="accion_eventos">Eventos</a></li>
		                <li><a href="#">Foro</a></li>
		                <li><a href="#">Contactenos</a></li>
						<?php if (!isset($_SESSION['facebook'])): ?>
		                <li><a href="#"  id="accion_iniciosesion" class="btn btn-danger">Login</a></li>

		                <?php else: ?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle btn btn-danger" data-toggle="dropdown">
								Hola <?php echo $facebook_user->getFirstName();?><span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="../libs/conexion_facebook/app/logout.php" class="dropdown-toggle">Cerrar Sesión</a></li>
							</ul>	
						</li> 
						<?php endif; ?>	
					</ul>
				</div>
				<div class="row ">
						<div class="panel-primary">
							<div class="panel-body ">
								<div class="col-xs-6 col-xs-offset-3 col-md-8 col-md-offset-2 margin" style="margin-top:0%">
								<input  type="image" id="foto" class="img-responsive">
								<script type="text/javascript" src="../recursos/js/galeria.js"></script>
								</div>
							</div>
						</div>
					</div>
			</nav>
		</div>		
</div>
	