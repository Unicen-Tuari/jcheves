<?php
	require('./smarty/libs/Smarty.class.php');
	class RegistrarseView{

		public function render() {
			$smarty = new Smarty;
			$smarty->display('registrarse.tpl');
		}
	}
?>