 <?php

include_once "class_db.php";

	class marca extends database {

		public function load(){
		return $this->query("SELECT * FROM marca
								ORDER BY nombre asc;");
		}

		public function borrar_marca($id){
		return $this->query("DELETE FROM `marca`
					WHERE ((`idmarca` = '$id'));");
		}
	}
?>