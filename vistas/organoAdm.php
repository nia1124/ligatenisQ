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
										<th>Imagen</th>
										<!--<th>Nombre</th>-->
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
											echo '<tr>';
											$tabla .= "<td>".'<img src="'.$data[$i]['imagen'].'"/>'."</td><td>".$data[$i]['contacto']."</td><td>".$data[$i]['cargo']."</td><td>".$data[$i]['informacion']."</td>";
											echo "</tr>";
											echo $tabla;
										}
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
			<div class="col-md-10 col-md-offset-1 padding-left">
				<div class="panel panel-default">
					<div class="panel-heading">
	    				<h1 class="panel-title">Organo Administrativo</h1>
	  				</div>
	  				<div class="panel-body">
	  					<div class="table-responsive">
	  						<div>
								<input type="button" id="accion_registrarOrganoA" alt="" accion="" class="glyphicon glyphicon-plus" value="registrar">
							</div>
	  						<table class="table" id="tablaOrganoA"> 
								<thead>
									<tr>
										<th>Imagen</th>
										<!--<th>Nombre</th>-->
										<th>Contacto</th>
										<th>Cargo</th>
										<th>Información</th>
									</tr>
								</thead>
								<tbody>
									
									<?php
										$data = $parametros;
										print_r($data);

										$tabla = "";
									 	for ($i=0; $i < count($data) ; $i++)
									 	{ 
											echo '<tr>';
											$tabla .= "<td>".'<img src="'.$data[$i]['imagen'].'"/>'."</td><td>".$data[$i]['contacto']."</td><td>".$data[$i]['cargo']."</td><td>".$data[$i]['informacion']."</td>";
											echo "</tr>";
											echo $tabla;
											echo '<td><input type="button" id="boton_actualizarNoti" alt="" accion="" class="glyphicon glyphicon-pencil" value="actualizar">
												<input type="button" id="boton_eliminarNoti" alt="" accion="" class="glyphicon glyphicon-remove" value="eliminar">
											</td></tr>';
										}
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

	




