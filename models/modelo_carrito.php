<?php
include_once "class_db.php";

	class modeloCarrito extends database {
		
		public function load(){

		}

	public function buscarProductoId($idProducto){

		$arr = array(':idProducto' => $idProducto);

		$stringquery =("SELECT r.*,t.nombre AS nombre_tipo,m.nombre AS nombre_marca FROM ropa r
							JOIN tipo t ON (r.tipo = t.idtipo) 
							JOIN marca m ON (r.marca = m.idmarca)
						WHERE	(r.id =:idProducto);");

		return $this->query($stringquery , $arr);
		}
	}