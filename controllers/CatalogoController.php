<?php
	class CatalogoController {
		public function actionCatalogo(){
			include "./views/CatalogoView.php";
			$view = new CatalogoView;
			$view->render();
		}
	}
?>