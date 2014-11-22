<?php
	include"./models/modelo_tipo.php";
	include"./models/modelo_marca.php";

	class CatalogoController {
		public function actionCatalogo(){
			include "./views/CatalogoView.php";
			$combo_tipo = new tipo;
			$combo_marca = new marca;
			$view = new CatalogoView;
			$arr_tipos=[];
			$arr_marcas=[];

			// La clase combo tipo ejecuta el query, y es asignado al arr
			$arr_tipos  =  $combo_tipo->load();
			//Se asigna el arreglo con los datos a la vista, y en la vista se hace foreach para renderizarlos
			$view->render_tipos($arr_tipos);
			$arr_marcas = $combo_marca->load();
			$view->render_marcas($arr_marcas);
			$view->render();
		}

		public function actionBuscar(){

			include "./views/CatalogoView.php";
			include_once"./models/modelo_busqueda.php";

			$busqueda = new busqueda;
			$view = new CatalogoView;
			
			$tipo_busq = $_REQUEST['tipo'];
			$marca_busq= $_REQUEST['marca'];
			// Se consultan los datos en la base y se cargan al arreglo
			$arr_busqueda = $busqueda->load_busqueda($tipo_busq,$marca_busq);
			$view->render_busqueda($arr_busqueda);
			$view->render_resultado();
		}
	}
?>