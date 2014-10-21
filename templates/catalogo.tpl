{include file="header_nav.tpl" title=foo }
	<!-- Hacer funciones JS que dado un tipo retornen las marcas, y dado una marca retornen todos los tipos -->

	<script>		</script>

		<section> 
			<h1 class = "text-center">	Catalogo		</h1>
			
			<br>
			<br>

		<div id= "cuerpo">
			<form id ="form_buscar" action="index.php" >
			<input type="hidden" name="action" value="catalogo"> 
			<!--	SOLUCION CASERA COMO DULCE DE LECHE	 -->		
				<label for="tipo"><span class="textform">Tipo </span> </label>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<select form="form_buscar" name="tipo" onchange ="cambiotipo();" >
						<option value="-1" > Todos  </option>
						<!--	Le llegan los datos asignados desde la view	-->
						{foreach $tipos as $datostipo}
							<option value="{$datostipo.idtipo}">
							{$datostipo.nombre} </option>
						{/foreach}
					</select>
			
				<br>
				<br>

				<label for="marca"><span class="textform">Marca</span> </label>
				&nbsp&nbsp&nbsp	&nbsp
					<select form="form_buscar" name="marca">
						<option value="-1" > Todos  </option>
						{foreach $marcas as $datosmarcas}
							<option value="{$datosmarcas.idmarca}">
								{$datosmarcas.nombre} </option>
						{/foreach}
					</select>
			<br>
			<br>
			<input type = "submit" class="btn btn-default" value="Buscar"/>
			</form>
			<script src= "./js/ajax.js">	</script>
		</div>
		<br>
		</section>
		<br>
		<br>
		<div id = "resultado_busqueda">
			{include file="resultado_busqueda.tpl"}	
		</div>

{include file="footer.tpl"}