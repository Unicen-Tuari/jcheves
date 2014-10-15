<?php
	include"./models/modelo_tipo.php";
	include"./models/modelo_marca.php";

	class CatalogoController {
		public function actionCatalogo(){
			var_dump("entro");
			include "./views/CatalogoView.php";
			$combo_tipo = new tipo;
			$combo_marca = new marca;
			$view = new CatalogoView;
			$arr_tipos=[];
			$arr_marcas=[];
			$arr_busqueda=[];

			// La clase combo tipo ejecuta el query, y es asignado al arr
			$arr_tipos  =  $combo_tipo->load();
			//Se asigna el arreglo con los datos a la vista, y en la vista se hace foreach para renderizarlos
			$view->render_tipos($arr_tipos);
			//var_dump($arr_tipos);
			$arr_marcas = $combo_marca->load();
			$view->render_marcas($arr_marcas);
			//var_dump($arr_marcas);
			$view->render();
			
/*		if(	(ISSET($_GET[tipo]))	&&	(ISSET($_GET[marca]))	){
				include_once"./models/modelo_busqueda.php";
				$busqueda = new busqueda;
				$tipo_busq = $_GET[tipo];
				$marca_busq= $_GET[marca];
				$arr_busqueda = $busqueda->load($tipo_busq,$marca_busq);
				$view->render_marcas($arr_busqueda);
				var_dump($arr_busqueda);
				// Ir a clase busqueda y definir la busqueda en la base de datos, y el retorno el query
			}*/
		}
	}
?>