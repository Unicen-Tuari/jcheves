<?php
	include"./views/class_view.php";

	class AgregarProductoView extends View{

		public function render() {

			$smarty = new Smarty;
			$smarty->display('agregarProducto.tpl');
		}
	}

?>