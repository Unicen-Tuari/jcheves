<?php
include_once "class_db.php";

	class busqueda extends database {
		
		public function load(){

		}

		public function load_busqueda($tipo,$marca){
				
				// BORRE r.*, para todos los datos del inicio de cada select
				if (	($tipo ==	-1)	&&	($marca ==	-1) ){
					return $this->query("SELECT r.*, t.nombre AS nombre_tipo,
													m.nombre AS nombre_marca FROM ropa r											JOIN tipo t ON (r.tipo = t.idtipo) 
											JOIN marca m ON (r.marca = m.idmarca)	
										ORDER BY t.nombre,m.nombre asc;");
				}

				if (	($tipo == -1)	&&	($marca !=-1) ){//busca de una marca, los tipos
					return $this->query("SELECT r.*, t.nombre AS nombre_tipo, 
													m.nombre AS nombre_marca FROM ropa r
											JOIN tipo t ON (r.tipo = t.idtipo) 
											JOIN marca m ON (r.marca = m.idmarca)
												WHERE (r.marca = ".$marca.")	
										ORDER BY t.nombre,m.nombre asc;");
				}

				if (	($tipo !=-1)	&&	($marca == -1) ){ //busca de un tipo, las marcas
					return $this->query("SELECT r.*, t.nombre AS nombre_tipo, 
													m.nombre AS nombre_marca FROM ropa r
											JOIN tipo t ON (r.tipo = t.idtipo) 
											JOIN marca m ON (r.marca = m.idmarca)	
												WHERE (r.tipo = ".$tipo.")
										ORDER BY t.nombre,m.nombre asc;");
				}

				if (	($tipo !=-1)	&&	($marca !=-1) ){ // Busca tipo y marca
					return $this->query("SELECT r.*, t.nombre AS nombre_tipo, 
													m.nombre AS nombre_marca FROM ropa r
											JOIN tipo t ON (r.tipo = t.idtipo) 
											JOIN marca m ON (r.marca = m.idmarca)
												WHERE (r.tipo = ".$tipo." AND r.marca = ".$marca.")	
										ORDER BY t.nombre,m.nombre asc;");
				}
		}
	}
?>