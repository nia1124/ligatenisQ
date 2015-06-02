<div class="eventos" id="contenido">
	<div class="container">
	<?php 
		if (!isset($_COOKIE['chsm']) || ($_COOKIE['chsm']=="logedin"))
		{
	 ?>
		<div class="row">
			<div class=" col-xs-12 col-md-10 col-md-offset-1 padding-left">
				<div class="panel panel-default">
					<div class="panel-heading">
	    				<h1 class="panel-title">Eventos</h1>
	  				</div>
	  				<div class="panel-body">
	  					<div class="table-responsive">
	  						<table class="table table-hover" id="tablaEventos">
								<thead>
									<tr>
									<th>N°</th>
									<th>Titulo</th>
									<th>Campeonato / Actividad</th>
									<th>Categoria</th>
									<th>Modalidad</th>
									<th>Ciudad</th>
									<th>Fecha</th>
									</tr>
								</thead>
								<tbody>
									<?php
											$data = $parametros;
											
											$tabla = "";
										 	for ($i=0; $i < count($data) ; $i++)
										 	{ 
										 		$tabla .= "<tr><td>".$data[$i]['numero']."</td><td>".$data[$i]['titulo']."</td><td>".$data[$i]['actividad']."</td><td>".$data[$i]['categoria']."</td><td>".$data[$i]['modalidad'].
										 		"</td><td>".$data[$i]['ciudad']."</td><td>".$data[$i]['fecha']."</td></tr>";
												
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
			<div class=" col-xs-12 col-md-10 col-md-offset-1 padding-left">
				<div class="panel panel-default">
					<div class="panel-heading">
	    				<h1 class="panel-title">Eventos</h1>
	  				</div>
	  				<div class="panel-body">
	  					<div class="table-responsive">
	  					<div>
	  						<button type="submit" id="accion_registrarEvento" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></button>
	  					</div>
	  						<table class="table table-hover" id="tablaEventos">
								<thead>
									<tr>
										<th>N°</th>
										<th>Titulo</th>
										<th>Campeonato / Actividad</th>
										<th>Categoria</th>
										<th>Modalidad</th>
										<th>Ciudad</th>
										<th>Fecha</th>
									</tr>
								</thead>
								<tbody>
									<?php
											$data = $parametros;
											
											$tabla = "";
										 	for ($i=0; $i < count($data) ; $i++)
										 	{ 
										 		$tabla .= "<tr><td>".$data[$i]['numero']."</td><td>".$data[$i]['titulo']."</td><td>".$data[$i]['actividad']."</td><td>".$data[$i]['categoria']."</td><td>".$data[$i]['modalidad'].
										 		"</td><td>".$data[$i]['ciudad']."</td><td>".$data[$i]['fecha']."</td><td>".
										 		'<button type="submit" id="boton_actualizarEvento class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span></button>
												 <button type="submit" id="boton_eliminarEvento class="btn btn-default"><span class="glyphicon glyphicon-remove"></span></button></td></tr>';
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

	

				