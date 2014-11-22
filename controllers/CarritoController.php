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
						$carritoMostrar[]=$auxProducto[0];
					}
					$view = new CarritoView;
					$view->render($carritoMostrar);
				}	
				else{
					//Alert usted no tiene carrito
				}
			}
			else{
				// Que hacer si no esta logueado  y llega a mostrar carrito
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
						$_SESSION['carrito'][$_REQUEST['idProducto']] = true; // creamos una posicion en el carrito con el ID de producto
					}
			}
		}
	}


?>