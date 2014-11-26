<h1 class = "text-center">	Panel de Administracion de Tipos		</h1>
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
			{foreach $arrTipos as $datosTipos}
				<tr>
					<td>{$datosTipos.idtipo}
					</td>

					<td>{$datosTipos.nombre}
					</td>

					<td><input type = "submit"
							   class="btn btn-default" 
							   value="Borrar"
							   onClick= "location.href='index.php?action=borrarTipo&idtipo={$datosTipos.idtipo}'"/>
					</td>
			{/foreach}
			</tbody>
		</table>

	<br>
	<br>
	{include file="footer.tpl"}