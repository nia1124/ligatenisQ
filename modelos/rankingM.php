<?php 
require_once('libs/modelo.php'); 
	
	class rankingM extends modelo
	{
		function __construct()
		{
			parent::__construct();
			$this->setNombreTabla("ranking");
		}

		function getRankingM()
		{
			$resultado = $this->select()->fetchAll();
			return $resultado;
		}

		function eleminarRankingM()
		{
			$eliminado = $this->delete();
		}

		function actualizarRankingM()
		{
			$actualizado = $this->update();
		}

		function insertarRankingM($campos, $valores)
		{
			$insertado = $this->insert($campos, $valores);
		}

		function cargarRankingM()
		{	
			$consultaRM= "SELECT r.posicion, m.nombre, dep.puntos 
						  FROM deportista dep 
						  INNER JOIN rankingd rd 
						  ON dep.RankingD_id = rd.id 
						  INNER JOIN ranking r 
						  ON r.RankingD_id = rd.id 
						  INNER JOIN miembro m 
						  ON m.id = dep.Miembro_id
						  WHERE dep.genero = 0";
		
			$resultado = $this->cargarRankingModeloMas($consultaRM);

			return $resultado->fetchAll();
		}
	}


 ?>