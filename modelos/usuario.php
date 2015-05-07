<?php 
	require_once('libs/modelo.php');
	
	class Usuario extends modelo
	{	
		private $parametros;
		
		function __construct()
		{
			parent::__construct();
			$this->setNombreTabla("usuario");
		}

		
		function getUsuarios()
		{
			$this->update();
			return $this->select();
		}


		public function validarUsuario($username)
		{	
			$where = array('username' => "$username");

			$resultado = $this->select(null, $where);
			
			foreach ($resultado as $row ) 
			{	
				if ($username == $row[2]) 
				{
					return true;
				}
			}
			return false;
		}


		public function registroU($campos, $valores)
		{	
			 $this->insert($campos, $valores);
		}
		

		public function autenticar($username, $pass)
		{
			return $this->query("Select * from users where username='$username' and pass='$pass'");
		}
	}
 ?>