<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 00:31:16
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5410542c80b444aa20-09074104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0636285cccdb95807727424c7b673e90710de7fc' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1411600494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5410542c80b444aa20-09074104',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542c80b45b8d85_95120084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542c80b45b8d85_95120084')) {function content_542c80b45b8d85_95120084($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>
		
  
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
