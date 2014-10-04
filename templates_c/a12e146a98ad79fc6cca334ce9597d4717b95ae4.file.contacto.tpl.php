<?php /* Smarty version Smarty-3.1.19, created on 2014-09-24 20:15:10
         compiled from ".\templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180185421f3fa9db592-55682034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a12e146a98ad79fc6cca334ce9597d4717b95ae4' => 
    array (
      0 => '.\\templates\\contacto.tpl',
      1 => 1411600492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180185421f3fa9db592-55682034',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5421f3faa6fd93_71757551',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5421f3faa6fd93_71757551')) {function content_5421f3faa6fd93_71757551($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>
		
<section> 
    <h1 class = "text-center">  Contacto    </h1>
    <form role="form">

          <div class="form-group">
              <label for="E-mail"><span class="textform">Email</span></label>
                  <input type="email" class="form-control" id="E-Mail"
                     placeholder="Introduce tu email">
          </div>

          <div class="form-group">
              <label for="Mensaje"><span class="textform">Mensaje</span></label>
              <input type="text" class="form-control" id="Mensaje" 
                     placeholder="Introduzca su mensaje">
          </div>

        <button type="submit" class="btn btn-default">Enviar Mensaje &nbsp <span class="glyphicon glyphicon-send"></span> </button>
  </form>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
