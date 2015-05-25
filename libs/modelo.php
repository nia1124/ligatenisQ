<?php
	class Modelo
	{	
		private $host = "localhost";
		private $bdname = "ligatenisq";
		private $usuario = "root";
		private $contrasena = "";

		protected $nombreTabla;  


		function getNombreTabla()
		{
			return $this->nombreTabla;
		}

		function setNombreTabla($nombreT)
		{
			$this->nombreTabla=$nombreT;
		}


		function __construct()
		{
			try 
			{	
				$this->conexion = new PDO("mysql:host={$this->host};dbname={$this->bdname}", $this->usuario, $this->contrasena);
			}	
			 catch (PDOException $exception) {
				echo "error conexion: " . $exception->getMessage();
			}
		}

		protected function query($query)
		{
			try{
				
				return $this->conexion->query($query);
			}
			 
			 catch (Exception $exception) {
				echo "error conexion: " . $exception->getMessage();
			}
		}	

		function select($parametros = null, $where = null)
		{
			$query="SELECT ";

			if($parametros == null)
			{
				$query .= "* ";
			}
			else
			{	
				$final= end($parametros);
				$coma = " ";
				foreach ($parametros as $parametro)
				{	
					
					if($final != $parametro)
					{
						$query .=  $coma.$parametro;
						$coma = ", ";
					}
					else
					{
						$coma .= "";	
						$query .= $coma.$parametro." ";
					}
					
				}
			}
			$query .= "from $this->nombreTabla ";

			if ($where != null)
			{	
				$var = end($where);
				$query .="WHERE ";				
				foreach ($where as $key => $value)
				{
					if(is_int($value))
					{
						$query .= "$key = $value";
					}
					else
					{
						$query .= "$key = '$value' ";
					}
					
					if ($var != $value) 
					{
						$query .='AND ';
					}
					else
					{
						$query .=" ";
					}
					
				}
			}
			
			return $this->query($query);	
		}



		function insert($campos = null, $valores = null)
		{
			$queryInsert="INSERT INTO $this->nombreTabla ";

			if($campos == null || $valores == null)
			{
				echo "error campos o valores nulos ";
			}

			else
			{
				if (count($campos)==count($valores))
				{
					$campoFinal=end($campos);
					$valorFinal=end($valores);
						
					$queryInsert .="( ";
					foreach ($campos as $campo)
					{	
						if($campoFinal != $campo)
						{
							$queryInsert .= $campo.', ';
						}
						else
						{
							$queryInsert .=$campo.' ';
						}
					}

					$queryInsert.=") ";
					$queryInsert.="VALUES ";
					$queryInsert.="( ";

					foreach ($valores as $valor) 
					{	
						if (is_int($valor))
						{
							$queryInsert .=$valor;
						}

						else
						{
							$queryInsert .="'$valor'";
						}

						if ($valorFinal != $valor) 
						{
							$queryInsert .=', ';
						}
						else
						{
							$queryInsert .=' ';
						}
					}
					$queryInsert.=") ";
				}

			}
			echo "$queryInsert";
			$this->query($queryInsert);	
		}


		//UPDATE `usuario` SET `id`=[value-1],`nombre`=[value-2],`apellidos`=[value-3],`edad`=[value-4] WHERE 1
		function update($camposA = null, $where = null)
		{
			$queryUpdate = "UPDATE $this->nombreTabla SET ";
			if($camposA == null)
			{
				echo "error campos o valores nulos ";
			}

			else
			{	
				$campoFinal=end($camposA);
				foreach ($camposA as $key => $campo) 
				{	
					$queryUpdate.="$key = '$campo'";
					if ($campoFinal != $campo )
					{
						$queryUpdate.= ', ';
					}
					else
					{
						$queryUpdate.=' ';
					}			
				}	
			}

			if ($where != null) 
			{
				$queryUpdate .= "WHERE ";
				foreach ($where as $key => $value) 
				{
					$queryUpdate .= "$key = '$value'";
				}
			}

				$this->query($queryUpdate);	 	 
		}			


		//DELETE FROM `usuario` WHERE 1
		function delete($where = null)
		{
			$queryDelete="DELETE FROM $this->nombreTabla";
			if ($where != null) 
			{	
				$queryDelete .= "WHERE ";
				foreach ($where as $key => $value) 
				{
					$queryDelete .= "$key = '$value'";
				}
			}
			$this->query($queryDelete);
		}

		public function cargarRankingModelo($consultaRf)
		{
			$this->query($consultaRf);
		}

		public function cargarDeportistaModelo($consultaDep)
		{
			$this->query($consultaDep);
		}
		
	}
?>