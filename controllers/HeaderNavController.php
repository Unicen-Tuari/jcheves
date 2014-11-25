<?php
	class HeaderNavController {
		public function actionmostrarheadernav(){
			include_once "./views/HeaderNavView.php";
			$view = new HeaderNavView ;
			
			if (array_key_exists("nombre", $_SESSION ) ){
				if($_SESSION['admin'] == "1"){
					$view->render($_SESSION['nombre'],$_SESSION['admin']);
				}
				else{
					$view->render($_SESSION['nombre']);
				}
			}

			else{
				$nombre= "Log In / Registrarse";
				$view->render($nombre);
			}
		}
	}
?>
