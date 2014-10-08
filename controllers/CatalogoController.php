<?php
	include"./models/modelo_tipo.php";
	include"./models/modelo_marca.php";

	class CatalogoController {
		public function actionCatalogo(){

			include "./views/CatalogoView.php";
			$combo_tipo = new tipo;
			$combo_marca = new marca;
			$view = new CatalogoView;
			$view->combo_tipos($combo_tipo->load());
			$view->combo_marcas($combo_marca->load()); 
			$view->render();
		}
	}
?>