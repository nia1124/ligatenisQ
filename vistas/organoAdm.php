<div class="organoAdm" id="contenido">
	<div class="container">
		<?php 
			if (!isset($_COOKIE['chsm']) || $_COOKIE['chsm']=="logedin") 
			{
		?>
		<div class="row">
			<div class="col-md-10 col-md-offset-1 padding-left">
				<div class="panel panel-default">
					<div class="panel-heading">
	    				<h1 class="panel-title">Organo Administrativo</h1>
	  				</div>
	  				<div class="panel-body">
	  					<div class="table-responsive">
	  						<table class="table" id="tablaOrganoA"> 
								<thead>
									<tr>
										<th>Nombre</th>
										<th>Contacto</th>
										<th>Cargo</th>
										<th>Informacion</th>
									</tr>
								</thead>
								<tbody>
									
									<?php
										$data = $parametros;
										$tabla = "";
									 	for ($i=0; $i < count($data) ; $i++)
									 	{ 
											$tabla .= "<tr><td>".$data[$i]['nombre']."</td><td>".$data[$i]['contacto']."</td><td>".$data[$i]['cargo']."</td><td>".$data[$i]['informacion']."</td></tr>";
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
			<div class="col-md-10 col-md-offset-1 padding-left">
				<div class="panel panel-default">
					<div class="panel-heading">
	    				<h1 class="panel-title">Organo Administrativo</h1>
	  				</div>
	  				<div class="panel-body">
	  					<div class="table-responsive">
	  						<div>
	  							<button type="submit" id="accion_registrarOrganoA" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></button>
							</div>
	  						<table class="table" id="tablaOrganoA"> 
								<thead>
									<tr>
										<th>Nombre</th>
										<th>Contacto</th>
										<th>Cargo</th>
										<th>Información</th> 
									</tr>
								</thead>
								<tbody>
									
									<?php
										$data = $parametros;
										$tabla = "";
									 	for ($i=0; $i < count($data) ; $i++)
									 	{ 
											$tabla .= $tabla .= "<tr><td>".$data[$i]['nombre']."</td><td>".$data[$i]['contacto']."</td><td>".$data[$i]['cargo']."</td><td>".$data[$i]['informacion']."</td><td>".
													   '<button type="submit" id="boton_actualizarOrgA" class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span></button>
											  	    	<button type="submit" id="boton_eliminarOrgA" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span></button></th></tr>';
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

	




