<?php

	//Configuración
	abstract class database {
		private $host 	= "localhost";		// Apache
		private $db		= "tkm";				// Nombre de la DB
		private $user 	= "root";			// Nombre del User y la clave
		private $pass	= "";

		protected $conexion = null;

		protected abstract function load();

		protected function connect(){
			$conn = null;
			
			try{
				$conn = new PDO(
					"mysql:host=$this->host;dbname=$this->db",
					$this->user,
					$this->pass
				);
			}
			catch(PDOException $pe){
				die('Error de conexion, Mensaje: ' .$pe->getMessage());
			}
			$this->conexion = $conn;
			return $conn;
		}

		public function connection(){
			if ($this->conexion == null)
				$this->connect();
		return $this->conexion;	
		}
	
		public function query($sql,	$arreglo = false){
			
			$conn = $this->connection();
			$resultado = $conn->prepare($sql);
			
			if ($arreglo==false) {
				$resultado->execute();
			}
			else{
				$resultado->execute($arreglo);	
			}
			
			if(!$resultado){
				die(print($conn->errorInfo()));
			}

			$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
		return $data;
		}

		public function insert_retornaUltimaId($sql, $param = false){
			$conn = $this->connect();
			//Ejecucion
			if (!$param){
				$q	 = $conn->query($sql);
			} else if ($param) {
				$q = $conn->prepare($sql);
				$q->execute($param);
				 
			}
			//Si es null, hubo un error
			if(!$q)
			{
			  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
			}
			/* Si fue exitoso retorna el ID */
			return $conn->lastInsertId();
		}

	}
?>
