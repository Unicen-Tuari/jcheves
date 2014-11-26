<?php
	session_start();
	include_once('./smarty/libs/Smarty.class.php');
	
//********** INDEX ******************//
 if(!array_key_exists(	'action', $_REQUEST)	
			||	$_REQUEST['action'] == 'index'	) {
 		include_once "./controllers/Headernavcontroller.php";
		$headernavcontroller = new HeaderNavController;
		$headernavcontroller->actionmostrarheadernav();
		include_once "./controllers/IndexController.php";
		$controller = new IndexController();
		$controller->actionIndex();

	}
//********** CATALOGO ******************//

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

//********** MOSTRAR PAGINAS ESTATICAS ******************//
		else
		if($_REQUEST['action'] == 'proveedores'	) {
			include_once "./controllers/Headernavcontroller.php";
		$headernavcontroller = new HeaderNavController;
		$headernavcontroller->actionmostrarheadernav();
			include_once "./controllers/ProveedoresController.php";
			$controller = new ProveedoresController();
			$controller->actionProveedores();
		}

//********** INICIAR / CERRAR SESION ******************//
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
//********** CARRITO ******************//
		else

		if ($_REQUEST['action'] == 'mostrarCarrito'){
			//Preguntar si esta seteado el carrito
			include_once "./controllers/Headernavcontroller.php";
		$headernavcontroller = new HeaderNavController;
		$headernavcontroller->actionmostrarheadernav();
			include_once "./controllers/CarritoController.php";
			$controller = new CarritoController;
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
		if ($_REQUEST['action'] == 'ConfirmarCarrito'){
			
			include_once "./controllers/CarritoController.php";
			$controller = new CarritoController();
			$controller->agregarCarritoBD($_SESSION['idusuario']);
		}

		//********** MAIL ******************//
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
		if ($_REQUEST['action'] == 'enviarMailContacto'){
			include_once "./controllers/Headernavcontroller.php";
		$headernavcontroller = new HeaderNavController;
		$headernavcontroller->actionmostrarheadernav();
			include_once "./controllers/ContactoController.php";
			$controller = new ContactoController();
			$controller->enviarMail($_REQUEST['email'],$_REQUEST['mensaje']);
		}

		//********** ADMINISTRAR USUARIOS ******************//
		else
		if ($_REQUEST['action'] == 'mostrarAdministrarUsuarios'){
			include_once "./controllers/Headernavcontroller.php";
			$headernavcontroller = new HeaderNavController;
			$headernavcontroller->actionmostrarheadernav();

			include_once "./controllers/AdministrarUsuariosController.php";
			$controller = new AdministrarUsuarios;
			$controller->actionMostrarAdministrarUsuarios();
		}

		else
		if ($_REQUEST['action'] == 'bloquearUsuario'){
			include_once "./controllers/Headernavcontroller.php";
			$headernavcontroller = new HeaderNavController;
			$headernavcontroller->actionmostrarheadernav();

			include_once "./controllers/AdministrarUsuariosController.php";
			$controller = new AdministrarUsuarios;
			settype($_REQUEST['idusuario'], "integer");
			$controller->BloquearUsuario($_REQUEST['idusuario']);
		}

		else
		if ($_REQUEST['action'] == 'desbloquearUsuario'){

			include_once "./controllers/Headernavcontroller.php";
			$headernavcontroller = new HeaderNavController;
			$headernavcontroller->actionmostrarheadernav();

			include_once "./controllers/AdministrarUsuariosController.php";
			$controller = new AdministrarUsuarios;
			settype($_REQUEST['idusuario'], "integer");
			$controller->DesbloquearUsuario($_REQUEST['idusuario']);
		}

		else
		if ($_REQUEST['action'] == 'promoverUsuario'){

			include_once "./controllers/Headernavcontroller.php";
			$headernavcontroller = new HeaderNavController;
			$headernavcontroller->actionmostrarheadernav();

			include_once "./controllers/AdministrarUsuariosController.php";
			$controller = new AdministrarUsuarios;
			settype($_REQUEST['idusuario'], "integer");
			$controller->PromoverUsuario($_REQUEST['idusuario']);
		}

		else
		if ($_REQUEST['action'] == 'verComprasUsuario'){

			include_once "./controllers/Headernavcontroller.php";
			$headernavcontroller = new HeaderNavController;
			$headernavcontroller->actionmostrarheadernav();

			include_once "./controllers/AdministrarUsuariosController.php";
			$controller = new AdministrarUsuarios;
			settype($_REQUEST['idusuario'], "integer");
			$controller->VerComprasUsuario($_REQUEST['idusuario']);
		}


//********** ADMINISTRAR PRODUCTOS ******************//
		else
		if ($_REQUEST['action'] == 'mostrarAdministrarProductos'){
			include_once "./controllers/Headernavcontroller.php";
			$headernavcontroller = new HeaderNavController;
			$headernavcontroller->actionmostrarheadernav();

			include_once "./controllers/AdministrarProductosController.php";
			$controller = new AdministrarProductos;
			$controller->actionMostrarAdministrarProductos();
		}

		else
		if ($_REQUEST['action'] == 'borrarProducto'){
			include_once "./controllers/Headernavcontroller.php";
			$headernavcontroller = new HeaderNavController;
			$headernavcontroller->actionmostrarheadernav();

			include_once "./controllers/AdministrarProductosController.php";
			$controller = new AdministrarProductos;
			settype($_REQUEST['idropa'], "integer");
			$controller->borrarProducto($_REQUEST['idropa']);
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

//********** ADMINISTRAR TIPOS ******************//
		else
		if ($_REQUEST['action'] == 'mostrarAdministrarTipos'){
			include_once "./controllers/Headernavcontroller.php";
			$headernavcontroller = new HeaderNavController;
			$headernavcontroller->actionmostrarheadernav();

			include_once "./controllers/AdministrarTiposController.php";
			$controller = new AdministrarTipos;
			$controller->actionMostrarAdministrarTipos();
		}

		else
		if ($_REQUEST['action'] == 'borrarTipo'){
			include_once "./controllers/Headernavcontroller.php";
			$headernavcontroller = new HeaderNavController;
			$headernavcontroller->actionmostrarheadernav();

			include_once "./controllers/AdministrarTiposController.php";
			settype($_REQUEST['idtipo'], "integer");
			$controller = new AdministrarTipos;
			$controller->borrarTipo($_REQUEST['idtipo']);
		}

//********** ADMINISTRAR MARCAS ******************//
		else
		if ($_REQUEST['action'] == 'mostrarAdministrarMarcas'){
			include_once "./controllers/Headernavcontroller.php";
			$headernavcontroller = new HeaderNavController;
			$headernavcontroller->actionmostrarheadernav();

			include_once "./controllers/AdministrarMarcasController.php";
			$controller = new AdministrarMarcas;
			$controller->actionMostrarAdministrarMarcas();
		}

		else
		if ($_REQUEST['action'] == 'borrarMarca'){
			include_once "./controllers/Headernavcontroller.php";
			$headernavcontroller = new HeaderNavController;
			$headernavcontroller->actionmostrarheadernav();

			include_once "./controllers/AdministrarMarcasController.php";
			settype($_REQUEST['idmarca'], "integer");
			$controller = new AdministrarMarcas;
			$controller->borrarMarca($_REQUEST['idmarca']);
		}


//********** REGISTRARSE ******************//
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