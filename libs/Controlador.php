<?php
	
	class Controlador
	{
		protected $parametrosC;


		public function getParametrosC()
		{
			return $this->parametrosC;
		}

		function setParametrosC($param)
		{
			$this->parametrosC=$param;
		}

		protected function cargarModelo($nombre)
		{
			$nombre=ucfirst(strtolower($nombre));

			$file = 'modelos/' . $nombre . '.php';
			if (file_exists($file))
			{
				include $file;
				$class = $nombre;
				$controller = new $class();
				return $controller;		
			}
			else 
			{
				return null;
			}
		}


		protected function cargarVista($nombreVista, $params = null)
		{	
			$vista = 'vistas/' . $nombreVista . '.php';
			
			if (file_exists($vista)) 
			{
				$parametros =  $params;
				//print_r($parametros);
				include_once($vista);
				
			}
			else 
			{
				return false;
			}
		} 
	}	
	
?>