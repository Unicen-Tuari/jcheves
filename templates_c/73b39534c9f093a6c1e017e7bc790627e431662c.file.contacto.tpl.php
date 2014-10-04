<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 00:20:51
         compiled from ".\templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13591542c7e43a40835-78032375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73b39534c9f093a6c1e017e7bc790627e431662c' => 
    array (
      0 => '.\\templates\\contacto.tpl',
      1 => 1411600492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13591542c7e43a40835-78032375',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542c7e43a7d8c8_90471636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542c7e43a7d8c8_90471636')) {function content_542c7e43a7d8c8_90471636($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>
		
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
