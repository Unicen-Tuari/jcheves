<?php /* Smarty version Smarty-3.1.19, created on 2014-09-24 20:14:58
         compiled from ".\templates\registrarse.tpl" */ ?>
<?php /*%%SmartyHeaderCode:298385422d02da1a0d2-24318666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbbae38a38242c7607f4812a81242910a8f6b2c2' => 
    array (
      0 => '.\\templates\\registrarse.tpl',
      1 => 1411600494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298385422d02da1a0d2-24318666',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5422d02da96ba1_72064601',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5422d02da96ba1_72064601')) {function content_5422d02da96ba1_72064601($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>

<h1 class = "text-center">  Unase a nosotros    </h1>
  <form role="form">

    <div class="form-group">
      <label for="user"> <span class="textform">Nombre de Usuario</label>
      <input type="text" class="form-control" id="user"
             placeholder="Elije tu nombre de usuario">
    </div>

    <div class="form-group">
      <label for="email"> <span class="textform">Email</span> </label>
      <input type="email" class="form-control" id="email"
             placeholder="Introduce tu email">
    </div>
    <div class="form-group">
      <label for="pass"><span class="textform">Contraseña</span></label>
      <input type="password" class="form-control" id="pass" 
             placeholder="Elije tu contraseña">
    </div>

    <div class="form-group">
      <label for="pass_match"><span class="textform">Repita su contraseña</span></label>
      <input type="password" class="form-control" id="pass_match" 
             placeholder="Repita la contraseña">
    </div>

    <div class="checkbox">
      <label>
        <input type="checkbox"> Recibir actualizaciones de catalogo al e-mail
      </label>
    </div>
    <button type="submit" class="btn btn-default">Registrarse &nbsp <span class="glyphicon glyphicon-send"></span> </button>
  </form>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
