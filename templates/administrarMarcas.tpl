<h1 class = "text-center">	Panel de Administracion de Marcas		</h1>
		<table class="table">	
			<thead>
				<tr>
					<th>
						Id
					</th>
					<th>
						Nombre
					</th>
					<th>
						
					</th>
					<th>
						
					</th>


				</tr>
			</thead>
			<tbody>
			{foreach $arrMarcas as $datosMarcas}
				<tr>
					<td>{$datosMarcas.idmarca}
					</td>

					<td>{$datosMarcas.nombre}
					</td>

					<td><input type = "submit"
							   class="btn btn-default" 
							   value="Borrar"
							   onClick= "location.href='index.php?action=borrarMarca&idmarca={$datosMarcas.idmarca}'"/>
					</td>
			{/foreach}
			</tbody>
		</table>

	<br>
	<br>
	{include file="footer.tpl"}