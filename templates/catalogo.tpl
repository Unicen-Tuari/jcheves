{include file="header_nav.tpl" title=foo }
	<!-- Hacer funciones JS que dado un tipo retornen las marcas, y dado una marca retornen todos los tipos -->

	<script>		</script>

		<section> 
			<h1 class = "text-center">	Catalogo		</h1>

			<form action = "catalogo.php" id ="form_buscar" >		
				<label for="tipo"><span class="textform">Tipo </span> </label>
					<select form="form_buscar" name="tipo" onchange ="cambiotipo();">
						<option value="-1" > Todos  </option>
						<!--	Le llegan los datos asignados desde la view	-->
						{foreach $tipos as $datostipo}
							<option value="{$datostipo.idtipo}">
							{$datostipo.nombre} </option>
						{/foreach}
					</select>
			
				<br>

				<label for="marca"><span class="textform">Marca</span> </label>
					<select form="form_buscar" name="marca">
						<option value="-1" > Todos  </option>
						{foreach $marcas as $datosmarcas}
							<option value="{$datosmarcas.idmarca}">
								{$datosmarcas.nombre} </option>
						{/foreach}
					</select>

					<input type = "submit" class="btn btn-default" value="Buscar"/>

			</form>
		<br>
		</section>

		<div id= "cuerpo">

		</div>
{include file="footer.tpl"}