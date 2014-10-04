<?php /* Smarty version Smarty-3.1.19, created on 2014-09-24 20:15:02
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:317095422cc32180862-88650756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7e918c6753532ac7005c4499698cab6d2f26d06' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1411600494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317095422cc32180862-88650756',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5422cc321e9dd5_50878226',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5422cc321e9dd5_50878226')) {function content_5422cc321e9dd5_50878226($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>
		
  
  <h1 class = "text-center">   Bienvenido   </h1>

  <form class = "text-center" role="form">
    <div class="form-group">
      <label for="username"> <span class="textform"> Nombre de Usuario</span></label>
      <input type="text" class="form-control" id="username"
             placeholder="Introduce tu nombre de usuario">
    </div>
    <div class="form-group">
      <label for="pass"> <span class="textform"> Contraseña</span></label>
      <input type="password" class="form-control" id="pass" 
             placeholder="Introduce tu contraseña">
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox"> Recordar mi nombre de usuario y contraseña
      </label>
    </div>
    <button type="submit" class="btn btn-default">Log in &nbsp <span class="glyphicon glyphicon-send"></span></button>
  </form>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
