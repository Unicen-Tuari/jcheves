<?php /* Smarty version Smarty-3.1.19, created on 2014-09-16 20:51:30
         compiled from ".\templates\header_nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166995418b486ac96a5-15516568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6851f524103a71667eb2b036ca110fd6560572e' => 
    array (
      0 => '.\\templates\\header_nav.tpl',
      1 => 1410911479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166995418b486ac96a5-15516568',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5418b486ad0171_04138542',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5418b486ad0171_04138542')) {function content_5418b486ad0171_04138542($_smarty_tpl) {?><!DOCTYPE html>
<html lang= "es">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<head> 
		<title>		PW 2	TKM : Ropa para chicos			</title>
		<link	rel = "stylesheet"	href = "./css/tkm.css" > 	 </link>
	</head>

	<body>
	
		<header>	
			<img id="portada" src ="imagenes/imagenes TKM/banner.jpg"  title = "Bienvenido"	alt = "Portada"		>
		</header>

		<nav>
			<div class="contenedor" id="bp_home">
			<a href="index.php"> <img class="icon" src="imagenes/botonera_principal/home.png"> </a>
				<a href="index.php"> <p class="texto_botonera">Home</p>  </a>
			</div>

			<div class="contenedor" id="bp_catalogo">
				<a href="catalogo.php">	<img class="icon" src="imagenes/botonera_principal/Catalogo.png">	</a>
				<a href="catalogo.php"> <p class="texto_botonera">Catalogo</p>  </a>
			</div>
		
			<div class="contenedor" id="bp_proveedores">
				<a href="proveedores.php">	<img class="icon" src="imagenes/botonera_principal/Proveedores.png"> </a>
				<a href="proveedores.php"> <p class="texto_botonera">Proveedores</p>  </a>
			
			</div>

			<div class="contenedor" id="bp_contacto">
				<a href="contacto.php">	<img class="icon" src="imagenes/botonera_principal/Contacto.png">	</a>
				<a href="contacto.php"> <p class="texto_botonera">Contacto</p>  </a>
			</div>
		</nav><?php }} ?>
