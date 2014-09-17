{include file="header_nav.tpl" title=foo }		
	<section class = "contacto">
      <form id="miForm" action="" method="get" onsubmit="validar(this)">
        <h1 class = "titulo">Contacto</h1>
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" >
        <br>
        <label for="telefono">Teléfono: </label>
        <input type="number" name="telefono" id="telefono" >
        <br>
        <label for="correo">e-mail: </label>
        <input type="email" name="correo" id="correo" >
        <br>
        <label for="mensaje">Mensaje: </label>
        <textarea id="mensaje" name="mensaje" placeholder="Escriba su mensaje"></textarea>
        <br>
        <input type="submit" value="enviar" onsubmit="return validar(this);">
      </form>
    </section>

{include file="footer.tpl"}