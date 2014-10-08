<?php
	require('./smarty/libs/Smarty.class.php');
	class CatalogoView{

		public function render() {
			$smarty = new Smarty;
			$smarty->display('catalogo.tpl');
		}

		function combo_tipos($tipos){
			$this->smarty->assign("tipos", $tipos);

			
			//$this->smarty->display('personas.tpl');
		
		}

		function combo_marcas($marcas){
			$this->smarty->assign("marcas", $marcas);
			//$this->smarty->display('personas.tpl');
		}

	}
?>