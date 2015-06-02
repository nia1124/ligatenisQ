<div id="contenido" class="registrarclub container margen ">
	<div class="row ">
		<div class=" col-xs-12 col-md-12 col-sm-12 col-lg-12" style="margin: 0%;">
			<panel class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 panel panel-default borde padding_panel " align="center">						
				<div class="panel-heading ">
					Registar Noticia
				</div>			
				<div class="panel-body">
					<form enctype="multipart/form-data" role="form" action="home/insertarClub" method="POST" accept-charset="utf-8">
						<div class= "form-group">
							<input id="Nombre" placeholder="Ingrese el nombre" name="nombre" class="form-control" required/>	
						</div>
						<div class= "form-group">
							<input id="contacto" type="text" placeholder="Ingrese el contacto" name="contacto" class="form-control" required/>	
						</div>
						<div class= "form-group">
							<input id="infoa" type="text" placeholder="Ingrese la infomración adicional" name="infoa" class="form-control" required/>	
						</div>
						<div align="left">
							<label class="size_label"> Insertar imagen: </label>								
						</div>	
							<input name="uploadedfile" type="file" />						
						<div class= "form-group">
							<input id="insertar_club" type="submit" class="form-control  btn btn-success" value="Registrar"/>	
						</div>
					</form>		
				</div>		
					<h2 id="result"></h2>
			</panel>
		</div>
	</div>
</div>	