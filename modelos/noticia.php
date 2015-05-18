<?php 
	require_once('libs/modelo.php'); 

	class Noticia extends modelo
	{
		private $parametros;
		
		function __construct()
		{
			parent::__construct();
			$this->setNombreTabla("noticia");
		}

		
		function getNoticias()
		{
			$resultado= $this->select()->fetchAll();
			return $resultado;
		}

		function eliminarNoticias()
		{
			$eliminado = $this->delete();
		}

		function actualizarNoticias()
		{
			$actualizada = $this->update();
		}

		function registrarNoticia($campos, $valores)
		{
			$this->insert($campos, $valores);
		}
	}
	

 ?>