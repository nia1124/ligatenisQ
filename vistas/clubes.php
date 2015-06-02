<div class="club" id="contenido">
	<div class="container">
	<?php 
		if (!isset($_COOKIE['chsm']) || ($_COOKIE['chsm']=="logedin")) 
		{
	 ?>
		<div class="row">
			<div class=" col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 padding-left">
				<div class="panel panel-default borde">
					<div class="panel-heading">
	    				<h1 class="panel-title">Clubes</h1>
	  				</div>
	  				<div class="panel-body">
	  					<div class="table-responsive">
	  						<table class="table table-hover" id="tablaClubes">
								<thead>
									<tr>
									<th>Club</th>
									<th>Nombre</th>
									<th>Contacto</th>
									<th>Información Adicional</th>
									</tr>
								</thead>
								<tbody>
									<?php
											$data = $parametros;
											
											$tabla = "";
										 	for ($i=0; $i < count($data) ; $i++)
										 	{ 
										 		$tabla .= "<tr><td>".'<img src="'.$data[$i]['imagen'].'"/>'."</td><td>".$data[$i]['nombreClub']."</td><td>".$data[$i]['contacto']."</td><td>".$data[$i]['infoA']."</td></tr>";
												
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
		<?php 
			}
		else
		{
		 ?>
		<div class="row">
			<div class=" col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 padding-left">
				<div class="panel panel-default borde">
					<div class="panel-heading">
	    				<h1 class="panel-title">Clubes</h1>
	  				</div>
	  				<div class="panel-body">
	  					<div class="table-responsive">
	  					<div>
	  						<button type="submit" id="accion_registrarclub" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></button>
						</div>
	  						<table class="table table-hover" id="tablaClubes">
								<thead>
									<tr>
									<th>Club</th>
									<th>Nombre</th>
									<th>Contacto</th>
									<th>Información Adicional</th>
									</tr>
								</thead>
								<tbody>
									<?php
											$data = $parametros;
											
											$tabla = "";
										 	for ($i=0; $i < count($data) ; $i++)
										 	{ 
										 		$tabla .= "<tr><td>".'<img src="'.$data[$i]['imagen'].'"/>'."</td><td>".$data[$i]['nombreClub']."</td><td>".$data[$i]['contacto']."</td><td>".$data[$i]['infoA'].
										 		'<td><button type="submit" id="boton_actualizarClubes class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span></button>
												 <button type="submit" id="boton_eliminarClubes class="btn btn-default"><span class="glyphicon glyphicon-remove"></span></button>'."</td></tr>";
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
		<?php 
		 }
		 ?> 
	</div>
</div>