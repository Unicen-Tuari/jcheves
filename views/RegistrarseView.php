<?php
	class RegistrarseView{

		public function render() {
			$smarty = new Smarty;
			$smarty->display('registrarse.tpl');
		}
	}
?>