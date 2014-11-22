<?php /* Smarty version Smarty-3.1.19, created on 2014-11-20 18:26:29
         compiled from ".\templates\agregarProducto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29836546e1ab6d59f88-45769425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '156813d22b3da099e8c54fb68a1edf83adcde979' => 
    array (
      0 => '.\\templates\\agregarProducto.tpl',
      1 => 1416502131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29836546e1ab6d59f88-45769425',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546e1ab77a1200_01725361',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546e1ab77a1200_01725361')) {function content_546e1ab77a1200_01725361($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>
		
  
  <h1 class = "text-center">   Agregar Productos  </h1>

  <form class = "text-center" role="form" 
        action="index.php?action=dataLogin" method="POST">

    <div class="form-group">
      <label for="descripcion"> <span class="textform"> Descripcion del Producto</span></label>
      <input name ="descripcion" 
             type="text" 
             class="form-control"
             id="descripcion"
             placeholder="Introduce la descripcion del producto">
    </div>

    <div class="form-group">
      <label for="talle"> <span class="textform"> Talle</span></label>
      <input name ="talle" 
             type="text"
             class="form-control"
             id="talle"
             placeholder="Introduce el talle del producto">
    </div>

    <div class="form-group">
      <label for="precio"> <span class="textform"> Precio</span></label>
      <input name ="precio" 
             type="text"
             class="form-control"
             id="precio"
             placeholder="Introduce el precio del producto">
    </div>

    <button type="submit" class="btn btn-default">Subir Producto &nbsp <span class="glyphicon glyphicon-send"></span></button>
  </form>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
