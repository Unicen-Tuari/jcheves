{include file="header_nav.tpl" title=foo }
<h1 class = "text-center">  Unase a nosotros    </h1>
  <form role="form">

    <div class="form-group">
      <label for="user"> <span class="textform">Nombre de Usuario</label>
      <input type="text" class="form-control" id="user"
             placeholder="Elije tu nombre de usuario">
    </div>

    <div class="form-group">
      <label for="email"> <span class="textform">Email</span> </label>
      <input type="email" class="form-control" id="email"
             placeholder="Introduce tu email">
    </div>
    <div class="form-group">
      <label for="pass"><span class="textform">Contraseña</span></label>
      <input type="password" class="form-control" id="pass" 
             placeholder="Elije tu contraseña">
    </div>

    <div class="form-group">
      <label for="pass_match"><span class="textform">Repita su contraseña</span></label>
      <input type="password" class="form-control" id="pass_match" 
             placeholder="Repita la contraseña">
    </div>

    <div class="checkbox">
      <label>
        <input type="checkbox"> Recibir actualizaciones de catalogo al e-mail
      </label>
    </div>
    <button type="submit" class="btn btn-default">Registrarse &nbsp <span class="glyphicon glyphicon-send"></span> </button>
  </form>
{include file="footer.tpl"}