<?php
include_once "class_db.php";

	class busqueda extends database {

		public function load($tipo,$busqueda){
				
				if (	($tipo =-1)	&&	($marca =-1) ){
					return $this->query("SELECT t.nombre,m.nombre FROM ropa r
											JOIN tipo t ON (r.tipo = t.idtipo) 
											JOIN marca m ON (r.marca = m.idmarca)	
										ORDER BY t.nombre asc;");
				}

				if (	($tipo =-1)	&&	($marca !=-1) ){//busca de una marca, los tipos
					return $this->query("SELECT t.nombre,m.nombre FROM ropa r
											JOIN tipo t ON (r.tipo = t.idtipo) 
											JOIN marca m ON (r.marca = m.idmarca)	
										ORDER BY t.nombre asc;");
				}

				if (	($tipo !=-1)	&&	($marca =-1) ){ //busca de un tipo, las marcas
					return $this->query("SELECT t.nombre,m.nombre FROM ropa r
											JOIN tipo t ON (r.tipo = t.idtipo) 
											JOIN marca m ON (r.marca = m.idmarca)	
										ORDER BY t.nombre asc;");
				}

				if (	($tipo !=-1)	&&	($marca !=-1) ){ // Busca tipo y marca
					return $this->query("SELECT t.nombre,m.nombre FROM ropa r
											JOIN tipo t ON (r.tipo = t.idtipo) 
											JOIN marca m ON (r.marca = m.idmarca)	
										ORDER BY t.nombre asc;");
				}
		}
	}
?>