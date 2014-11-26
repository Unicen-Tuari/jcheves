<?php
class AdministrarMarcas {
		public function actionMostrarAdministrarMarcas(){

			if	(isset($_SESSION['nombre']) ){
				if	(($_SESSION['admin'])==1 ){
								
					include_once"./models/modelo_marca.php";
					include_once"./views/AdministrarMarcasView.php";
					
					$modeloMarca = new marca;
					$arrMarcas =$modeloMarca->load();
					$vistaMarca = new AdministrarMarcasView;
					$vistaMarca->render($arrMarcas);
				}	
			}
		}

		public function borrarmarca($id){
			include_once"./models/modelo_marca.php";

			if	(isset($_SESSION['nombre']) ){
				if	(($_SESSION['admin'])==1 ){
					$modeloMarca = new marca;
					$modeloMarca->borrar_marca($id);
				}	
			}	
			include_once "./views/AlertView.php";
			$alerta= new AlertView;
			$mensaje="Marca borrado exitosamente";
			$clase ="alert-success";

			$alerta->render($mensaje, $clase);

			$this->actionMostrarAdministrarMarcas();
		}
	}		
?>