<?php 
require_once('libs/modelo.php'); 

	class Ranking extends modelo
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
			$consultaRF= "SELECT r.posicion, dep.nombre, dep.puntos
						  FROM deportista dep
						  INNER JOIN rankingd rd 
						  ON dep.RankingD_id = rd.id
						  INNER JOIN ranking r 
						  ON r.RankingD_id = rd.id";
		
			$resultado = $this->cargarRankingModelo($consultaRF);
			return $resultado;
		}


	}

 ?>