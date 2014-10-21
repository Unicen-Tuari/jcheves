<!--	PREGUNTAR DIEGO COMO HACER PARA QUE SEPARE LOS ITEMS POR SECCIONES
	PANTALONES
	BUZOS
	REMERAS
	ETC	
-->
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
	    		<button id="boton_compra" class="btn btn-default" value="Comprar"> Comprar
	    		</button>
	    	</div> 
	  	</div>
	</div>
{/foreach}