 <?php

include_once "class_db.php";

	class marca extends database {

		public function load(){
		return $this->query("SELECT nombre FROM marca
								ORDER BY nombre asc;");
		}
	}
?>