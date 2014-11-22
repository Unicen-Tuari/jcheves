<?php /* Smarty version Smarty-3.1.19, created on 2014-11-21 23:49:02
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3197354347aaf2625a5-53052430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bea876b36366d0f541258ecff3d0b308b878c71a' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1416609566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3197354347aaf2625a5-53052430',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54347aaf2dc6c1_84285642',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54347aaf2dc6c1_84285642')) {function content_54347aaf2dc6c1_84285642($_smarty_tpl) {?>	
  
  <h1 class = "text-center">   Bienvenido   </h1>

  <form class = "text-center" 
        role="form" 
        action="index.php?action=dataLogin"
        method="POST">

    <div class="form-group">
      <label for="username"> <span class="textform"> Nombre de Usuario</span></label>
      <input name ="username" type="text" class="form-control" id="username"
             placeholder="Introduce tu nombre de usuario">
    </div>

    <div class="form-group">
      <label for="pass"> <span class="textform"> Contraseña</span></label>
      <input name="password" 
             type="password"
             class="form-control"
             id="pass" 
             placeholder="Introduce tu contraseña">
    </div>

    <button type="submit" class="btn btn-default">Log in &nbsp <span class="glyphicon glyphicon-send"></span></button>
  </form>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
