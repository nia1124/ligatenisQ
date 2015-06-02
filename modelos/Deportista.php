<?php 
	require_once('libs/modelo.php'); 
	
	class deportista extends modelo
	{
		
		function __construct()
		{
			parent::__construct();
			$this->setNombreTabla("deportista");
		}

		function getDeportista()
		{
			$resultado = $this->select()->fetchAll();
			return $resultado;
		}

		function eleminarDeportista()
		{
			$eliminado = $this->delete();
		}

		function actualizarDeportista()
		{
			$actualizado = $this->update();
		}

		function insertarDeprotista($campos, $valores)
		{
			$insertado = $this->insert($campos, $valores);
		}

		function cargarDeportistas()
		{	
			$consultaD= "SELECT dep.foto, m.nombre, dep.edad, dep.puntos, dep.categoria, c.nombreClub FROM deportista dep INNER JOIN miembro m ON dep.Miembro_id = m.id INNER JOIN club c ON dep.Club_id = c.id";
			$resultado = $this->cargarDeportistaModelo($consultaD)->fetchAll();
			return $resultado;
		}

	}

 ?>