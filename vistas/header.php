
<!--listoR-->
<div class="container ">
		<div class="row ">
				<div class=" col-xs-12 col-sm-12 col-lg-12 col-md-12 padding-left">
					<div>
						<img src="recursos/img/header.png" class="img-responsive" role="navigation" style="margin-bottom: 0%">
					</div>
					<!--//////////////////////////////////menu Escritorio/////////////////////////////////////////////////-->
					<nav id="navDesktop" class="navbar visible-lg visible-md">
						<div >
						<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>


						    <!-- Collect the nav links, forms, and other content for toggling -->
						    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
						      <ul id="main-menu" class="nav  nav-justified navbar-inverse">
						        <li class="active"><a href="index.php">Inicio<span class="sr-only">(current)</span></a></li>
						        <li class="dropdown">
						          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Institución<span class="caret"></span></a>
						          <ul class="dropdown-menu" role="menu">
						            <li><a href="" id="accion_mv">Misión y visión</a></li>
						            <li class="divider"></li>
						            <li><a href="">Estatutos</a></li>
						            <li class="divider"></li>
						            <li><a href="" id="accion_organoAdm">Órgano Administrativo</a></li>
						          </ul>
						        </li>

						        <li><a href="" id="accion_club">Clubes</a></li>
						        <li class="dropdown">
						          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Integrantes <span class="caret"></span></a>
						          <ul class="dropdown-menu" role="menu">
						            <li><a href="" id="accion_deportista">Deportista</a></li>
						            <li class="divider"></li>
						            <li><a href="" id="accion_entrenador">Entrenador</a></li>
						          </ul>
						        </li>

						        <li class="dropdown">
						          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ranking<span class="caret"></span></a>
						          <ul class="dropdown-menu" role="menu">
						            <li><a href="" id="accion_rankingF">Ranking Femenino</a></li>
						            <li class="divider"></li>
						            <li><a href="" id="accion_rankingM">Ranking Masculino</a></li>
						          </ul>
						        </li>

						       <!-- <li class="dropdown">
						          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Galeria<span class="caret"></span></a>
						          <ul class="dropdown-menu" role="menu">
						            <li><a href="">Fotos</a></li>
						            <li class="divider"></li>
						            <li><a href="">Videos</a></li>
						          </ul>
						        </li> -->

						        <li><a href="" id="accion_eventos">Eventos</a></li>
						        <!--<li><a href="">Foro</a></li>-->
						        <?php if(!isset($_SESSION['facebook']) && !isset($_COOKIE['user'])) { ?>
						        <li><a href="" id="accion_registro" class="btn btn-danger2">Registrate</a></li>
						        
						        <li><a href=""  id="accion_iniciosesion" class="btn btn-danger">Iniciar Sesión</a></li>
						        <?php }elseif (isset($_SESSION['facebook'])) { ?>
						            <li class="dropdown">
						              <a href="" class="dropdown-toggle btn btn-danger" data-toggle="dropdown">
						                Bienvenido <?php echo $facebook_user->getFirstName();?><span class="caret"></span></a>
						              <ul class="dropdown-menu" role="menu">
						                <li id="cerrarSesion"><a href="" class="dropdown-toggle">Cerrar Sesión</a></li>
						              </ul> 
						            </li> 
						            <?php }else{ ?>
										<li class="dropdown">
						              <a href="" class="dropdown-toggle btn btn-danger" data-toggle="dropdown">
						                Bienvenido <?php echo $_COOKIE['user'];?><span class="caret"></span></a>
						              <ul class="dropdown-menu" role="menu">
						                <li id="cerrarSesion"><a href="" class="dropdown-toggle">Cerrar Sesión</a></li>
						              </ul> 
						            </li> 
						            <?php	} ?> 
						      </ul>
						    </div><!-- /.navbar-collapse -->
						  </div><!-- /.container-fluid -->
						</nav>
					<!--//////////////////////////////////menu-movil/////////////////////////////////////////////////-->
					<nav class="navbar navbar-default navbar-inverse visible-sm visible-xs">
						<div class="container-fluid">
						    <!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" id="boton_menumobile" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>									
								</button>
								<?php if (isset($_SESSION['facebook'])): ?>
								<li class="dropdown tamano-usuario-sesion">
									<a href="" class="dropdown-toggle btn btn-danger2" data-toggle="dropdown">
									Bienvenido <?php echo $facebook_user->getFirstName();?><span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="../libs/conexion_facebook/app/logout.php" class="dropdown-toggle">Cerrar Sesión</a></li>
									</ul> 
								</li> 
							<?php endif?>
							</div>
							
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-2">
							<ul id="main-menu" class="nav navbar-nav  ">
								<li><a href="index.php">Inicio<span class="sr-only">(current)</span></a></li>
								<li class="dropdown">
									<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Institución<span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="" id="accion_mv_mobile">Misión y visión</a></li>
										<li class="divider"></li>
										<li><a href="">Estatutos</a></li>
										<li class="divider"></li>
										<li><a href="" id="accion_organoAdm_mobile">Órgano Administrativo</a></li>
									</ul>
								</li>
								<li><a href="">Clubes</a></li>
								<li class="dropdown">
									<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Integrantes <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="" id="accion_deportista_mobile">Deportista</a></li>
										<li class="divider"></li>
										<li><a href="" id="accion_entrenador_mobile">Entrenador</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ranking<span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="" id="accion_rankingF_mobile">Ranking Femenino</a></li>
										<li class="divider"></li>
										<li><a href="" id="accion_rankingM_mobile">Ranking Masculino</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Galeria<span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="">Fotos</a></li>
										<li class="divider"></li>
										<li><a href="">Videos</a></li>
									</ul>
								</li>
								<li><a href="" id="accion_eventos_mobile">Eventos</a></li>
								<li><a href="">Foro</a></li>
								<li><a href="" id="accion_registro_mobile">Registrate</a></li>
								<?php if (!isset($_SESSION['facebook'])): ?>
									<li><a href=""  id="accion_iniciosesion_mobile">Iniciar Sesión</a></li>				
								<?php endif; ?> 
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			<!--///////////////////////////////////////////////////////////////////////////////////-->
			</div>
			<div class="row ">
				<div class="panel-primary">
					<div class="panel-body ">
						<div class="col-xs-12  col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 margin padding-galeria" >
							<img src="" alt=""  type="image" id="foto" class="img-responsive">
							<!--<script type="text/javascript" src="recursos/js/galeria.js"></script>-->
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
 							 <!-- Indicators -->
							  <ol class="carousel-indicators">
							    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
							  </ol>
  								<!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">
							    <div class="item active">
							      <img src="recursos/img/galeria3.jpg" alt="...">
							      <!--<div class="carousel-caption">
							      </div>-->
							    </div>
							    <div class="item">
							      <img src="recursos/img/galeria1.jpg" alt="...">
							      <!--<div class="carousel-caption">
							      </div>-->
							    </div>
							    <div class="item">
							      <img src="recursos/img/galeria2.jpg" alt="...">
							      <!--<div class="carousel-caption">
							      </div>-->
							    </div>
							  </div>
  							<!-- Controls -->
							  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>		
</div>
	