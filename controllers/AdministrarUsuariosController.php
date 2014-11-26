<?php
class AdministrarUsuarios {
		public function actionMostrarAdministrarUsuarios(){

			if	(isset($_SESSION['nombre']) ){
				if	(($_SESSION['admin'])==1 ){
								
					include_once"./models/modelo_usuario.php";
					include_once"./views/AdministrarUsuariosView.php";
					
					$modeloUsuario = new usuario;
					$arrUsuarios =$modeloUsuario->todos_usuarios();
					$vistaUsuario = new AdministrarUsuariosView;
					$vistaUsuario->render($arrUsuarios);
				}	
			}
		}

		public function BloquearUsuario($id){
			include_once"./models/modelo_usuario.php";

			if	(isset($_SESSION['nombre']) ){
				if	(($_SESSION['admin'])==1 ){
					$modeloUsuario = new usuario;
					$modeloUsuario->bloquear_usuario($id);
				}	
			}	
			include_once "./views/AlertView.php";
			$alerta= new AlertView;
			$mensaje="Usuario bloqueado exitosamente";
			$clase ="alert-success";

			$alerta->render($mensaje, $clase);

			$this->actionMostrarAdministrarUsuarios();
		}

		public function DesbloquearUsuario($id){
			include_once"./models/modelo_usuario.php";

			if	(isset($_SESSION['nombre']) ){
				if	(($_SESSION['admin'])==1 ){

					$modeloUsuario = new usuario;
					$modeloUsuario->desbloquear_usuario($id);
				}	
			}
			include_once "./views/AlertView.php";
			$alerta= new AlertView;
			$mensaje="Usuario desbloqueado exitosamente";
			$clase ="alert-success";

			$alerta->render($mensaje, $clase);

			$this->actionMostrarAdministrarUsuarios();
		}

		public function PromoverUsuario($id){
			include_once"./models/modelo_usuario.php";

			if	(isset($_SESSION['nombre']) ){
				if	(($_SESSION['admin'])==1 ){
					$modeloUsuario = new usuario;
					$modeloUsuario->promover_usuario($id);
				}	
			}
			include_once "./views/AlertView.php";
			$alerta= new AlertView;
			$mensaje="Usuario promovido a admin exitosamente";
			$clase ="alert-success";

			$alerta->render($mensaje, $clase);

			$this->actionMostrarAdministrarUsuarios();
		}

		public function VerComprasUsuario($id){
			include_once"./models/modelo_usuario.php";

			
			if	(isset($_SESSION['nombre']) ){
				if	(($_SESSION['admin'])==1 ){
					$modeloUsuario = new usuario;
					$arrTodasCompras=$modeloUsuario->todas_compras_cliente($id);
					
					include_once"./views/VerComprasUsuarioView.php";
					$vistacompras = new VerComprasUsuario;
					$vistacompras->render($arrTodasCompras);
				}

			}
		}
	}		
?>