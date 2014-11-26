<?php

	class AdministrarTiposView{

		public function render($arrTipos) {

			$smarty = new Smarty;
			$smarty->assign('arrTipos', $arrTipos);
			$smarty->display('administrarTipos.tpl');
		}
	}

?>