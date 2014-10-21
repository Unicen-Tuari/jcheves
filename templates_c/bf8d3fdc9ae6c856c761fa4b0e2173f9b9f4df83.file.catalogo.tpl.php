<?php /* Smarty version Smarty-3.1.19, created on 2014-10-21 16:57:46
         compiled from ".\templates\catalogo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25727543479907de293-21111735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf8d3fdc9ae6c856c761fa4b0e2173f9b9f4df83' => 
    array (
      0 => '.\\templates\\catalogo.tpl',
      1 => 1413903462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25727543479907de293-21111735',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5434799094c5f2_86257888',
  'variables' => 
  array (
    'tipos' => 0,
    'datostipo' => 0,
    'marcas' => 0,
    'datosmarcas' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5434799094c5f2_86257888')) {function content_5434799094c5f2_86257888($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>

	<!-- Hacer funciones JS que dado un tipo retornen las marcas, y dado una marca retornen todos los tipos -->

	<script>		</script>

		<section> 
			<h1 class = "text-center">	Catalogo		</h1>
			
			<br>
			<br>

		<div id= "cuerpo">
			<form id ="form_buscar" action="index.php" >
			<input type="hidden" name="action" value="catalogo"> 
			<!--	SOLUCION CASERA COMO DULCE DE LECHE	 -->		
				<label for="tipo"><span class="textform">Tipo </span> </label>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<select form="form_buscar" name="tipo" onchange ="cambiotipo();" >
						<option value="-1" > Todos  </option>
						<!--	Le llegan los datos asignados desde la view	-->
						<?php  $_smarty_tpl->tpl_vars['datostipo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datostipo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datostipo']->key => $_smarty_tpl->tpl_vars['datostipo']->value) {
$_smarty_tpl->tpl_vars['datostipo']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['datostipo']->value['idtipo'];?>
">
							<?php echo $_smarty_tpl->tpl_vars['datostipo']->value['nombre'];?>
 </option>
						<?php } ?>
					</select>
			
				<br>
				<br>

				<label for="marca"><span class="textform">Marca</span> </label>
				&nbsp&nbsp&nbsp	&nbsp
					<select form="form_buscar" name="marca">
						<option value="-1" > Todos  </option>
						<?php  $_smarty_tpl->tpl_vars['datosmarcas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datosmarcas']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['marcas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datosmarcas']->key => $_smarty_tpl->tpl_vars['datosmarcas']->value) {
$_smarty_tpl->tpl_vars['datosmarcas']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['datosmarcas']->value['idmarca'];?>
">
								<?php echo $_smarty_tpl->tpl_vars['datosmarcas']->value['nombre'];?>
 </option>
						<?php } ?>
					</select>
			<br>
			<br>
			<input type = "submit" class="btn btn-default" value="Buscar"/>
			</form>
			<script src= "./js/ajax.js">	</script>
		</div>
		<br>
		</section>
		<br>
		<br>
		<div id = "resultado_busqueda">
			<?php echo $_smarty_tpl->getSubTemplate ("resultado_busqueda.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
	
		</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
