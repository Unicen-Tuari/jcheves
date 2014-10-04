{include file="header_nav.tpl" title=foo }		
  
  <h1 class = "text-center">   Bienvenido   </h1>

  <form class = "text-center" role="form">
    <div class="form-group">
      <label for="username"> <span class="textform"> Nombre de Usuario</span></label>
      <input type="text" class="form-control" id="username"
             placeholder="Introduce tu nombre de usuario">
    </div>
    <div class="form-group">
      <label for="pass"> <span class="textform"> Contraseña</span></label>
      <input type="password" class="form-control" id="pass" 
             placeholder="Introduce tu contraseña">
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox"> Recordar mi nombre de usuario y contraseña
      </label>
    </div>
    <button type="submit" class="btn btn-default">Log in &nbsp <span class="glyphicon glyphicon-send"></span></button>
  </form>
{include file="footer.tpl"}