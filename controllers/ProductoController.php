<?php
	class ProductoController {
		public function actionAgregarProducto(){
			include "./views/ProductoView.php";
			$view = new ProductoView;
			$view->render();
		}
	}


?>