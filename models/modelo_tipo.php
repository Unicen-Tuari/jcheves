 <?php

include_once "class_db.php";

	class tipo extends database {

		public function load(){
		return $this->query("SELECT nombre FROM tipo
								ORDER BY nombre asc;");
		}
		public function load_marca(){
		return $this->query("SELECT nombre FROM marca
								ORDER BY nombre asc;");
		}
	}
	}
?>