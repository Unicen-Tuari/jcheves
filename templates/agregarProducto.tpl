
  
  <h1 class = "text-center">   Agregar Productos  </h1>

  <form class = "text-center" 
        role="form" 
        action="index.php?action=agregarProducto" 
        method="POST">

       <div class="form-group">
      <label for="tipo"> <span class="textform"> Tipo</span></label>
        <input name ="tipo" 
               type="text" 
               class="form-control"
               id="tipo"
               placeholder="Introduce el Tipo del producto capitalizada">
      </div>

     <div class="form-group">
      <label for="marca"> <span class="textform"> Marca</span></label>
        <input name ="marca" 
               type="text" 
               class="form-control"
               id="marca"
               placeholder="Introduce la Marca del producto capitalizada">
    </div>

    <div class="form-group">
      <label for="descripcion"> <span class="textform"> Descripcion del Producto</span></label>
      <input name ="descripcion" 
             type="text" 
             class="form-control"
             id="descripcion"
             placeholder="Introduce la descripcion del producto">
    </div>

    <div class="form-group">
      <label for="precio"> <span class="textform"> Precio</span></label>
      <input name ="precio" 
             type="number"
             class="form-control"
             id="precio"
             placeholder="Introduce el precio del producto">
    </div>

    <div class="form-group">
      <label for="Imagen"> <span class="textform"> Imagen</span></label>
      <input name ="imagen" 
             type="file"
             id="imagen">
    </div>



    <button type="submit" class="btn btn-default ">Subir Producto &nbsp <span class="glyphicon glyphicon-send"></span></button>
  </form>
{include file="footer.tpl"}