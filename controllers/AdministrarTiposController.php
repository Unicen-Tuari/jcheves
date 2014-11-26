<?php
class AdministrarTipos {
		public function actionMostrarAdministrarTipos(){

			if	(isset($_SESSION['nombre']) ){
				if	(($_SESSION['admin'])==1 ){
								
					include_once"./models/modelo_tipo.php";
					include_once"./views/AdministrarTiposView.php";
					
					$modeloTipo = new tipo;
					$arrTipos =$modeloTipo->load();
					$vistaTipo = new AdministrarTiposView;
					$vistaTipo->render($arrTipos);
				}	
			}
		}

		public function borrarTipo($id){
			include_once"./models/modelo_tipo.php";

			if	(isset($_SESSION['nombre']) ){
				if	(($_SESSION['admin'])==1 ){
					$modeloTipo = new tipo;
					$modeloTipo->borrar_tipo($id);
				}	
			}	
			include_once "./views/AlertView.php";
			$alerta= new AlertView;
			$mensaje="Tipo borrado exitosamente";
			$clase ="alert-success";

			$alerta->render($mensaje, $clase);

			$this->actionMostrarAdministrarTipos();
		}
	}		
?>