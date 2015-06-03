<?php
	include "libs/Controlador.php";
	 
	class Home extends Controlador
	{
		
		public function imprimir()
		{
			print_r($this->parametrosC);
		}

		function index()
		{	
			$usuario=$this->cargarModelo("usuario");
			$result=$this->usuario->getUsuarios();

			foreach ($result as $row)
			{
				print_r($row);
			}
		}

		function index2()
		{
			$noticia = $this->cargarModelo("noticia");
			$consultaBD = $noticia->getNoticias();
			$this->cargarVista("index", $consultaBD);			
			
			$usuario=$this->cargarVista("index");

		}

		public function cargarImagen()
		{

		}
		
		//metodos crud de noticia
		public function insertarNoticias()
		{
			echo json_encode($_FILES);

			
			$target_path = "uploads/";
			$target_path = $target_path . basename( $_FILES[0]['name']); 
			if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) 
			{
				
			} else{
				
				
			}
			$msg="";
			$uploadedfileload="true";
			$uploadedfile_size=$_FILES['uploadedfile']['size'];
			if ($_FILES['uploadedfile']['size']>200000)
			{
				$msg="El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo<BR>";
				$uploadedfileload="false";
			}

			if (!($_FILES['uploadedfile']['type'] =="image/jpeg" OR $_FILES['uploadedfile']['type'] =="image/gif"
				OR $_FILES['uploadedfile']['type'] =="image/png") OR $_FILES['uploadedfile']['type'] =="image/jpg")
			{
				$msg=" Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>";
				$uploadedfileload="false";
			}

			$file_name=$_FILES['uploadedfile']['name'];
			$add="uploads/$file_name";

			
			$titulo = $_POST['titulo'];
			$descripcion =$_POST['descripcion'];
			$campos = array('titulo', 'descripcion', 'imagen');
			$valores = array($titulo, $descripcion, $target_path);

			$noticia = $this->cargarModelo("noticia");
			$consultaBDR = $noticia->registrarNoticia( $campos, $valores);
			echo json_encode("exitoso");
		}



		public function actualizarNoticiasHome()
		{
			$target_path = "uploads/";
			$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
			if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) 
			{
				 echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido";
			} else{
				
				echo "Ha ocurrido un error, trate de nuevo!";
			}
			$msg="";
			$uploadedfileload="true";
			$uploadedfile_size=$_FILES['uploadedfile']['size'];
			echo $_FILES['uploadedfile']['name'];
			if ($_FILES['uploadedfile']['size']>200000)
			{
				$msg="El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo<BR>";
				$uploadedfileload="false";
			}

			if (!($_FILES['uploadedfile']['type'] =="image/jpeg" OR $_FILES['uploadedfile']['type'] =="image/gif"
				OR $_FILES['uploadedfile']['type'] =="image/png") OR $_FILES['uploadedfile']['type'] =="image/jpg")
			{
				$msg=" Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>";
				$uploadedfileload="false";
			}

			$file_name=$_FILES['uploadedfile']['name'];
			$add="uploads/$file_name";
			if($uploadedfileload=="true")
			{

				if(move_uploaded_file ($_FILES['uploadedfile']['tmp_name'], $add)){
					echo " Ha sido subido satisfactoriamente";
				}else
				{
					echo "Error al subir el archivo";
				}

			}else
			{
				echo $msg;  
			}

			$titulo = $_POST['titulo'];
			$descripcion =$_POST['descripcion'];
			$campos = array('titulo', 'descripcion', 'imagen');
			$valores = array($titulo, $descripcion, $target_path);
			$condicion = 

			$noticia = $this->cargarModelo("noticia");
			$consultaBDR = $noticia->actualizarNoticias($valores, $condicion);
		}
		//fin crud noticia

		//metodos crud club
		public function insertarclub()
		{
			$nombreC = $_POST['nombreClub'];
			$contacto =$_POST['contacto'];
			$informacion = $_POST['infoA'];
			$campos = array('nombreClub', 'contacto', 'infoA');
			$valores = array($nombreC, $contacto, $informacion);

			$club = $this->cargarModelo("clubes");
			$consultaBD = $club->registrarclub($campos, $valores);
		}

		//crud deportista
		public function insertarDeportista()
		{
			$nombre = $_POST['nombre'];
			$edad = $_POST['edad'];
			$puntos = $_POST['puntos'];
			$categoria = $_POST['categoria'];
			$nombrecl = $_POST['nombreClub'];

			$campos = array('nombre', 'edad', 'puntos', 'categoria', 'nombreClub');
			$valores = array($nombre, $edad, $puntos, $categoria, $nombrecl);

			$deportista = $this->cargarModelo("deportista");
			$consultaBDD = $deportista->registrarDeportista($campos, $valores); 

		}

		//crud eventos
		public function insertarEvento()
		{
			$numero = $_POST['numero'];
			$titulo = $_POST['titulo'];
			$actividad = $_POST['actividad'];
			$categoria = $_POST['categoria'];
			$modalidad = $_POST['modalidad'];
			$ciudad = $_POST['ciudad'];
			$fecha = $_POST['fecha'];

			$campos = array('numero', 'titulo', 'actividad', 'categoria', 'modalidad', 'ciudad', 'fecha');
			$valores = array($numero, $titulo, $actividad, $categoria, $modalidad, $ciudad,STR_TO_DATE("$fecha", '%Y/%m/%d') );

			$evento = $this->cargarModelo("eventos");
			$consultaBDE = $evento->insertarEventos($campos, $valores);
		}

		//crud organo adminsitrativo
		public function insertarOragnoA()
		{
			$nombre=$_POST['nombre'];
			$contacto = $_POST['contacto'];
			$cargo =$_POST['cargo'];
			$informacion =$_POST['informacion'];
			$campos = array('nombre','contacto', 'cargo', 'informacion');
			$valores = array($nombre, $contacto, $cargo, $informacion);

			print_r($valores);
		}


		public function cargarRankingFHome()
		{
			$rankingF = $this->cargarModelo("rankingF");
			$consultaRF = $rankingF->cargarRankingF();
			$this->cargarVista("rankingF", $consultaRF);
		}

		public function cargarRankingMasculinoHome()
		{
			$rankingMaculino = $this->cargarModelo("rankingM");
			$consultaRM = $rankingMaculino->cargarRankingM();
			$this->cargarVista("rankingM", $consultaRM);
		}

		public function cargarDeportistaHome()
		{
			$deportista = $this->cargarModelo("deportista");
			$consultaDepo = $deportista->cargarDeportistas();
			$this->cargarVista("deportista", $consultaDepo);
		}

		public function cargarEntrenadorHome()
		{
			$entrenador = $this->cargarModelo("entrenador");
			$consultaEntrenador = $entrenador->cargarEntrenadores();
			$this->cargarVista("entrenador", $consultaEntrenador);
		}
		public function cargarClubHome()
		{
			$club = $this->cargarModelo("clubes");
			$consultaClub = $club->cargarClubes();
			$this->cargarVista("clubes", $consultaClub);
		}
		
		public function cargarOrganoAHome()
		{	
			$organoa = $this->cargarModelo("organoAdm");
			$consultaOA = $organoa->consultarOrgA();
			$this->cargarVista("organoAdm", $consultaOA);
		}

		public function cargarEventosHome()
		{
			$eventos = $this->cargarModelo("eventos");
			$consultaEV = $eventos->SeleccionarEventos();
			$this->cargarVista("eventos", $consultaEV);
		}

		

		public function register() 
		{	
			

			$nombre = $_POST["nombre"];
			$username = $_POST["username"];
			$pass = $_POST["pass"];
			$pass2 = $_POST["pass2"];

			$usuario=$this->cargarModelo("usuario");

			$validarNombre = $usuario->validarUsuario($username);
			
			if ($validarNombre == false) 
			{	
				if ($pass == $pass2) 
				{	

					$campos = array('nombre', 'username', 'contrasena');
					$valores = array($nombre, $username, $pass);
					$usuario->registroU($campos, $valores);	 
					$respuesta['estado']="Exito";
					$respuesta['mensaje']="Registro exitoso.";
					echo json_encode($respuesta);
				}
				else
				{
					$respuesta['estado']="Error";
					$respuesta['mensaje']="Las contraseñas no coinciden.";
					echo json_encode($respuesta);
				}
			}	
			else
			{
				$respuesta['estado']="Error";
				$respuesta['mensaje']="El usuario ya se encuentra registrado.";
				echo json_encode($respuesta);
			}	

		}
		
		public function login()
		{
			$username = $_POST["username"];
			$pass = $_POST["pass"];
			$usuario=$this->cargarModelo("usuario");

			$respuesta = $usuario->autenticar($username, $pass);
			$tipo = $respuesta[0]['tipo'];		

			if (count($respuesta)>0 && $tipo == 0) 
			{

				setcookie("user", "$username", time()+3600, "/");
				setcookie("chsm", "logedin", time()+3600, "/");	
				$result['estado']="Exito";			
				$result['mensaje']="Bienvenido";
				echo json_encode($result);
			
			}
			else if (count($respuesta)>0 && $tipo == 1) {
				setcookie("user", "$username", time()+3600, "/");
				setcookie("chsm", "logedinAdmin", time()+3600, "/");
				$result['estado']="Exito";
				$result['mensaje']="Bienvenido";
				echo json_encode($result);
			}
			header('Location: index.php');
		}
		
		public function logout()
		{
			if(isset($_COOKIE['chsm']))
			{
				setcookie("user", "$username", time()-3600, "/");
				setcookie("chsm", "logedin", time()-3600, "/");		
			}
			header('Location: /index.php');
		}
	}


