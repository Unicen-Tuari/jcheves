<?php
	class ProveedoresView{

		public function render() {
			$smarty = new Smarty;
			$smarty->display('proveedores.tpl');
		}
	}
?>