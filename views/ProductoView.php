<?php

	class ProductoView{

		public function render() {
			$smarty = new Smarty;
			$smarty->display('agregarProducto.tpl');
		}
	}

?>