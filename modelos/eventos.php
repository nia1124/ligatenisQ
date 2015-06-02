<?php 
require_once('libs/modelo.php'); 

	class eventos extends modelo
	{
		private $parametros;
		
		function __construct()
		{
			parent::__construct();
			$this->setNombreTabla("evento");
		}

		function SeleccionarEventos()
		{
			$resultado = $this->select()->fetchAll();
			return $resultado;
		}

		function eleminarEventos()
		{
			$eliminado = $this->delete();
		}

		function actualizarEventos()
		{
			$actualizado = $this->update();
		}

		function insertarEventos($campos, $valores)
		{
			$insertado = $this->insert($campos, $valores);
		}
	}

 ?>