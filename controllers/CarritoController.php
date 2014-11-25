<?php
	class CarritoController {
		public function actionMostrarCarrito(){

			if	(isset($_SESSION['nombre']) ){
			
				if (isset($_SESSION['carrito']) ){
					include_once "./views/CarritoView.php";
					include_once"./models/modelo_carrito.php";
					$carritoQuery= new modeloCarrito;
					$carritoMostrar = array();

					foreach ($_SESSION['carrito'] as $idProducto=> $cantidad){ //cantidad contiene true

						$auxProducto=$carritoQuery->buscarProductoId($idProducto);
						$auxProducto[0]['cantidad']= $cantidad;
						$carritoMostrar[]=$auxProducto[0];
					}
					$view = new CarritoView;
					$view->render($carritoMostrar);
				}	
				else{
					// carrito vacio por ahora
				}
			}
			else{
				
			}
			
		}

		public function agregarProductoCarrito(){
			if	(!isset($_SESSION['nombre']) ){
					// No logueado, mandar a login
			}
			else{
					if (isset($_REQUEST['idProducto'])){
						if (!isset($_SESSION['carrito']) ){
							$_SESSION['carrito'] = array();
						}
							if (!isset($_SESSION['carrito'][$_REQUEST['idProducto']]) ){
								$_SESSION['carrito'][$_REQUEST['idProducto']] = 1; // creamos una posicion en el carrito con el ID de producto
							}
							else{
								$_SESSION['carrito'][$_REQUEST['idProducto']] = $_SESSION['carrito'][$_REQUEST['idProducto']]+1;
							}
						
						include_once "./views/AlertView.php";
						$alerta= new AlertView;
						$mensaje="Item comprado exitosamente";
						$clase ="alert-success";

						$alerta->render($mensaje, $clase);
					}
			}
		}
	}


?>