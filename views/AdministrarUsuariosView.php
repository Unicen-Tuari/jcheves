<?php

	class AdministrarUsuariosView{

		public function render($arrUsuarios) {
			$smarty = new Smarty;
			$smarty->assign('arrUsuarios', $arrUsuarios);
			$smarty->display('administrarUsuarios.tpl');
		}
	}

?>