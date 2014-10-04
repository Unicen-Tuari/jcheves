<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 01:05:54
         compiled from ".\templates\header_nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20403542b3b9d895445-23228107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1aad77cd117771d95ae937420bb4b669c51b558' => 
    array (
      0 => '.\\templates\\header_nav.tpl',
      1 => 1412203051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20403542b3b9d895445-23228107',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542b3b9d895442_01898573',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542b3b9d895442_01898573')) {function content_542b3b9d895442_01898573($_smarty_tpl) {?><!DOCTYPE html>
<html lang= "es">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<head> 
		<title>		PW 2	TKM : Ropa para chicos			</title>
		<link	rel = "stylesheet"	href = "./estilo/bootstrap/css/bootstrap.css" > 
		<script type= "text/javascript"	src= "./estilo/bootstrap/js/jquery-2.1.1.min.js">			</script>
		<script type= "text/javascript"	src= "./estilo/bootstrap/js/bootstrap.js">			</script>
		</link>
		<link	rel = "stylesheet"	href = "./estilo/tkm.css" > </link>
	</head>

	<body>

		<nav class="navbar navbar-default" role="navigation">
		  <!-- El logotipo y el icono que despliega el menú se agrupan
		       para mostrarlos mejor en los dispositivos móviles -->
		  <div class="navbar-header">
		    <button type="button" class="navbar-toggle" data-toggle="collapse"
		            data-target=".navbar-ex1-collapse">
		      <span class="sr-only">Desplegar navegación</span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		    </button>
		    <a><img class= "img-responsive" src ="imagenes/imagenes TKM/banner.jpg" style ="height:50px;" ></a>
		  </div>
		 
		  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
		       otro elemento que se pueda ocultar al minimizar la barra -->
		  <div class="collapse navbar-collapse navbar-ex1-collapse">
		    <ul class="nav navbar-nav">
		      
		      <li>	<a href="index.php"><span class="txtnav" >Home &nbsp </span><span class="glyphicon glyphicon-home"></span> 	</a></li>
		      
		      <li>	<a href="index.php?action=catalogo"> <span class="txtnav">Catalogo &nbsp </span> <span class="glyphicon glyphicon-search"></span>	</a></li>
		      
		      <li>	<a href="index.php?action=proveedores"><span class="txtnav">Proveedores &nbsp </span><span class="glyphicon glyphicon-briefcase"></span>	</a></li>
		      
		      <li>	<a href="index.php?action=contacto"><span class="txtnav">Contacto &nbsp</span> <span class="glyphicon glyphicon-envelope"></span> 	</a></li>
		    </ul>
			<ul class="nav navbar-nav navbar-right">

		      <li class="hide"><a href="#"><span class="txtnav">Mis Compras &nbsp </span> <span class="glyphicon glyphicon-shopping-cart"></span> </a></li>

				<li class="dropdown">
				<a  class="dropdown-toggle" data-toggle="dropdown">
				<span class="txtnav">Log in/Registrarse </span> <b class="caret"></b> </a>
					<ul class="dropdown-menu">
						
						<li><a href="index.php?action=login"><span class="txtnav" >Log In &nbsp </span><span class="glyphicon glyphicon-user"></span>  </a></li>
						
						<li><a href="index.php?action=registrarse"><span class="txtnav" >Registrarse &nbsp </span><span class="glyphicon glyphicon-share-alt"></span> </a></li>

					</ul>
				</li>
			</ul>
			</div>
		</nav><?php }} ?>
