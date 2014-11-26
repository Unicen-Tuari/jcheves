<?php
class AdministrarProductos {
		public function actionMostrarAdministrarProductos(){

			if	(isset($_SESSION['nombre']) ){
				if	(($_SESSION['admin'])==1 ){
								
					include_once"./models/modelo_ropa.php";
					include_once"./views/AdministrarProductosView.php";
					
					$modeloProducto = new ropa;
					$arrProductos =$modeloProducto->todos_productos();
					$vistaProducto = new AdministrarProductosView;
					$vistaProducto->render($arrProductos);
				}	
			}
		}

		public function borrarProducto($id){
			include_once"./models/modelo_ropa.php";

			if	(isset($_SESSION['nombre']) ){
				if	(($_SESSION['admin'])==1 ){
					$modeloProducto = new ropa;
					$modeloProducto->borrar_producto($id);
				}	
			}	
			include_once "./views/AlertView.php";
			$alerta= new AlertView;
			$mensaje="Producto borrado exitosamente";
			$clase ="alert-success";

			$alerta->render($mensaje, $clase);

			$this->actionMostrarAdministrarProductos();
		}
	}		
?>