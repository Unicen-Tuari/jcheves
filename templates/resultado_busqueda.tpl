
{foreach $busqueda as $datosbusqueda}
	<div class="panel panel-primary">
		<div class="media">
	  		<div class="media-body">
	  			
				<div class="panel panel-success">
					<h4 class="media-heading">{$datosbusqueda.nombre_tipo} {$datosbusqueda.nombre_marca}
					</h4>
					<a class="pull-left" href="#">
						<img class="media-object" src={$datosbusqueda.imagen} alt="Foto del producto">
					</a>
				</div>

	    		<span class="descripcion_producto" >{$datosbusqueda.descripcion}	</span>
	    		<span class = "precio">$ {$datosbusqueda.precio} </span>
	    		<br>
	    		<br>
	    		<button class="btn btn-default boton_compra"  
	    				value="Comprar"
	    				onclick="clickComprar({$datosbusqueda.id})"> Comprar
	    		</button>
	    	</div> 
	  	</div>
	</div>
{/foreach}