
  
  <h1 class = "text-center">   Agregar Productos  </h1>

  <form class = "text-center" role="form" 
        action="index.php?action=dataLogin" method="POST">

    <div class="form-group">
      <label for="descripcion"> <span class="textform"> Descripcion del Producto</span></label>
      <input name ="descripcion" 
             type="text" 
             class="form-control"
             id="descripcion"
             placeholder="Introduce la descripcion del producto">
    </div>

    <div class="form-group">
      <label for="talle"> <span class="textform"> Talle</span></label>
      <input name ="talle" 
             type="text"
             class="form-control"
             id="talle"
             placeholder="Introduce el talle del producto">
    </div>

    <div class="form-group">
      <label for="precio"> <span class="textform"> Precio</span></label>
      <input name ="precio" 
             type="text"
             class="form-control"
             id="precio"
             placeholder="Introduce el precio del producto">
    </div>

    <button type="submit" class="btn btn-default">Subir Producto &nbsp <span class="glyphicon glyphicon-send"></span></button>
  </form>
{include file="footer.tpl"}