 <?php

include_once "class_db.php";

	class usuario extends database {

		public function load () {
		}

		public function buscar_usuario($username){
		return $this->query("SELECT u.idusuario
								FROM usuarios u
								WHERE u.nombre = '$username';");
		}

		public function buscar_usuario_clave($username, $password){
		return $this->query("SELECT u.idusuario, u.admin
								FROM usuarios u
								WHERE u.nombre = '$username'
									AND u.password = '$password';");
		}

		//Funcionan las verificaciones previas pero no inserta. Estara mal el insert (?)

		public function insertar_usuario($username, $password, $email){

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