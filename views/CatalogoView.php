<?php
	require('./smarty/libs/Smarty.class.php');
	include"./views/class_view.php";

	class CatalogoView extends View{

		public function render_tipos($tipos) {
			$this->smarty->assign("tipos",$tipos);
		}

		public function render_marcas($marcas) {
			$this->smarty->assign("marcas",$marcas);
		}

		public function render_busqueda($busqueda) {
			$this->smarty->assign("busqueda",$busqueda);
		}

		public function render() {
			$this->smarty->display('catalogo.tpl');
		}
	}
?>