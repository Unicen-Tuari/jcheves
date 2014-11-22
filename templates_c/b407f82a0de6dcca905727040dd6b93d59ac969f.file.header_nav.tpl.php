<?php /* Smarty version Smarty-3.1.19, created on 2014-11-21 22:20:16
         compiled from ".\templates\header_nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18636542b1e0544aa28-90860963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b407f82a0de6dcca905727040dd6b93d59ac969f' => 
    array (
      0 => '.\\templates\\header_nav.tpl',
      1 => 1416604475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18636542b1e0544aa28-90860963',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542b1e0544aa23_72491187',
  'variables' => 
  array (
    'nombreUsuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542b1e0544aa23_72491187')) {function content_542b1e0544aa23_72491187($_smarty_tpl) {?><!DOCTYPE html>
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
				<span class="txtnav"><?php echo $_smarty_tpl->tpl_vars['nombreUsuario']->value;?>
 </span> <b class="caret"></b> </a>

				<?php if ($_smarty_tpl->tpl_vars['nombreUsuario']->value=="Log In / Registrarse") {?>
						<?php echo $_smarty_tpl->getSubTemplate ("menu_no_logueado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->getSubTemplate ("menu_logueado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>

				<?php }?>
				</li>

			</ul>
			</div>
		</nav>
	<div class="jumbotron">
  		<div class="container"><?php }} ?>
