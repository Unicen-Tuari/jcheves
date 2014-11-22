<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 18:35:57
         compiled from ".\templates\menu_logueado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:881954678ade764176-58342739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c89c8ff0e55de0448bb24fd6995f94ff2128a19f' => 
    array (
      0 => '.\\templates\\menu_logueado.tpl',
      1 => 1416072954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '881954678ade764176-58342739',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54678ade764173_54588629',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54678ade764173_54588629')) {function content_54678ade764173_54588629($_smarty_tpl) {?><ul  class="dropdown-menu">
					
	<li><a href="index.php?action=mostrarCarrito"><span class="txtnav" >Mi carrito &nbsp</span><span class="glyphicon glyphicon-shopping_cart"></span>  </a></li>

	<!-- CAMBIAR CONTRASEÑA

	<li><a href="index.php?action=cerrarSession"><span class="txtnav" >Cambiar Contraseña &nbsp </span><span class="glyphicon glyphicon-circle_exclamation_mark"></span> </a></li> 

	-->
	
	<li><a href="index.php?action=cerrarSession"><span class="txtnav" >Cerrar Session &nbsp </span><span class="glyphicon glyphicon-Remove"></span> </a></li>

</ul><?php }} ?>
