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

		function getRanking()
		{
			$resultado = $this->select()->fetchAll();
			return $resultado;
		}

		function eleminarRanking()
		{
			$eliminado = $this->delete();
		}

		function actualizarRanking()
		{
			$actualizado = $this->update();
		}

		function insertarRanking($campos, $valores)
		{
			$insertado = $this->insert($campos, $valores);
		}

	}

 ?>