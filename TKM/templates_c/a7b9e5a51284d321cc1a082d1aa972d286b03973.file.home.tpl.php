<?php /* Smarty version Smarty-3.1.19, created on 2014-09-16 19:07:02
         compiled from ".\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30185418b486938e09-95389074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7b9e5a51284d321cc1a082d1aa972d286b03973' => 
    array (
      0 => '.\\templates\\home.tpl',
      1 => 1410904492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30185418b486938e09-95389074',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5418b486ac0209_11116835',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5418b486ac0209_11116835')) {function content_5418b486ac0209_11116835($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>


<section> 
			
			<article>
				<h1 class = "titulo" >		Sobre nosotros			</h1>
					
					<p class = "texto">
						Somos un emprendimiento familiar que ya lleva 6 años en el rubro,
						intentando siempre ofrecer productos de buena calidad a un precio accesible.
					</p>
					
					<figure> <img id = "fotolocal" src ="imagenes/imagenes TKM/local.jpg" 	title = "Frente del local"	alt = "Foto del local"		>
					</figure>
					
					<p class = "texto">
						En nuestros catalogos encontrara ropa para bebes recien nacidos, ni&ntildeos pequeños, 
						en edad de jardin e inclusive, uniformes para los primeros años de algunos colegios, en variedades
						diversas de talles y modelos. Ademas de ropa, ofrecemos otros accesorios como perfumes y colonias, bolsos para madres con bebes, cintos y otras cosas m&aacutes.
					</p>
			</article>
			
		</section> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
