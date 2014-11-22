<?php
	class ContactoView{

		public function render() {
			$smarty = new Smarty;
			$smarty->display('contacto.tpl');
		}
	}
?>