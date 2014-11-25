<?php
	class RegistrarseController {
		public function actionMostrarRegistrarse(){
			include_once "./views/RegistrarseView.php";
			$view = new RegistrarseView;
			$view->render();
		}

		public function actionRegistrarse(){ //Si los datos se ingresaron correctamente y no existe el usuario, lo crea
			include_once "./models/modelo_usuario.php";

			$usuario =$_REQUEST['username'];
			$email =$_REQUEST['email'];
			$password =$_REQUEST['password'];
			$verifpassword=$_REQUEST['verifpassword'];
			$agregar = new usuario;

			if($agregar->buscar_usuario($usuario)== null){
				if ($password == $verifpassword){
					//Se dan todas las condiciones, insertamos el user en la base
					$agregar->insertar_usuario($usuario,$email,$password);

					include_once "./controllers/Headernavcontroller.php";
						$headernavcontroller = new HeaderNavController;
						$headernavcontroller->actionmostrarheadernav();
					
				//muestra el alert de exito

					include_once "./views/AlertView.php";
						$alerta= new AlertView;
						$mensaje="Registrado exitosamente";
						$clase ="alert-success";

						$alerta->render($mensaje, $clase);

					include_once "./controllers/LoginController.php";
						$controller = new LoginController();
						$controller->actionmostrarLogin();
				}
				else{
					
					//actualiza la barra de navegacion
					include_once "./controllers/Headernavcontroller.php";
						$headernavcontroller = new HeaderNavController;
						$headernavcontroller->actionmostrarheadernav();

					//muestra el alert

					include_once "./views/AlertView.php";
						$alerta= new AlertView;
						$mensaje="La contraseña y la verificacion no coinciden";
						$clase ="alert-warning";

						$alerta->render($mensaje, $clase);

					//Redireccion a registrarse
					include_once "./controllers/RegistrarseController.php";
						$controller = new RegistrarseController();
						$controller->actionMostrarRegistrarse();
				}
			}
			else{

				//actualiza la barra de navegacion
				include_once "./controllers/Headernavcontroller.php";
					$headernavcontroller = new HeaderNavController;
					$headernavcontroller->actionmostrarheadernav();

				//muestra el alert

				include_once "./views/AlertView.php";
					$alerta= new AlertView;
					$mensaje="El nombre de usuario que usted eligio ya existe";
					$clase ="alert-danger";
				
					$alerta->render($mensaje, $clase);

				//redireccion a registrarse
				include_once "./controllers/RegistrarseController.php";
					$controller = new RegistrarseController();
					$controller->actionMostrarRegistrarse();
			}
		}
	}
?>