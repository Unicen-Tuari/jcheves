<?php

	class AdministrarMarcasView{

		public function render($arrMarcas) {

			$smarty = new Smarty;
			$smarty->assign('arrMarcas', $arrMarcas);
			$smarty->display('administrarMarcas.tpl');
		}
	}

?>