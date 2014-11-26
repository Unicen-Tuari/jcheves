 <?php

include_once "class_db.php";

	class usuario extends database {

		public function load () { //implementada por herencia
		}

		public function buscar_usuario($username){ //Dado un username lo busca
		return $this->query("SELECT u.idusuario, u.nombre
								FROM usuarios u
								WHERE u.nombre = '$username';");
		}

		public function todos_usuarios(){ //Dado un username lo busca
		return $this->query("SELECT u.idusuario, u.nombre
								FROM usuarios u;");
		}

		public function bloquear_usuario($id){ // Agrega usuario

			$arr = array(':status' => 1, 
						);

			$stringquery =("UPDATE `usuarios` SET
				`status` = :status
				WHERE `idusuario` = '$id';");

		return $this->query($stringquery , $arr);
		}

		public function desbloquear_usuario($id){ // Agrega usuario

			$arr = array(':status' => 0, 
						);

			$stringquery =("UPDATE `usuarios` SET
				`status` = :status
				WHERE `idusuario` = '$id';");

		return $this->query($stringquery , $arr);
		}

		public function buscar_usuario_clave($username, $password){ //corrobora para el login
		return $this->query("SELECT u.idusuario, u.admin, u.status
								FROM usuarios u
								WHERE u.nombre = '$username'
									AND u.password = '$password';");
		}

		public function insertar_usuario($username, $password, $email){ // Agrega usuario

			$arr = array(':username' => $username, 
						':password' => $password,
						':email' => $email
						);

			$stringquery =("INSERT INTO usuarios (nombre,email,password) VALUES
							(:username , :password , :email);");

		return $this->query($stringquery , $arr);
		}
	}
?>