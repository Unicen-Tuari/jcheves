<?php /* Smarty version Smarty-3.1.19, created on 2014-11-22 02:46:13
         compiled from ".\templates\carrito.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26923546e25ce53ec67-26285086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd06b0c33f050dbfdb3706b28e963cbd0c96ff742' => 
    array (
      0 => '.\\templates\\carrito.tpl',
      1 => 1416620770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26923546e25ce53ec67-26285086',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546e25ce66ff38_66320071',
  'variables' => 
  array (
    'arrProductos' => 0,
    'datosProductos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546e25ce66ff38_66320071')) {function content_546e25ce66ff38_66320071($_smarty_tpl) {?>

<section> 
			<h1 class = "text-center">	Mi Carrito		</h1>

		<div id= "cuerpo">
			<form id ="comprar" >		
<?php  $_smarty_tpl->tpl_vars['datosProductos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datosProductos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arrProductos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datosProductos']->key => $_smarty_tpl->tpl_vars['datosProductos']->value) {
$_smarty_tpl->tpl_vars['datosProductos']->_loop = true;
?>
	<div class="panel panel-primary">
		<div class="media">
	  		<div class="media-body">
	  			
				<div class="panel panel-success">
					<h4 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['datosProductos']->value['nombre_tipo'];?>
 <?php echo $_smarty_tpl->tpl_vars['datosProductos']->value['nombre_marca'];?>

					</h4>
					<a class="pull-left" href="#">
						<img class="media-object" src=<?php echo $_smarty_tpl->tpl_vars['datosProductos']->value['imagen'];?>
 alt="Foto del producto">
					</a>
				</div>

	    		<span class="descripcion_producto" ><?php echo $_smarty_tpl->tpl_vars['datosProductos']->value['descripcion'];?>
	</span>
	    		<span class = "precio">$ <?php echo $_smarty_tpl->tpl_vars['datosProductos']->value['precio'];?>
 </span>
	    		<br>
	    		<br>
	    	</div> 
	  	</div>
	</div>
<?php } ?>
	<br>
	<br>
	<input type = "submit" class="btn btn-default" value="Finalizar Compra"/>
	</form>
</section>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
