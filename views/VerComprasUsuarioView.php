<?php

	class VerComprasUsuario{

		public function render($ComprasUsuario) {
			$smarty = new Smarty;
			$smarty->assign('ComprasUsuario', $ComprasUsuario);
			$smarty->display('VerComprasUsuario.tpl');
		}
	}

?>