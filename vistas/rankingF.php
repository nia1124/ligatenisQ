<div class="rankingF" id="contenido">
	<div class="container">
	<?php 
		if ((!isset($_COOKIE['chsm']=="")) || ($_COOKIE['chsm']=="logedin")) 
		{
	 ?>
		<div class="row">
			<div class=" col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 padding-left">
				<div class="panel panel-default">
					<div class="panel-heading">
	    				<h1 class="panel-title">Ranking Femenino</h1>
	  				</div>
	  				<div class="panel-body">
	  					<div class="table-responsive">
	  						<table class="table">
								<thead>
									<tr>
										<th style="width: 216px">N°</th>
										<th>Nombre</th>
										<th style="width: 216px">Puntos</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Daniela</td>
										<td>10000</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Cristina</td>
										<td>2000</td>
									</tr>
								</tbody>
							</table>
	  					</div>
					</div>
				</div>	
			</div>
		</div>
	<?php 
		}else{
	 ?>
	 	<div class="row">
       	    	<div class="col-md-10 col-md-offset-1 padding-left">
       	    	<form method="POST" accept-charset="utf-8">
            	    <div class="panel-heading ">
    					<h1 class="panel-title" align="left">Administrar Ranking</h1>
  					</div>
					<div class="panel-body" >
						<div class="table-responsive">
							<div>
								<input type="button" id="boton_registroRankingF" alt="" accion="" class="glyphicon glyphicon-plus">
							</div>
							<table class="table" id="tablaRankingF"> 
								<thead>
									<tr>
										<th>Imagen</th>
										<th>Titulo</th>
										<th>Descripción</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
							
								<?php
									$data = $parametros;
									$tabla = "";
								 	for ($i=0; $i < count($data) ; $i++) 
								 	{ 
										echo '<tr>';
										$tabla .= "<td>".$data[$i]['titulo']."</td><td>".$data[$i]['descripcion'].
										"</td>";
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
       	    	</form>
       	    	</div>
       			</div>


	</div>
</div>
