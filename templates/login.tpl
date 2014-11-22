	
  
  <h1 class = "text-center">   Bienvenido   </h1>

  <form class = "text-center" 
        role="form" 
        action="index.php?action=dataLogin"
        method="POST">

    <div class="form-group">
      <label for="username"> <span class="textform"> Nombre de Usuario</span></label>
      <input name ="username" type="text" class="form-control" id="username"
             placeholder="Introduce tu nombre de usuario">
    </div>

    <div class="form-group">
      <label for="pass"> <span class="textform"> Contraseña</span></label>
      <input name="password" 
             type="password"
             class="form-control"
             id="pass" 
             placeholder="Introduce tu contraseña">
    </div>

    <button type="submit" class="btn btn-default">Log in &nbsp <span class="glyphicon glyphicon-send"></span></button>
  </form>
{include file="footer.tpl"}