{include file="header_nav.tpl" title=foo }
	

		<section> 
			<h1 class = "text-center">	Catalogo		</h1>

			<form action = "catalogo.php" id ="form_buscar" >		
				<label for="tipo"><span class="textform">Tipo </span> </label>
					<select form="form_buscar" name="tipo">
						<option value="0" > Todos  </option>
						<!-- Aca levantamos los datos del fetch de la base para los TIPOS-->
						<?php
							while($r = $q->fetch()) { ?>

							   <option value="<?php echo $r["id_tipo"];?>" > <?php echo $r["nombre"];?> </option>   
   
 						<?php } ?> <!-- Cierra el while del PHP  -->
					</select>
			
		<br>

				<label for="marca"><span class="textform">Marca</span> </label>
					<select form="form_buscar" name="marca">
						<option value="0" > Todos  </option>
						<!-- Aca levantamos los datos del fetch de la base para los MARCAS-->
						<?php
							while($r = $q->fetch()) { ?>

				   			<option value="<?php echo $r["id_marca"];?>" > <?php echo $r["nombre"];?> </option>   
				   
						<?php }	?>

					</select>

					<input type = "submit" class="btn btn-default" value="Buscar"/>

			</form>
		<br>
		</section>

		<div id= "cuerpo">

		</div>
{include file="footer.tpl"}