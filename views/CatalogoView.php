<?php
	require('./smarty/libs/Smarty.class.php');
	class CatalogoView{

		public function render() {
			$smarty = new Smarty;
			$smarty->display('catalogo.tpl');
		}
	}
?>