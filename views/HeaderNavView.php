<?php
	class HeaderNavView{

		public function render($nombreUsuario) {
			$smarty = new Smarty;
			$smarty->assign('nombreUsuario', $nombreUsuario);
			$smarty->display('header_nav.tpl');

		}
	}

?>