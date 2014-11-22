<?php
	class IndexView{

		public function render() {
			$smarty = new Smarty;
			$smarty->display('home.tpl');
		}
	}
?>