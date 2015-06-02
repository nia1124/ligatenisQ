<?php 
	require_once('libs/modelo.php');

	
	class organoAdm extends modelo
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

		function consultarOrgA()
		{
			$consultaOAdmin = "SELECT oa.contacto, oa.cargo, oa.informacion, m.nombre, oa.imagen 
								FROM organoadm oa INNER JOIN miembro m ON oa.Miembro_id = m.id";

			$resultado = $this->cargarOrganoAdmin($consultaOAdmin)->fetchAll();
			return $resultado;
		}
	}
 ?>