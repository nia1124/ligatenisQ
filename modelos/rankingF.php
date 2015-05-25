<?php 
require_once('libs/modelo.php'); 

	class RankingF extends modelo
	{
		private $parametros;
		
		function __construct()
		{
			parent::__construct();
			$this->setNombreTabla("ranking");
		}

		function getRankingF()
		{
			$resultado = $this->select()->fetchAll();
			return $resultado;
		}

		function eleminarRankingF()
		{
			$eliminado = $this->delete();
		}

		function actualizarRankingF()
		{
			$actualizado = $this->update();
		}

		function insertarRankingF($campos, $valores)
		{
			$insertado = $this->insert($campos, $valores);
		}

		function cargarRankingF()
		{	
			$consultaRF= "SELECT r.posicion, m.nombre, dep.puntos 
						  FROM deportista dep 
						  INNER JOIN rankingd rd 
						  ON dep.RankingD_id = rd.id 
						  INNER JOIN ranking r 
						  ON r.RankingD_id = rd.id 
						  INNER JOIN miembro m 
						  ON m.id = dep.Miembro_id";
		
			$resultado = $this->cargarRankingModelo($consultaRF);

			return $resultado;
		}


	}

 ?>