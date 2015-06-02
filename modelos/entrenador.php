<?php 
	require_once('libs/modelo.php'); 

	class entrenador extends modelo
	{
		
		function __construct()
		{
			parent::__construct();
			$this->setNombreTabla("entrenador");
		}

		function getEntrenador()
		{
			$resultado = $this->select()->fetchAll();
			return $resultado;
		}

		function eleminarEntrenador()
		{
			$eliminado = $this->delete();
		}

		function actualizarEntrenador()
		{
			$actualizado = $this->update();
		}

		function insertarEntrenador($campos, $valores)
		{
			$insertado = $this->insert($campos, $valores);
		}

		function cargarEntrenadores()
		{	
			$consultaE= "SELECT ent.foto, m.nombre, ent.profesion, ent.cargo, c.nombreClub FROM entrenador ent INNER JOIN miembro m ON ent.Miembro_id = m.id INNER JOIN club c ON ent.clubid = c.id";
			$resultado = $this->cargarEntrenadorModelo($consultaE)->fetchAll();
			return $resultado;
		}

	}


 ?>