<div class="adminNoticias" id="contenido">
	<div class="container">
       <div class="row">
       	    <div class="col-md-10 col-md-offset-1 padding-left">
       	    	<form method="POST" accept-charset="utf-8">
            	    <div class="panel-heading ">
    					<h1 class="panel-title" align="left">Administrar Noticias</h1>
  					</div>
					<div class="panel-body" >
						<div class="table-responsive">
							<div>
								<input type="button" id="boton_registroNoti" alt="" accion="" class="glyphicon glyphicon-plus" value="registrar">
							</div>
							
							<table class="table" id="tablaNoticias"> 
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
								 for ($i=0; $i < count($data) ; $i++) { 
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
					</div>		
       	    	</form>
       	    </div>
       </div>
	</div>
</div>		