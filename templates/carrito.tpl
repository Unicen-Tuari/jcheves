

<section> 
			<h1 class = "text-center">	Mi Carrito		</h1>

		<div id= "cuerpo">
			<form id ="comprar" >		
{foreach $arrProductos as $datosProductos}
	<div class="panel panel-primary">
		<div class="media">
	  		<div class="media-body">
	  			
				<div class="panel panel-success">
					<h4 class="media-heading">{$datosProductos.nombre_tipo} {$datosProductos.nombre_marca}
					</h4>
					<a class="pull-left" href="#">
						<img class="media-object" src={$datosProductos.imagen} alt="Foto del producto">
					</a>
				</div>

	    		<span class="descripcion_producto" >{$datosProductos.descripcion}	</span>
	    		<span class = "precio">$ {$datosProductos.precio} </span>
	    		<br>
	    		<br>
	    	</div> 
	  	</div>
	</div>
{/foreach}
	<br>
	<br>
	<input type = "submit" class="btn btn-default" value="Finalizar Compra"/>
	</form>
</section>


{include file="footer.tpl"}