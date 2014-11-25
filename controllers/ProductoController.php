<?php
	class ProductoController {

		public function mostrarAgregarProducto(){

			include_once "./views/AgregarProductoView.php";

			$view = new AgregarProductoView;
			$view->render();
		}	

		public function AgregarProducto(){

			if(isset($_SESSION['nombre'])){
				if(isset($_SESSION['admin'])){
	
					include_once"./models/modelo_ropa.php";
					$modeloRopa = new ropa;
					
					if($modeloRopa->buscar_tipo($_REQUEST['tipo'])== NULL ){
				
						//Si el tipo no existe hay que crearla
							$modeloRopa->agrega_tipo($_REQUEST['tipo']);

						include_once "./views/AlertView.php";
						$alerta= new AlertView;
						$mensaje="Tipo agregado exitosamente";
						$clase ="alert-success";
						$alerta->render($mensaje, $clase);
					}
						//Si no existia, ahora existe, tomamos ID
						$tipoagregar =$modeloRopa->buscar_tipo($_REQUEST['tipo']);
						settype($tipoagregar, "integer");
						

					
					if($modeloRopa->buscar_marca($_REQUEST['marca']) == NULL ){
						
						//Si la marca no existe hay que crearla
						$modeloRopa->agrega_marca($_REQUEST['marca']);
						$marcaagregar =$modeloRopa->buscar_marca($_REQUEST['marca']);
						settype($marcaagregar, "integer");

						include_once "./views/AlertView.php";
						$alerta= new AlertView;
						$mensaje="Marca agregada exitosamente";
						$clase ="alert-success";
						$alerta->render($mensaje, $clase);

						
					}
						//Si no existia, ahora existe, tomamos ID
						$marcaagregar =$modeloRopa->buscar_marca($_REQUEST['marca']);
						settype($marcaagregar, "integer");

					$descripcionagregar=	$_REQUEST['descripcion'];
					$precioagregar=	$_REQUEST['precio'];
					
					//Agregamos el producto
					$modeloRopa->agregar_ropa($marcaagregar, $tipoagregar, $descripcionagregar, $precioagregar);

					//muestra el alert de exito

					include_once "./views/AlertView.php";
						$alerta= new AlertView;
						$mensaje="Producto agregado exitosamente";
						$clase ="alert-success";
						$alerta->render($mensaje, $clase);

						include_once "./views/AgregarProductoView.php";
						$view = new AgregarProductoView;
						$view->render();
					
				}
			}
		}
	}
?>