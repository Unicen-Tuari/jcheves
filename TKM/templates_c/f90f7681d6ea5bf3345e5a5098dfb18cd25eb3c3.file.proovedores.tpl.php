<?php /* Smarty version Smarty-3.1.19, created on 2014-09-16 19:25:28
         compiled from ".\templates\proovedores.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98345418b8d80cc624-01186040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f90f7681d6ea5bf3345e5a5098dfb18cd25eb3c3' => 
    array (
      0 => '.\\templates\\proovedores.tpl',
      1 => 1410906228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98345418b8d80cc624-01186040',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5418b8d8136a75_82946038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5418b8d8136a75_82946038')) {function content_5418b8d8136a75_82946038($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>

		<section> 
			
			<article>

				<h1 class = "titulo">	Sobre nuestros productos		</h1>
					<p class = "texto">
					
						En nuestros catalogos encontrara facilmente los productos, junto con una imagen de los 	mismos, el precio y los talles disponibles
						Ademas, podra realizar pedidos via web y recibir e-mails con cada actualizacion del mismo, asi como las ofertas de cada semana.
					
					</p >
				
					<p class = "texto" > Nuestros proveedores son empresas con larga trayectoria y de indiscutible calidad.</p>
			<div>
				<a href = "http://www.oshkosh.com/" 		target = '_blank' > <img id = "links_proveedores" src ="imagenes/Logos/Logo Osh Kosh.gif"	title = "Link a Osh Kosh"	alt = "Logo  Osh Kosh"		>	</a>
				<a href = "http://www.gulmez.com.ar/" 		target = '_blank' > <img id = "links_proveedores" src ="imagenes/Logos/Logo Gulmez.png"		width = "20%"	height = "230"		border = "5"	title = "Link a Gulmez"		alt = "Logo  Gulmez"		>	</a>
				<a href = "http://www.route66.com.py/"		target = '_blank' > <img id = "links_proveedores" src ="imagenes/Logos/Logo Route 66.png"	width = "20%"	height = "230"		border = "5"	title = "Link a Route 66"	alt = "Logo  Route 66"		>	</a>
				<a href = "http://www.golfus-76.com.ar/"	target = '_blank' > <img id = "links_proveedores" src ="imagenes/Logos/Logo Golfus.png"		width = "20%"	height = "230"		border = "5"	title = "Link a Golfus 76" 	alt = "Logo  Golfus 76"		>	</a>
			</div>

						</article>
			
		</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
