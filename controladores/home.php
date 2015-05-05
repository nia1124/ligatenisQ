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

					$campos = array('nombre', 'username', 'pass');
					$valores = array($nombre, $username, $pass);

					$registrarUsuario = $usuario->registroU($campos, $valores);	 
				}
				else
				{
					echo "Verifique la contraseña";
				}
			}	
			else
			{
				echo "El usuario ya se encuentra registrado";
			}	

		}
			
		
		public function login()
		{
			$username = $_POST["username"];
			$pass = $_POST["pass"];

			$usuario=$this->cargarModelo("usuario");

			$respuesta = $usuario->autenticar($username, $pass);

			if ($respuesta != null && $respuesta->rowcount()>0) 
			{
				setcookie("chsm", "logedin", time()+3600, "/");
				header("location: /ligatenisQ");
				exit;
			}
			else
			{
				echo "login fallido";
				$this->cargarVista("index");
			}

		}
		
		
		public function logout()
		{
			setcookie("chsm", "", time() - 3600,"/");
			header("location: /ligatenisQ");
		}
	}

?>