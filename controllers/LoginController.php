<?php
	class LoginController {
		public function actionmostrarLogin(){
			include_once "./views/LoginView.php";
			$view = new LoginView;
			$view->render();
		}

		public function actiondataLogin(){
			
			include_once "./models/modelo_usuario.php";
			$usuario =$_REQUEST['username'];
			$password =$_REQUEST['password'];

			$busquedaUsuario = new usuario;
			$resultado = $busquedaUsuario -> buscar_usuario_clave($usuario, $password);
			if ($resultado != null){
				$_SESSION['idusuario'] = $resultado[0]['idusuario'];
				$_SESSION['nombre'] = $usuario;
				$_SESSION['admin'] = $resultado[0]['admin'];
				include_once "./controllers/Headernavcontroller.php";
				$headernavcontroller = new HeaderNavController;
				$headernavcontroller->actionmostrarheadernav();
				include_once "./controllers/IndexController.php";
				$controller = new IndexController();
				$controller->actionIndex();
			}

			else{
				echo "<script type=\"text/javascript\">alert(\"Usuario o clave erroneos\");</script>";
				include_once "./controllers/LoginController.php";
				$controller = new LoginController();
				$controller->actionmostrarLogin();
			}
		}
	}
?>