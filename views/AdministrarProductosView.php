<?php

	class AdministrarProductosView{

		public function render($arrProductos) {

			$smarty = new Smarty;
			$smarty->assign('arrProductos', $arrProductos);
			$smarty->display('administrarProductos.tpl');
		}
	}

?>