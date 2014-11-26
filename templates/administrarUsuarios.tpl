<h1 class = "text-center">	Panel de Administracion de Usuarios		</h1>
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
			{foreach $arrUsuarios as $datosUsuarios}
				<tr>
					<td>{$datosUsuarios.idusuario}
					</td>

					<td>{$datosUsuarios.nombre}
					</td>

					<td><input type = "submit"
							   class="btn btn-default" 
							   value="Bloquear"
							   onClick= "location.href='index.php?action=bloquearUsuario&idusuario={$datosUsuarios.idusuario}'"/>
					</td>

					<td> <input type = "submit" 
								class="btn btn-default" 
								value="Desbloquear"
								onClick= "location.href='index.php?action=desbloquearUsuario&idusuario={$datosUsuarios.idusuario}'"/>
					</td>

					<td> <input type = "submit" 
								class="btn btn-default" 
								value="Ver Compras"
								onClick= "location.href='index.php?action=verComprasUsuario&idusuario={$datosUsuarios.idusuario}'"/>
					</td>
					<td> <input type = "submit" 
								class="btn btn-default" 
								value="Promover"
								onClick= "location.href='index.php?action=promoverUsuario&idusuario={$datosUsuarios.idusuario}'"/>
				</tr>
			{/foreach}
			</tbody>
		</table>

	<br>
	<br>
	{include file="footer.tpl"}