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

		public function insertar_carrito($idusuario){

			$arr = array(':idusuario' => $idusuario
							);

			$stringquery =("INSERT INTO carrito (id_usuario) VALUES
								(:idusuario);");

			return $this-> insert_retornaUltimaId($stringquery , $arr);

		}

		public function insertar_productocarrito($idropa, $idcarrito, $cantidad, $precio){

			$arr = array(':idropa'    =>$idropa,
						 ':idcarrito' =>$idcarrito,
						 ':cantidad'  =>$cantidad,
						 ':precio'	  =>$precio
							);

			$stringquery =("INSERT INTO productoscarrito (id_ropa, id_carrito, cantidad, precio) VALUES
								(:idropa, :idcarrito, :cantidad, :precio);");

			return $this-> insert_retornaUltimaId($stringquery , $arr);

		}

		public function load_datos_compra($idcarrito){
			$arr = array(':idcarrito' => $idcarrito);

			$stringquery =("SELECT t.nombre AS nombre_tipo,m.nombre AS nombre_marca,
       								pc.cantidad AS cantidad , pc.precio AS precio
        							FROM carrito c

	    							JOIN productoscarrito pc ON (c.id_carrito = pc.id_carrito)
            						JOIN ropa r ON (pc.id_ropa = r.id)
	    							JOIN tipo t ON (r.tipo = t.idtipo) 
	    							JOIN marca m ON (r.marca = m.idmarca)

                					WHERE (c.id_carrito = :idcarrito)
                     					ORDER BY t.nombre ASC;");

		return $this->query($stringquery , $arr);
		}
	}