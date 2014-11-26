<?php
	class ContactoController {
		public function actionContacto(){
			include "./views/ContactoView.php";
			$view = new ContactoView;
			$view->render();
		}

		public function enviarMail($from, $contenido){
			include './views/ContactoView.php';
			$msg = null;
			
			if (isset($_POST["phpmailer"])){
				
				$dest = $_POST["email"];
				$email = 'jesuscheves1991@gmail.com';
				$mensaje = $_POST["mensaje"];
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

				}else{
					include_once "./views/AlertView.php";
					$alerta= new AlertView;
					$mensaje_alert="El mail no se ha podido enviar correctamente";
					$clase ="alert-danger";
					
					$alerta->render($mensaje_alert, $clase);
				}
			}
		}
	}
?>