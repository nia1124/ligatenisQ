<?php 
	require_once('libs/modelo.php'); 
	
	class clubes extends modelo
	{
		
		function __construct()
		{
			parent::__construct();
			$this->setNombreTabla("club");
		}

		function getClub()
		{
			$resultado = $this->select()->fetchAll();
			return $resultado;
		}

		function eleminarClub()
		{
			$eliminado = $this->delete();
		}

		function actualizarClub()
		{
			$actualizado = $this->update();
		}

		function registrarclub($campos, $valores)
		{
			$insertado = $this->insert($campos, $valores);
		}

		function cargarClubes()
		{	
			$consultaC= "SELECT c.imagen, c.nombreClub, c.contacto, c.infoA FROM club c";
			$resultado = $this->cargarClubesModelo($consultaC)->fetchAll();
			return $resultado;
		}

	}

 ?>