<div class="rankingF" id="contenido">
	<div class="container">
		<div class="row">
			<div class=" col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 padding-left">
				<div class="panel panel-default">
					<div class="panel-heading">
	    				<h1 class="panel-title">Ranking Femenino</h1>
	  				</div>
	  				<div class="panel-body">
	  					<div class="table-responsive">
	  						<table class="table" id="tablaRankingF">
								<thead>
									<tr>
										<th>Posicion</th>
										<th>Nombre</th>
										<th>Puntos</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$data = $parametros;
										$tabla = "";
									 	for ($i=0; $i < count($data) ; $i++) 
									 	{ 
											$tabla .= "<tr><td>".$data[$i]['posicion']."</td><td>".$data[$i]['nombre']."</td><td>".$data[$i]['puntos']."</td></tr>";
											
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
	</div>
</div>
