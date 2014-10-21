{foreach $busqueda as $datosbusqueda}
	<div class="media">
  	 	<a class="pull-left" href="#">
    		<img class="media-object" src={$datosbusqueda.imagen} alt="Foto del producto">
  		</a><!--  src={$datosbusqueda.imagen}  para ver el texto, cambiar el atributo overflow a visible -->
  		
  		<div class="media-body">
    		<h4 class="media-heading">{$datosbusqueda.nombre_tipo} {$datosbusqueda.nombre_marca}</h4>
    		<p>{$datosbusqueda.descripcion}	</p> 
  		</div>
	</div>
{/foreach}



  