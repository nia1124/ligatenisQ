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

			$rankingF = $this->cargarModelo("rankingF");
			$consultaRF = $rankingF->getRankingF();
			$this->cargarVista("rankingF", $consultaRF);

			$usuario=$this->cargarVista("index");


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

				setcookie("chsm", "logedin", time()+3600, "/");
				$result['estado']="Exito";			
				$result['mensaje']="Bienvenido";
				echo json_encode($result);
				
			}
			elseif (count($respuesta)>0 && $tipo == 1) {
				setcookie("chsm", "logedinAdmin", time()+3600, "/");
				$result['estado']="Exito";
				$result['mensaje']="Bienvenido";
				echo json_encode($result);
				
			}
		}
		
		
		public function logout()
		{
			setcookie("chsm", "", time() - 3600,"/");
			header("location: /ligatenisQ");
		}

		//public function cargarNoticiasBD()
		//{
			
		//}

		public function cargarRankingFHome()
		{
			$rankingF = $this->cargarModelo("rankingF");
			$consultaRF = $rankingF->getRankingF();
			$this->cargarVista("rankingF", $consultaRF);
		}
		
		public function insertarNoticias()
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

			print_r($valores);
			$noticia = $this->cargarModelo("noticia");
			$consultaBDR = $noticia->registrarNoticia( $campos, $valores);


		}
	}
?>