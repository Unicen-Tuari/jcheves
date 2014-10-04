<?php /* Smarty version Smarty-3.1.19, created on 2014-09-24 20:15:11
         compiled from ".\templates\catalogo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167625422c47f58dcc7-72330919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b107243cce6853ea73cb43b670abcd5957da636' => 
    array (
      0 => '.\\templates\\catalogo.tpl',
      1 => 1411600491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167625422c47f58dcc7-72330919',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5422c47f724ca4_68357260',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5422c47f724ca4_68357260')) {function content_5422c47f724ca4_68357260($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>

	

		<section> 
			<h1 class = "text-center">	Catalogo		</h1>

			<form action = "catalogo.php" id ="form_buscar" >		
				<label for="tipo"><span class="textform">Tipo </span> </label>
					<select form="form_buscar" name="tipo">
						<option value="0" > Todos  </option>
						<!-- Aca levantamos los datos del fetch de la base para los TIPOS-->
						<<?php ?>?php
							while($r = $q->fetch()) { ?<?php ?>>

							   <option value="<<?php ?>?php echo $r["id_tipo"];?<?php ?>>" > <<?php ?>?php echo $r["nombre"];?<?php ?>> </option>   
   
 						<<?php ?>?php } ?<?php ?>> <!-- Cierra el while del PHP  -->
					</select>
			
		<br>

				<label for="marca"><span class="textform">Marca</span> </label>
					<select form="form_buscar" name="marca">
						<option value="0" > Todos  </option>
						<!-- Aca levantamos los datos del fetch de la base para los MARCAS-->
						<<?php ?>?php
							while($r = $q->fetch()) { ?<?php ?>>

				   			<option value="<<?php ?>?php echo $r["id_marca"];?<?php ?>>" > <<?php ?>?php echo $r["nombre"];?<?php ?>> </option>   
				   
						<<?php ?>?php }	?<?php ?>>

					</select>

					<input type = "submit" class="btn btn-default" value="Buscar"/>

			</form>
		<br>
		</section>

		<div id= "cuerpo">

		</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
