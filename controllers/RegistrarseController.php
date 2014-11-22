<?php
	class RegistrarseController {
		public function actionMostrarRegistrarse(){
			include "./views/RegistrarseView.php";
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
					echo "<script type=\"text/javascript\">alert(\"Registrado exitosamente\");</script>";
					
					include_once "./controllers/Headernavcontroller.php";
					$headernavcontroller = new HeaderNavController;
					$headernavcontroller->actionmostrarheadernav();
					include_once "./controllers/LoginController.php";
					$controller = new LoginController();
					$controller->actionmostrarLogin();
				}
				else{
					//mensaje de error 
					echo "<script type=\"text/javascript\">alert(\"las contraseñas no coinciden\");</script>";
					//Redireccion a registrarse
					include "./controllers/RegistrarseController.php";
					$controller = new RegistrarseController();
					$controller->actionMostrarRegistrarse();
				}
			}
			else{
				//mensaje de error
				echo "<script type=\"text/javascript\">alert(\"El nombre de usuario ya existe\");</script>";	
				//redireccion a registrarse
				include "./controllers/RegistrarseController.php";
					$controller = new RegistrarseController();
					$controller->actionMostrarRegistrarse();
			}
		}
	}
?>