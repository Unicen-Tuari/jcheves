<?php
	class AlertView{
		public function render($mensaje,$alertClass) {

			$smarty = new Smarty;
			$smarty->assign('mensaje', $mensaje);
			$smarty->assign('alertClass', $alertClass);
			$smarty->display('alert.tpl');

		}
	}

?>