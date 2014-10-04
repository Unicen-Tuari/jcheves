<?php
	class RegistrarseController {
		public function actionRegistrarse(){
			include "./views/RegistrarseView.php";
			$view = new RegistrarseView;
			$view->render();
		}
	}
?>