<?php /* Smarty version Smarty-3.1.19, created on 2014-09-16 19:20:04
         compiled from ".\templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:258185418b712c3e4b5-43203162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a12e146a98ad79fc6cca334ce9597d4717b95ae4' => 
    array (
      0 => '.\\templates\\contacto.tpl',
      1 => 1410906001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258185418b712c3e4b5-43203162',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5418b712cbda30_28407059',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5418b712cbda30_28407059')) {function content_5418b712cbda30_28407059($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>
		
	<section class = "contacto">
      <form id="miForm" action="" method="get" onsubmit="validar(this)">
        <h1 class = "titulo">Contacto</h1>
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" >
        <br>
        <label for="telefono">Teléfono: </label>
        <input type="number" name="telefono" id="telefono" >
        <br>
        <label for="correo">e-mail: </label>
        <input type="email" name="correo" id="correo" >
        <br>
        <label for="mensaje">Mensaje: </label>
        <textarea id="mensaje" name="mensaje" placeholder="Escriba su mensaje"></textarea>
        <br>
        <input type="submit" value="enviar" onsubmit="return validar(this);">
      </form>
    </section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
