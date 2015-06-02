<div class="entrenador" id="contenido">
	<div class="container">
		<?php 
		if (!isset($_COOKIE['chsm']) || ($_COOKIE['chsm']=="logedin")) 
		{
	 	?>
		<div class="row">
			<div class=" col-xs-12 col-md-10 col-md-offset-1 padding-left">
				<div class="panel panel-default">
					<div class="panel-heading">
	    				<h1 class="panel-title">Entrenadores</h1>
	  				</div>
	  				<div class="panel-body">
	  					<div class="table-responsive">
	  						<table class="table table-hover" id="tablaEntrenador">
								<thead>
									<tr>
										<th class="col-lg-4">Entrenador</th>
										<th class="col-lg-8">Descripción</th>
									</tr>
								</thead>
								<tbody>
									<?php
											$data = $parametros;
											
											$tabla = "";
										 	for ($i=0; $i < count($data) ; $i++)
										 	{ 
										 		$tabla .= "<tr><td>".'<img src="'.$data[$i]['foto'].'"/>'.
														  "</td><td>".$data[$i]['nombre'].", ".$data[$i]['profesion'].", ".$data[$i]['cargo'].", ".$data[$i]['nombreClub']."</td></tr>";
												
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
		}else
		{
		 ?>
		 <div class="row">
			<div class=" col-xs-12 col-md-10 col-md-offset-1 padding-left">
				<div class="panel panel-default">
					<div class="panel-heading">
	    				<h1 class="panel-title">Entrenadores</h1>
	  				</div>
	  				<div class="panel-body">
	  					<div class="table-responsive">
	  					<div>
	  						<button type="submit" id="accion_registrarEntrenador" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></button>
						</div>
	  						<table class="table table-hover" id="tablaEntrenador">
								<thead>
									<tr>
										<th class="col-lg-3">Entrenador</th>
										<th class="col-lg-8">Descripción</th>
										<th class="col-lg-2">Acciones</th>
									</tr>
								</thead>
								<tbody>
									<?php
											$data = $parametros;
											
											$tabla = "";
										 	for ($i=0; $i < count($data) ; $i++)
										 	{ 
										 		$tabla .= "<tr><td>".'<img src="'.$data[$i]['foto'].'"/>'.
													  "</td><td>".$data[$i]['nombre'].", ".$data[$i]['profesion'].", ".$data[$i]['cargo'].", ".$data[$i]['nombreClub']."</td><td>".
														'<button type="submit" id="boton_actualizarEntrenador class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span></button>
														 <button type="submit" id="boton_eliminarEntrenador class="btn btn-default"><span class="glyphicon glyphicon-remove"></span></button></td></tr>';
												
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