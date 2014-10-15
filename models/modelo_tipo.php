 <?php

include_once "class_db.php";

	class tipo extends database {

		public function load(){
		return $this->query("SELECT * FROM tipo
								ORDER BY nombre asc;");
		}
	}
?>