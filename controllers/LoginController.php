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

				//actualiza la barra de navegacion
				include_once "./controllers/Headernavcontroller.php";
				$headernavcontroller = new HeaderNavController;
				$headernavcontroller->actionmostrarheadernav();

				//muestra el alert de exito de login

				include_once "./views/AlertView.php";
				$alerta= new AlertView;
				$mensaje="Logueado exitosamente";
				$clase ="alert-success";

				$alerta->render($mensaje, $clase);

				//redirige a home
				include_once "./controllers/IndexController.php";
				$controller = new IndexController();
				$controller->actionIndex();
			}

			else{

				//actualiza la barra de navegacion
				include_once "./controllers/Headernavcontroller.php";
				$headernavcontroller = new HeaderNavController;
				$headernavcontroller->actionmostrarheadernav();

				//muestra el alert de error al login
				include_once "./views/AlertView.php";
				$alerta= new AlertView;
				$mensaje="Usuario o password erroneos";
				$clase ="alert-warning";

				$alerta->render($mensaje, $clase);

				//redirige a login otra vez
				$controller = new LoginController();
				$controller->actionmostrarLogin();
			}
		}
	}
?>