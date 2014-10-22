{include file="header_nav.tpl" title=foo }

<section> 
    <h1 class = "text-center">  Contacto    </h1>
    <form role="form">

          <div class="form-group">
              <label for="E-mail"><span class="textform">Email</span></label>
                  <input type="email" class="form-control" id="E-Mail"
                     placeholder="Introduce tu email">
          </div>

          <div class="form-group">
              <label for="Mensaje"><span class="textform">Mensaje</span></label>
              <input type="text" class="form-control" id="Mensaje" 
                     placeholder="Introduzca su mensaje">
          </div>

        <button type="submit" class="btn btn-default">Enviar Mensaje &nbsp <span class="glyphicon glyphicon-send"></span> </button>
  </form>
</section>

{include file="footer.tpl"}