<div id="contenido" class="registrarOrganoA container margen ">
	<div class="row ">
		<div class=" col-xs-12 col-md-12 col-sm-12 col-lg-12" style="margin: 0%;">
			<panel class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 panel panel-default borde padding_panel " align="center">						
				<div class="panel-heading ">
					Registrar Organo Administrativo
				</div>			
				<div class="panel-body">
					<form enctype="multipart/form-data" role="form" id="accion_registro" method="POST" accept-charset="utf-8">
						<div class= "form-group">
							<input id="nombre" type="text" placeholder="Ingrese el nombre" name="nombre" class="form-control" required/>	
						</div>	
						<div class= "form-group">
							<input id="contacto" placeholder="Ingrese el contacto" name="contacto" class="form-control" required/>	
						</div>
						<div class= "form-group">
							<input id="cargo" type="text" placeholder="Ingrese el cargo" name="cargo" class="form-control" required/>	
						</div>
						<div class= "form-group">
							<input id="informacion" placeholder="Ingrese la informacion adicional" name="informacion" class="form-control" required/>	
						</div>
						<div class= "form-group">
							<input id="insertar_organoA" type="submit" class="form-control  btn btn-success" value="Registrar"/>	
						</div>
					</form>		
				</div>		
					<h2 id="result"></h2>
			</panel>
		</div>
	</div>
</div>	
