<h1 class = "text-center">	Panel de Administracion de Productos		</h1>
		<table class="table">	
			<thead>
				<tr>
					<th>
						Id
					</th>
					<th>
						Tipo y Marca
					</th>
					<th>
						
					</th>
					<th>
						
					</th>


				</tr>
			</thead>
			<tbody>
			{foreach $arrProductos as $datosProductos}
				<tr>
					<td>{$datosProductos.id}
					</td>

					<td>{$datosProductos.tipo} {$datosProductos.marca}
					</td>

					<td><input type = "submit"
							   class="btn btn-default" 
							   value="Borrar"
							   onClick= "location.href='index.php?action=borrarProducto&idropa={$datosProductos.id}'"/>
					</td>
			{/foreach}
			</tbody>
		</table>

	<br>
	<br>
	{include file="footer.tpl"}