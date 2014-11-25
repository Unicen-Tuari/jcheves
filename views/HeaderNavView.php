<?php
	class HeaderNavView{
//el problema esta aca o en el template
		public function render($nombreUsuario,$admin=0) {

			$smarty = new Smarty;
			$smarty->assign('nombreUsuario', $nombreUsuario);
			$smarty->assign('admin', $admin);
			$smarty->display('header_nav.tpl');

		}
	}

?>