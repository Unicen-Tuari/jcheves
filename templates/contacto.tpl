

<section> 
    <h1 class = "text-center">  Contacto    </h1>
    <form role="form"
          method="POST"
          enctype="multipart/form-data">

      <input  type="hidden"
              name="action"
              value="enviarMailContacto"
                >

          <div class="form-group">
              <label
              for="E-mail">
                <span class="textform">Email</span></label>
                  <input type="email" 
                         class="form-control"
                         id="E-Mail"
                         placeholder="Introduce tu email"
                         name="email">

          </div>

          <div class="form-group">
              <label for="Mensaje"><span class="textform">Mensaje</span></label>
              <textarea   type="text"
                          rows="4"
                          cols="50"
                          class="form-control"
                          id="Mensaje" 
                          placeholder="Introduzca su mensaje"
                          name="mensaje">
              </textarea>
          </div>

        <button type="submit" 
                class="btn btn-default"
                >Enviar Mensaje &nbsp <span class="glyphicon glyphicon-send"></span> </button>
        <input type="hidden" name="phpmailer">

  </form>
</section>

{include file="footer.tpl"}