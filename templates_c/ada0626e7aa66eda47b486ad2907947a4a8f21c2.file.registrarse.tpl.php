<?php /* Smarty version Smarty-3.1.19, created on 2014-11-20 21:59:49
         compiled from ".\templates\registrarse.tpl" */ ?>
<?php /*%%SmartyHeaderCode:914654347ab1764176-99957407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ada0626e7aa66eda47b486ad2907947a4a8f21c2' => 
    array (
      0 => '.\\templates\\registrarse.tpl',
      1 => 1416517033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '914654347ab1764176-99957407',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54347ab17de298_69637734',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54347ab17de298_69637734')) {function content_54347ab17de298_69637734($_smarty_tpl) {?>
<h1 class = "text-center">  Unase a nosotros    </h1>
  <form role="form"
        action="index.php?action=registrarse"
        method="POST">

       
        
        


    <div class="form-group">
      <label for="username"> <span class="textform">Nombre de Usuario</label>
      <input name="username"
             type="text" 
             class="form-control" 
             id="username"
             placeholder="Elije tu nombre de usuario">
    </div>

    <div class="form-group">
      <label for="email"> <span class="textform">Email</span> </label>
      <input name="email"
             type="email" 
             class="form-control" 
             id="email"
             placeholder="Introduce tu email">
    </div>

    <div class="form-group">
      <label for="password"><span class="textform">Contraseña</span></label>
      <input name="password"
             type="password" 
             class="form-control"
             id="password" 
             placeholder="Elije tu contraseña">
    </div>

    <div class="form-group">
      <label for="verifpassword"><span class="textform">Repita su contraseña</span></label>
      <input name="verifpassword"
             type="password"
             class="form-control"
             id="verifpassword" 
             placeholder="Repita la contraseña">
    </div>

    <button type="submit" class="btn btn-default">Registrarse &nbsp <span class="glyphicon glyphicon-send"></span> </button>
  </form>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
