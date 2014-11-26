<?php
	class CarritoController {
		public function actionMostrarCarrito(){
			if	(isset($_SESSION['nombre']) ){
			
				if (isset($_SESSION['carrito']) ){
					
					include_once "./views/CarritoView.php";
					include_once"./models/modelo_carrito.php";
					$carritoQuery= new modeloCarrito;
					$carritoMostrar = array();

					foreach ($_SESSION['carrito'] as $idProducto=> $cantidad){ //cantidad contiene true

						$auxProducto=$carritoQuery->buscarProductoId($idProducto);
						$auxProducto[0]['cantidad']= $cantidad;
						$carritoMostrar[]=$auxProducto[0];
					}
					$view = new CarritoView;
					$view->render($carritoMostrar);
				}	
				else{
					
					// carrito vacio por ahora
				}
			}
		}

		public function agregarProductoCarrito(){

			if	(!isset($_SESSION['nombre']) ){
					// No logueado, mandar a login
			}
			else{
					if (isset($_REQUEST['idProducto'])){
						if (!isset($_SESSION['carrito']) ){
							$_SESSION['carrito'] = array();
						}
							if (!isset($_SESSION['carrito'][$_REQUEST['idProducto']]) ){
								$_SESSION['carrito'][$_REQUEST['idProducto']] = 1; // creamos una posicion en el carrito con el ID de producto
							}
							else{
								$_SESSION['carrito'][$_REQUEST['idProducto']] = $_SESSION['carrito'][$_REQUEST['idProducto']]+1;
							}
						
						include_once "./views/AlertView.php";
						$alerta= new AlertView;
						$mensaje="Item comprado exitosamente";
						$clase ="alert-success";

						$alerta->render($mensaje, $clase);
					}
			}
		}

		public function agregarCarritoBD($idusuario){
			include_once"./models/modelo_carrito.php";
			$modelo_carrito = new modeloCarrito;
				
			if ((isset ($_SESSION['carrito']) )&& (count($_SESSION['carrito'])>0) ){
				$idcarrito=$modelo_carrito->insertar_carrito($idusuario);

				$carritoA= new modeloCarrito;
				foreach ($_SESSION['carrito'] as $idProducto=> $cantidad){ //cantidad contiene true

					$auxProducto=$carritoA->buscarProductoId($idProducto);
					
					$precio=$auxProducto[0]['precio'];
					$modelo_carrito->insertar_productocarrito($idProducto, $idcarrito,$cantidad,$precio);
				}

				$datosMail=$modelo_carrito->load_datos_compra($idcarrito);
				$to="mirazabal.94@gmail.com";

				$this->enviarMailCompra($to, $datosMail);
				
				//unset($_SESSION['carrito']);
				include_once "./controllers/Headernavcontroller.php";
				$headernavcontroller = new HeaderNavController;
				$headernavcontroller->actionmostrarheadernav();

				include_once "./views/AlertView.php";
				$alerta= new AlertView;
				$mensaje="Compra confirmada exitosamente";
				$clase ="alert-success";
				$alerta->render($mensaje, $clase);

				include_once "./controllers/IndexController.php";
				$controller = new IndexController();
				$controller->actionIndex();
			}
		}

		public function enviarMailCompra($to, $contenido){

			include './views/ContactoView.php';
			$msg = null;
			echo"estamos afuera";
			//if (isset($_POST["phpmailer"])){
				echo"Entramos a php mailer";
				$dest = $to;
				$email = $to;

				//meter en foreach para obtener todos
				$tipo_preda = $contenido[0]['nombre_tipo'];
				$marca_preda = $contenido[0]['nombre_marca'];
				$cantidad = $contenido[0]['cantidad'];
				$precio = $contenido[0]['precio'];

				$mensaje = $tipo_preda." ".$marca_preda." ".$cantidad." ".$precio;
				$asunto = 'No contestar. Notificacion de la pagina';
				
				include_once "PHPMailer/PHPMailerAutoload.php";
			
				$mail = new PHPMailer;
				  
				//indico a la clase que use SMTP
				$mail->IsSMTP();
				  
				//permite modo debug para ver mensajes de las cosas que van ocurriendo
				//$mail->SMTPDebug = 2;

				//Debo de hacer autenticación SMTP
				$mail->SMTPAuth = true;
				$mail->SMTPSecure = "ssl";

				//indico el servidor de Gmail para SMTP
				$mail->Host = "smtp.gmail.com";

				//indico el puerto que usa Gmail
				$mail->Port = 465;

				//indico un usuario / clave de un usuario de gmail
				//Gracias mati por la cuenta ! :D

				$mail->Username = "mirazabal.94@gmail.com";
				$mail->Password = "matu37985534";
			   
				$mail->From = $email;
				
				$mail->Subject = $asunto.' por '.$dest;
			   
				$mail->addAddress($email);
				
				$mail->MsgHTML($mensaje);
					 
				if($mail->Send()){
					
					include_once "./views/AlertView.php";
					$alerta= new AlertView;
					$mensaje_alert="Mail enviado correctamente";
					$clase ="alert-success";

					$alerta->render($mensaje_alert, $clase);

				}
				else{
					include_once "./views/AlertView.php";
					$alerta= new AlertView;
					$mensaje_alert="El mail no se ha podido enviar correctamente";
					$clase ="alert-danger";
					
					$alerta->render($mensaje_alert, $clase);
				}
			//}
		}
	}
?>