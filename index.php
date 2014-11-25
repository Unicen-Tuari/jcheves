<?php
	session_start();
	include_once('./smarty/libs/Smarty.class.php');
	

 if(!array_key_exists(	'action', $_REQUEST)	
			||	$_REQUEST['action'] == 'index'	) {
 		include_once "./controllers/Headernavcontroller.php";
		$headernavcontroller = new HeaderNavController;
		$headernavcontroller->actionmostrarheadernav();
		include_once "./controllers/IndexController.php";
		$controller = new IndexController();
		$controller->actionIndex();

	}
	else
		if ($_REQUEST['action'] == 'catalogo'){
			include_once "./controllers/Headernavcontroller.php";
		$headernavcontroller = new HeaderNavController;
		$headernavcontroller->actionmostrarheadernav();
			include_once "./controllers/CatalogoController.php";
			$controller = new CatalogoController();
			$controller->actionCatalogo();
		}

		else
		if ($_REQUEST['action'] == 'buscar'){
			include_once "./controllers/CatalogoController.php";
			$controller = new CatalogoController();
			$controller->actionBuscar();
		}

		else
		if($_REQUEST['action'] == 'proveedores'	) {
			include_once "./controllers/Headernavcontroller.php";
		$headernavcontroller = new HeaderNavController;
		$headernavcontroller->actionmostrarheadernav();
			include_once "./controllers/ProveedoresController.php";
			$controller = new ProveedoresController();
			$controller->actionProveedores();
		}

		else
		if ($_REQUEST['action'] == 'contacto'){
			include_once "./controllers/Headernavcontroller.php";
		$headernavcontroller = new HeaderNavController;
		$headernavcontroller->actionmostrarheadernav();
			include_once "./controllers/ContactoController.php";
			$controller = new ContactoController();
			$controller->actionContacto();
		}

		else
		if ($_REQUEST['action'] == 'mostrarLogin'){
			include_once "./controllers/Headernavcontroller.php";
			$headernavcontroller = new HeaderNavController;
			$headernavcontroller->actionmostrarheadernav();
			include_once "./controllers/LoginController.php";
			$controller = new LoginController();
			$controller->actionmostrarLogin();
		}

		else
		if ($_REQUEST['action'] == 'dataLogin'){
			include_once "./controllers/LoginController.php";
			$controller = new LoginController();
			$controller->actiondataLogin();
	
		}

		else
		if ($_REQUEST['action'] == 'cerrarSession'){
			$_SESSION = [];
			session_destroy();
			include_once "./controllers/Headernavcontroller.php";
			$headernavcontroller = new HeaderNavController;
			$headernavcontroller->actionmostrarheadernav();
			include_once "./controllers/IndexController.php";
			$controller = new IndexController();
			$controller->actionIndex();
		}

		else
		if ($_REQUEST['action'] == 'mostrarCarrito'){
			//Preguntar si esta seteado el carrito
			include_once "./controllers/Headernavcontroller.php";
		$headernavcontroller = new HeaderNavController;
		$headernavcontroller->actionmostrarheadernav();
			include_once "./controllers/CarritoController.php";
			$controller = new CarritoController();
			$controller->actionMostrarCarrito();
		}

		else
		if ($_REQUEST['action'] == 'agregarProductoCarrito'){
			// agregar if not logged in patear a login
				include_once "./controllers/CarritoController.php";
			$controller = new CarritoController();
			$controller->agregarProductoCarrito();
		}

		else
		if ($_REQUEST['action'] == 'mostraragregarProducto'){
			include_once "./controllers/Headernavcontroller.php";
			$headernavcontroller = new HeaderNavController;
			$headernavcontroller->actionmostrarheadernav();

			include_once "./controllers/ProductoController.php";
			$controller = new ProductoController();
			$controller->mostrarAgregarProducto();
		}
		
		else
		if ($_REQUEST['action'] == 'agregarProducto'){
			include_once "./controllers/Headernavcontroller.php";
			$headernavcontroller = new HeaderNavController;
			$headernavcontroller->actionmostrarheadernav();

			include_once "./controllers/ProductoController.php";
			$controller = new ProductoController();
			$controller->AgregarProducto();
		}


		else
		if ($_REQUEST['action'] == 'mostrarRegistrarse'){
			include_once "./controllers/Headernavcontroller.php";
		$headernavcontroller = new HeaderNavController;
		$headernavcontroller->actionmostrarheadernav();
			include_once "./controllers/RegistrarseController.php";
			$controller = new RegistrarseController();
			$controller->actionMostrarRegistrarse();
		}

		else
		if ($_REQUEST['action'] == 'registrarse'){
			include_once "./controllers/RegistrarseController.php";
			$controller = new RegistrarseController();
			$controller->actionRegistrarse();
		}	
?>