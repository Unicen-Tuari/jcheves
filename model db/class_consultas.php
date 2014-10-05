<?php
	include 'class_db.php';

	class consulta extends database {

		private $consulta;

		/*	TODOS LOS TIPOS (Boton desplegable de TIPOS)	*/

		function todos_tipos () {
			$this->consulta	=  "SELECT * FROM tipo order by nombre asc";
			$this->connect();
			$this->execute($this->consulta);
		return;
		}

		/* TODAS LAS MARCAS 	(Boton desplegable de MARCAS)	*/
		function todas_marcas () {
			$this->consulta	= "SELECT * FROM marca order by nombre asc";
			$this->connect();
			$this->execute($this->consulta);
		return;
		}

		/*	QUERY  :  UN PRODUCTO DE UNA MARCA	*/
			/*	Recibe marca y tipo como parametro, debe devolver arreglo de productos	*/
		function tipo_marca ($marca,$tipo) {
			$this->consulta =	"SELECT p.*,t.nombre AS nombre_tipo, m.nombre AS nombre_marca FROM prenda p
  									JOIN tipo t ON (p.id_tipo = t.id_tipo)
  										JOIN marca m ON (p.id_marca = m.id_marca)
  										WHERE (p.id_tipo = :id_tipo AND p.id_marca = :id_marca )

  										ORDER BY nombre_tipo ASC , nombre_marca ASC , p.nombre ASC; ";
			$this->connect();
			$this->execute($this->consulta);
		return;
		}

		/*	QUERY : TODOS lOS PRODUCTOS DE UNA MARCA	*/
		/*	Recibe marca como parametro, debe devolver arreglo de productos	*/
		function marca_todos_tipos ($marca) {
			$this->consulta	=  "SELECT p.*,t.nombre AS nombre_tipo, m.nombre AS nombre_marca FROM prenda p
  									JOIN tipo t ON (p.id_tipo = t.id_tipo)
  										JOIN marca m ON (p.id_marca = m.id_marca)
  										WHERE (p.id_marca = :id_marca )

  										ORDER BY nombre_tipo ASC , nombre_marca ASC , p.nombre ASC; ";
			$this->connect();
			$this->execute($this->consulta);
		return;
		}

		/*	QUERY: TODAS LAS MARCAS DE UN TIPO DE PRODUCTO	*/
			/*	Recibe tipo de producto como parametro, debe devolver arreglo de productos	*/
		function tipo_todas_marcas ($tipo) {
			$this->consulta	=  "SELECT p.*,t.nombre AS nombre_tipo, m.nombre AS nombre_marca FROM prenda p
  									JOIN tipo t ON (p.id_tipo = t.id_tipo)
  										JOIN marca m ON (p.id_marca = m.id_marca)
  										WHERE (p.id_tipo = :id_tipo)

  										ORDER BY nombre_tipo ASC , nombre_marca ASC , p.nombre ASC; ";
			$this->connect();
			$this->execute($this->consulta);
		return;
		}		

		/* TODOS LOS TIPOS DE PRODUCTOS DE TODAS LAS MARCAS */
		function todo () {

			$this->consulta	=  "SELECT p.*,t.nombre AS nombre_tipo, m.nombre AS nombre_marca FROM prenda p
  									JOIN tipo t ON (p.id_tipo = t.id_tipo)
  										JOIN marca m ON (p.id_marca = m.id_marca)

  										ORDER BY nombre_tipo ASC , nombre_marca ASC , p.nombre ASC; ";

			$this->connect();
			$this->execute($this->consulta);
		return;	
		}

	}
?>