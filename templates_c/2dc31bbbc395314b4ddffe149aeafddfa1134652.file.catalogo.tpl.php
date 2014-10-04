<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 00:01:31
         compiled from ".\templates\catalogo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21835542c79bbaf79e6-24254073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dc31bbbc395314b4ddffe149aeafddfa1134652' => 
    array (
      0 => '.\\templates\\catalogo.tpl',
      1 => 1411600491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21835542c79bbaf79e6-24254073',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542c79bbc28cb3_99145540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542c79bbc28cb3_99145540')) {function content_542c79bbc28cb3_99145540($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>

	

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
