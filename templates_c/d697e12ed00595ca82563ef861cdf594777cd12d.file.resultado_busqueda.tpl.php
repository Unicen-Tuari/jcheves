<?php /* Smarty version Smarty-3.1.19, created on 2014-11-22 02:10:25
         compiled from ".\templates\resultado_busqueda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2571954402958c65d44-41771474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd697e12ed00595ca82563ef861cdf594777cd12d' => 
    array (
      0 => '.\\templates\\resultado_busqueda.tpl',
      1 => 1416618208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2571954402958c65d44-41771474',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54402958ca2dd2_67318420',
  'variables' => 
  array (
    'busqueda' => 0,
    'datosbusqueda' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54402958ca2dd2_67318420')) {function content_54402958ca2dd2_67318420($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['datosbusqueda'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datosbusqueda']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['busqueda']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datosbusqueda']->key => $_smarty_tpl->tpl_vars['datosbusqueda']->value) {
$_smarty_tpl->tpl_vars['datosbusqueda']->_loop = true;
?>
	<div class="panel panel-primary">
		<div class="media">
	  		<div class="media-body">
	  			
				<div class="panel panel-success">
					<h4 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['datosbusqueda']->value['nombre_tipo'];?>
 <?php echo $_smarty_tpl->tpl_vars['datosbusqueda']->value['nombre_marca'];?>

					</h4>
					<a class="pull-left" href="#">
						<img class="media-object" src=<?php echo $_smarty_tpl->tpl_vars['datosbusqueda']->value['imagen'];?>
 alt="Foto del producto">
					</a>
				</div>

	    		<span class="descripcion_producto" ><?php echo $_smarty_tpl->tpl_vars['datosbusqueda']->value['descripcion'];?>
	</span>
	    		<span class = "precio">$ <?php echo $_smarty_tpl->tpl_vars['datosbusqueda']->value['precio'];?>
 </span>
	    		<br>
	    		<br>
	    		<button class="btn btn-default boton_compra"  
	    				value="Comprar"
	    				onclick="clickComprar(<?php echo $_smarty_tpl->tpl_vars['datosbusqueda']->value['id'];?>
)"> Comprar
	    		</button>
	    	</div> 
	  	</div>
	</div>
<?php } ?><?php }} ?>
