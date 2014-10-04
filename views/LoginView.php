<?php
	require('./smarty/libs/Smarty.class.php');
	class LoginView{

		public function render() {
			$smarty = new Smarty;
			$smarty->display('login.tpl');
		}
	}
?>