
<h1 class = "text-center">  Unase a nosotros    </h1>
  <form role="form"
        action="index.php?action=registrarse"
        method="POST">

       
        
        


    <div class="form-group">
      <label for="username"> <span class="textform">Nombre de Usuario</label>
      <input name="username"
             type="text" 
             class="form-control" 
             id="username"
             placeholder="Elije tu nombre de usuario">
    </div>

    <div class="form-group">
      <label for="email"> <span class="textform">Email</span> </label>
      <input name="email"
             type="email" 
             class="form-control" 
             id="email"
             placeholder="Introduce tu email">
    </div>

    <div class="form-group">
      <label for="password"><span class="textform">Contraseña</span></label>
      <input name="password"
             type="password" 
             class="form-control"
             id="password" 
             placeholder="Elije tu contraseña">
    </div>

    <div class="form-group">
      <label for="verifpassword"><span class="textform">Repita su contraseña</span></label>
      <input name="verifpassword"
             type="password"
             class="form-control"
             id="verifpassword" 
             placeholder="Repita la contraseña">
    </div>

    <button type="submit" class="btn btn-default">Registrarse &nbsp <span class="glyphicon glyphicon-send"></span> </button>
  </form>
{include file="footer.tpl"}