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
			print_r($respuesta);
			
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
			else
			{
				$result['estado']="Error";
				$result['mensaje']="Usuario y contraseña no encontrados";
				echo json_encode($result);
			}

		}
		
		
		public function logout()
		{
			setcookie("chsm", "", time() - 3600,"/");
			header("location: /ligatenisQ");
		}
	}

?>