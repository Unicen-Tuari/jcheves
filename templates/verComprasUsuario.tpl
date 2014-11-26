<h1 class = "text-center">	Compras del usuario		</h1>
		<table class="table">	
			<thead>
				<tr>
					<th>
						Fecha de Compra
					</th>
					<th>
						Producto
					</th>
					<th>
						Marca
					</th>
					<th>
						Cantidad
					</th>
					<th>
						Precio
					</th>


				</tr>
			</thead>
			<tbody>
			{foreach $ComprasUsuario as $datosCompras}
				<tr>
					<td>
						{$datosCompras.FECHA}
					</td>

					<td>
						{$datosCompras.nombre_tipo}
					</td>

					<td>
						{$datosCompras.nombre_marca}
					</td>

					<td>
						{$datosCompras.cantidad}
					</td>

					<td>
						{$datosCompras.precio}
					</td>

				</tr>
			{/foreach}
			</tbody>
		</table>

	<br>
	<br>

	<input type = "submit" 
								class="btn btn-default" 
								value="Volver"
								onClick= "location.href='index.php?action=mostrarAdministrarUsuarios'"/>

	<br>
	<br>

	{include file="footer.tpl"}