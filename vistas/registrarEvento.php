<div id="contenido" class="registrarEvento container margen ">
	<div class="row ">
		<div class=" col-xs-12 col-md-12 col-sm-12 col-lg-12" style="margin: 0%;">
			<panel class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 panel panel-default borde padding_panel " align="center">						
				<div class="panel-heading ">
					Registrar Evento
				</div>			
				<div class="panel-body">
					<form enctype="multipart/form-data" role="form" id="accion_registroEvento" method="POST" accept-charset="utf-8">
						<div class= "form-group">
							<input id="numero" placeholder="Ingrese el Número del evento" name="numero" class="form-control" required/>	
						</div>
						<div class= "form-group">
							<input id="titulo" type="text" placeholder="Ingrese el titulo" name="titulo" class="form-control" required/>	
						</div>
						<div class="form-group">
							<input id="actividad" type="text" placeholder="Ingrese la actividad" name="actividad" class="form-control" required/>							
						</div>
						<div class="form-group" id="categoria">
							<select class="selectpicker" name="" >
								<option value="Sub 11">Sub 11</option>
								<option value="Sub 13">Sub 13</option>
								<option value="Sub 11">Sub 15</option>
								<option value="Sub 13">Sub 18</option>
								<option value="Sub 11">Sub 20</option>
								<option value="Sub 13">Sub 21</option>
						 	</select>
						</div>
						<div class="form-group" id="modalidad">
						  	<select class="selectpicker" name="" >
								<option value="Individual">Individual</option>
								<option value="Dobles">Dobles</option>
								<option value="Dobles mixto">Dobles mixto</option>
								<option value="Equipos">Equipos</option>
						 	</select>
						</div>
						<div class="form-group">
							<input id="ciudad" type="text" placeholder="Ingrese la ciudad" name="ciudad" class="form-control" required/>							
						</div>
						<div class="form-group">
							<input id="fecha" type="text" placeholder="Seleccione la fecha" name="fecha" class="form-control" required/>							
						</div>							
						<div class= "form-group">
							<input id="insertar_evento" type="submit" class="form-control  btn btn-success" value="Registrar"/>	
						</div>
					</form>		
				</div>		
					<h2 id="result"></h2>
			</panel>
		</div>
	</div>
</div>	