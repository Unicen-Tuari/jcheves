<?php

	class CarritoView{

		public function render($arrProductos) {
			$smarty = new Smarty;
			$smarty->assign('arrProductos', $arrProductos);
			$smarty->display('carrito.tpl');
		}
	}

?>