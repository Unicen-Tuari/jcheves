<?php /* Smarty version Smarty-3.1.19, created on 2014-09-30 23:18:31
         compiled from ".\templates\proveedores.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18225542b1e2766ff31-86500228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '005f81f6b7eac71c185ad90b1c729fa8bdee2fff' => 
    array (
      0 => '.\\templates\\proveedores.tpl',
      1 => 1411601263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18225542b1e2766ff31-86500228',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542b1e276ea051_70619611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542b1e276ea051_70619611')) {function content_542b1e276ea051_70619611($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>

		<section> 
			
			<article class="center-block">

				<h1 class = "text-center">	Sobre nuestros productos		</h1>
				<br>	
					<p class = "text-left">
					
						En nuestros catalogos encontrara facilmente los productos, junto con una imagen de los 	mismos, el precio y los talles disponibles.
						Ademas, podra realizar pedidos via web y recibir e-mails con cada actualizacion del mismo, asi como las ofertas de cada semana.
						
						Nuestros proveedores son empresas con larga trayectoria y de indiscutible calidad.</p> 
			</article>
			<br>

			<div>
				<a class="pull-left" href = "http://www.oshkosh.com/" 		target = '_blank' > <img class= "img-responsive" class="pull-left" id = "links_proveedores" src ="imagenes/Logos/Logo Osh Kosh.gif"	title = "Link a Osh Kosh"	alt = "Logo  Osh Kosh"		>	</a>

				<a class="pull-left" href = "http://www.gulmez.com.ar/" 		target = '_blank' > <img class= "img-responsive" class="pull-left" id = "links_proveedores" src ="imagenes/Logos/Logo Gulmez.png"		width = "20%"	height = "230"		border = "5"	title = "Link a Gulmez"		alt = "Logo  Gulmez"		>	</a>
				
				<a class="pull-left" href = "http://www.route66.com.py/"		target = '_blank' > <img class= "img-responsive" class="pull-left" id = "links_proveedores" src ="imagenes/Logos/Logo Route 66.png"	width = "20%"	height = "230"		border = "5"	title = "Link a Route 66"	alt = "Logo  Route 66"		>	</a>

				<a class="pull-left" href = "http://www.golfus-76.com.ar/"	target = '_blank' > <img class= "img-responsive" class="pull-left" id = "links_proveedores" src ="imagenes/Logos/Logo Golfus.png"		width = "20%"	height = "230"		border = "5"	title = "Link a Golfus 76" 	alt = "Logo  Golfus 76"		>	</a>
			</div>
			
		</section>
	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
