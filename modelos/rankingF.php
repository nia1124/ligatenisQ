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
			$resultado= join("(SELECT posicion, nombre, puntos
			FROM resultado[ SELECT (nombre, puntos, posicion) FROM tablaDM[ SELECT (posicion) Deportista 
															   JOIN Miembro 
															   ON Deportista.Miembro_id = Miembro.id]
															   JOIN RankingD
															   ON Deportista.RankingD_id = RankingD.id
															   JOIN [SELECT posicion
															   FROM Ranking 
															   ON RankingD.id = Ranking.RankingD_id]])");
		
			$consultaRF = $this->cargarRanking($resultado)->fetchAll();
			print_r($consultaRF);
		}


	}

 ?>