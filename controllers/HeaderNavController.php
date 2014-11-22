<?php
	class HeaderNavController {
		public function actionmostrarheadernav(){
			include_once "./views/HeaderNavView.php";
			$view = new HeaderNavView ;
			
			if (array_key_exists("nombre", $_SESSION ) ){
				$view->render($_SESSION['nombre']);
			}

			else{
				$nombre= "Log In / Registrarse";
				$view->render($nombre);
			}
		}
	}
?>
