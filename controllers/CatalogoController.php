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
			$arr_busqueda=[];//Despues no va mas por AJAX

			// La clase combo tipo ejecuta el query, y es asignado al arr
			$arr_tipos  =  $combo_tipo->load();
			//Se asigna el arreglo con los datos a la vista, y en la vista se hace foreach para renderizarlos
			$view->render_tipos($arr_tipos);
			$arr_marcas = $combo_marca->load();
			$view->render_marcas($arr_marcas);
			
			
			if(	(ISSET($_GET['tipo']))	&&	(ISSET($_GET['marca']))	){

					include_once"./models/modelo_busqueda.php";
					$busqueda = new busqueda;
					
					$tipo_busq = $_GET['tipo'];
					$marca_busq= $_GET['marca'];
					// Se consultan los datos en la base y se cargan al arreglo
					$arr_busqueda = $busqueda->load_busqueda($tipo_busq,$marca_busq);
					$view->render_busqueda($arr_busqueda);
					$view->render();
					//var_dump($arr_busqueda);
			}
			else{
				$view->render();
			}
		}
	}
?>