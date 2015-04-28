<?php require_once '../libs/conexion_facebook/app/start.php'; ?>
<div class="container">
		<div class="row">
			<nav class="navbar-fixed-top">
				<div class=" col-xs-12 col-md-10 col-md-offset-1 padding-left">
				<img src="../recursos/img/header.jpg" class="img-responsive">
					<ul id="main-menu" class="nav nav-pills nav-justified visible-md visible-lg" >
						<li class="active"><a href="index.php">Inicio</a></li>
		                <li class="dropdown">
			                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Institución<span class="caret"></span></a>
				                <ul class="dropdown-menu" role="menu">
				                	<li><a href="#" id="accion_mv">Misión y Visión</a></li>
				               		<li><a href="#">Estatutos</a></li>
				               		<li><a href="#" id="accion_organoAdm">Órgano Administrativo</a></li>
				               	</ul>
				               	
			            </li>
		                <li><a href="#" id="accion_club">Clubes</a></li>
		                <li><a href="#" id="accion_integrantes">Integrantes</a></li>
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
		                <li><a href="#"  id="accion_login" class="btn btn-danger">Login</a></li>
					</ul>
				</div>	
			</nav>
			<div class="row">
					<div class="col-xs-6 col-xs-offset-3 col-md-6 col-md-offset-3 margin">
						<input  type="image" id="foto" class="img-responsive">
						<script type="text/javascript" src="../recursos/js/galeria.js"></script>
					</div>
			</div>
	</div>
</div>
	