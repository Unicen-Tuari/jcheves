<?php /* Smarty version Smarty-3.1.19, created on 2014-10-01 01:24:13
         compiled from ".\templates\registrarse.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26914542b3b9d8583b4-15857375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a303d0dddc7614dd40af2f81cac9a5d34d0760b' => 
    array (
      0 => '.\\templates\\registrarse.tpl',
      1 => 1411600494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26914542b3b9d8583b4-15857375',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542b3b9d895444_97362704',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542b3b9d895444_97362704')) {function content_542b3b9d895444_97362704($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>

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
