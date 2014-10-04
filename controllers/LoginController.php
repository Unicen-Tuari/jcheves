<?php
	class LoginController {
		public function actionLogin(){
			include "./views/LoginView.php";
			$view = new LoginView;
			$view->render();
		}
	}
?>