

<?php
	$controller;
	if (!array_key_exists(	'action', $_REQUEST)	
		||	$_REQUEST['action'] == 'index'	) {

		include "./controllers/IndexController.php";
		$controller = new IndexController();
		$controller->actionIndex();
	}

	else {

		if ($_REQUEST['action'] == 'catalogo'){
			include_once "./controllers/CatalogoController.php";
			$controller = new CatalogoController();
			$controller->actionCatalogo();
		}

		if($_REQUEST['action'] == 'proveedores'	) {

			include_once "./controllers/ProveedoresController.php";
			$controller = new ProveedoresController();
			$controller->actionProveedores();
		}

		if ($_REQUEST['action'] == 'contacto'){
			include_once "./controllers/ContactoController.php";
			$controller = new ContactoController();
			$controller->actionContacto();
		}

		if ($_REQUEST['action'] == 'login'){
			include_once "./controllers/LoginController.php";
			$controller = new LoginController();
			$controller->actionLogin();
		}

		if ($_REQUEST['action'] == 'registrarse'){
			include "./controllers/RegistrarseController.php";
			$controller = new RegistrarseController();
			$controller->actionRegistrarse();
		}
	}
?>