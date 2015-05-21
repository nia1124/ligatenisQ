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

	}

 ?>