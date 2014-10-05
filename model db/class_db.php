<?php

	//Configuración
	class database {
		private $host 	= "localhost";		// Apache
		private $db	= "tkm";				// Nombre de la DB
		private $user	= "root";			// Nombre del User y la clave
		private $pass	= "";

		protected $conexion;
		protected $arr_resultado_query[];

		function connect () {
			var $conn;
			try{

				$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
			}

			catch(PDOException $pe){
				die('Error de conexion, Mensaje: ' -$pe->getMessage());
			}

			$this->conexion = $conn;
		return;
		}

		function execute ($sql) {
			
				var $q;
				$q = $this->connect();
				$q = $this->conn->query($sql); //Ejecucion
			if(!$q){	
		
	  			die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo()); //Si es null, hubo un error
			}
			return $q->fecthAll();
		}

			function execute_parametrizado ($sql) {

			var $q;
				$q = $this->connect();
				$q = $q->prepare($sql);
				$q	 = $this->conn->query($sql); //Ejecucion

			if(!$q){	
		
	  			die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo()); //Si es null, hubo un error
			}
			return $q->fecthAll();
		}
	}
?>
