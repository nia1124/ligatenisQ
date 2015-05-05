<?php
// Archivo de encargado de procesar peticiones 
class FrontController
{
	private $controlador = "home";
	private $metodo="index2";
	private $params;

	public function _getControlador()
	{
		return $this->controlador;
	}

	public function _setControlador($controlador)
	{
		if (!is_null($controlador))
		{
			$this->controlador = $controlador;	
		}
		else
		{

		}
		 
	}

	public function _getMetodo()
	{
		return $this->metodo;
	}

	public function _setMetodo($metodo)
	{
		if (!is_null($metodo))
		{
			$this->metodo = $metodo;	
		}
		else
		{
			
		}	
		
	}

	public function _getParams()
	{
		return $this->params;
	}

	public function _setParams($parametros)
	{
		if (!is_null($parametros))
		{
			$this->params = $parametros;	
		}
		else
		{

		}
		
	}

	public function index()
	{
		$url = $_SERVER["REQUEST_URI"];
		$path = trim(parse_url($url, PHP_URL_PATH), "/");



		try
		{
			@list($appname, $controlador, $metodo, $params) = explode("/", $path, 4);
			@$params = (explode('/', $params));

			if($controlador != "index.php")
			{
				// ahora se invoca el método cargar controlador 
				$nuevoControlador = $this -> cargarControlador($controlador);
				
			}
			else
			{
				$nuevoControlador = $this -> cargarControlador($this->controlador);
			}
			//asumimos que este metodo existe pues aun no ha sido creado

			if(!isset($params))
			{
				$nuevoControlador->setParametros($params);	
			}
			
			//creamos una variable para almacenar el nombre
			//del metod de manera temporal
			if($metodo != null)
			{
				$stringMetodo  = $metodo;	
			}
			else
			{
				$stringMetodo = $this->metodo;
			}
			
			// se ejecuta el método desde el controlador
				$nuevoControlador->$stringMetodo();
			
		}
		catch (Exception $e)
		{
			$e->getMessage();
		}
	}	

	public function cargarControlador($controlador)
	{
		//se coloca en mayuscula el primer caracter 
		//y el resto en minuscula
		$controlador = ucfirst(strtolower($controlador));
		//Creamos una URL donde se buscara el controlador.
		$urlFile = 'controladores/' . $controlador . '.php';
		//Se verifica si el archivo existe
		if(file_exists($urlFile))
		{
			//incluimos ese archivo
			include $urlFile;
			//El nombre del archivo debe ser
			//igual al nombre de la clase
			$class = $controlador;
			//creamos instancia del controlador
			$controller = new $class();
			return $controller;
		}
		else
		{
			return null;
		}

	}

	

	
}


$frontController = new frontController();
$frontController-> index();
?>