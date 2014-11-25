<?php
include_once "class_db.php";

	class ropa extends database {
		
		public function load(){

		}

		public function buscar_tipo($nombreTipo){
		return $this->query("SELECT t.idtipo
								FROM tipo t
								WHERE t.nombre = '$nombreTipo';");
		}

		

		public function agrega_tipo($nombreTipo){
			$arr = array('nombreTipo' => $nombreTipo
						);

			$stringquery =("INSERT INTO tipo (nombre) VALUES
							(:nombreTipo);");

		return $this->query($stringquery , $arr);

		}




		public function buscar_marca ($nombreMarca){
		return $this->query("SELECT m.idmarca
								FROM marca m
								WHERE m.nombre = '$nombreMarca';");
		}



		public function agrega_marca($nombreMarca){

			$arr = array('nombreMarca' => $nombreMarca
						);

			$stringquery =("INSERT INTO marca (nombre) VALUES
							(:nombreMarca);");

		return $this->query($stringquery , $arr);

		}

//Agregar imagen.
		public function agregar_ropa($idmarca, $idtipo, $descripcion, $precio, $imagen="Path de imagen"){ // Agrega usuario

			$arr = array(':idmarca' 	=>	 $idmarca, 
						 ':idtipo' 		=>	 $idtipo,
						 ':descripcion' => 	 $descripcion,
						 ':precio' 		=> 	 $precio,
						 ':imagen' 		=>	 $imagen
						);

			$stringquery =("INSERT INTO ropa (marca,tipo,descripcion,precio,imagen) VALUES
							(:idmarca , :idtipo , :descripcion, :precio, :imagen);");

		return $this->query($stringquery , $arr);
		}
	}
?>