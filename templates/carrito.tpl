	<h1 class = "text-center">	Mi Carrito		</h1>
		<table class="table">	
			<thead>
				<tr>
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
						Precio Unitario
					</th>


				</tr>
			</thead>
			<tbody>
			{foreach $arrProductos as $datosProductos}
				<tr>
					<td>{$datosProductos.nombre_tipo}	</td>
					<td>{$datosProductos.nombre_marca}
					</td>
					<td>{$datosProductos.cantidad}
					</td>
					<td> $ {$datosProductos.precio}
					</td>
				</tr>
			{/foreach}
			</tbody>
		</table>

	<br>
	<br>
	<a href="index.php?action=ConfirmarCarrito">
		<input type = "submit" 
			   class="btn btn-default"
			   value="Finalizar Compra"/>
	</a>
{include file="footer.tpl"}