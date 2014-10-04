<?php /* Smarty version Smarty-3.1.19, created on 2014-09-30 23:17:57
         compiled from ".\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8959542b1e053d0905-83949613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff6e2508a8bad9cba70adcbe6fd7d347aebb00c7' => 
    array (
      0 => '.\\templates\\home.tpl',
      1 => 1411599075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8959542b1e053d0905-83949613',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542b1e0540d992_05407315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542b1e0540d992_05407315')) {function content_542b1e0540d992_05407315($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>


<section> 
			
			<article class="center-block">
				<h1 class = "text-center" >		Sobre nosotros			</h1>
					
					<p class = "text-left">
						Somos un emprendimiento familiar que ya lleva 6 años en el rubro,
						intentando siempre ofrecer productos de buena calidad a un precio accesible.
					</p>
					
					<figure> <img class= "img-responsive" id = "fotolocal" src ="imagenes/imagenes TKM/local.jpg" 	title = "Frente del local"	alt = "Foto del local"		>
					</figure>
					
					<p class = "text-left">
						En nuestros catalogos encontrara ropa para bebes recien nacidos, ni&ntildeos pequeños, 
						en edad de jardin e inclusive, uniformes para los primeros años de algunos colegios, en variedades
						diversas de talles y modelos. Ademas de ropa, ofrecemos otros accesorios como perfumes y colonias, bolsos para madres con bebes, cintos y otras cosas m&aacutes.
					</p>
			</article>
			
		</section> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
