<?php 
	require_once('libs/modelo.php');

	
	class OrganoAdmin extends modelo
	{
		
		function __construct()
		{
			parent::__construct();
			$this->setNombreTabla("organoadm");
		}

		function getOrganoA()
		{
			$resultado= $this->select()->fetchAll();
			return $resultado;
		}

		function eleminarOrganoA()
		{
			$eliminado = $this->delete();
		}

		function actualizarOrganoA()
		{
			$actualizado = $this->update();
		}

		function registrarOrganoA($campos, $valores)
		{
			$insertado = $this->insert($campos, $valores);
			
		}
	}
 ?>