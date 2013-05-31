<div class="row-fluid">
   <div class="span12 offset2">
  <h2 class="offset2">Agregar producto</h2>
    <?= form_open('usuario-inventario/productos/agregarProductos', 'class="form-horizontal"'); ?>
      <div class="control-group">
        <label class="control-label" for="nombre">Nombre producto:</label>
        <div class="controls">
         <input style="height:30px" type="text" id="nombre" name="nombre" placeholder="Nombre">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="presentacion">Presentacion:</label>
        <div class="controls">
          <input style="height:30px" type="text" id="presentacion" name="presentacion" placeholder="Presentacion gr">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="precioFabrica">Precio fabrica:</label>
        <div class="controls">
          <input style="height:30px" type="text" id="precioFabrica" name="precioFabrica" placeholder="Precio fabrica">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="precioPublico">Precio publico:</label>
        <div class="controls">
          <input style="height:30px" type="text" id="precioPublico" name="precioPublico" placeholder="Presentacion gr">
        </div>
      </div>
       <div class="control-group">
        <label class="control-label" for="cantidad">Cantidad:</label>
        <div class="controls">
          <input style="height:30px" type="text" id="cantidad" name="cantidad" placeholder="Cantidad">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="fechaCaducidad">Fecha caducidad:</label>
        <div class="controls">
          <input style="height:30px" type="date" id="fechaCaducidad" name="fechaCaducidad" value="<?=date('Y-m-d')?>"/>  
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn btn-primary">Guardar</button>
          <button type="reset" class="btn">Limpiar</button>
        </div>
      </div>
    <?= form_close(); ?>
   </div>
 </div>


