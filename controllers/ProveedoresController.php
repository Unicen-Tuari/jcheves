<?php
	class ProveedoresController {
		public function actionProveedores(){
			include "./views/ProveedoresView.php";
			$view = new ProveedoresView;
			$view->render();
		}

	}


?>