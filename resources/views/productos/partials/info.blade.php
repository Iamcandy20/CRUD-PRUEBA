<!-- Modal 2-->
<form action="{{route("productos.update", $producto->id)}}"  class="col-4" enctype="multipart/form-data">
<div class="modal fade" id="producto_{{$producto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Categoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" name="nombre"  placeholder="Ingresa nombre de producto" value="{{$producto->nombre}}">
                </div>
                <div class="form-group">
                  <label for="descripcion">Descripción</label>
                  <textarea class="form-control" name="descripcion" rows="3" placeholder="Ingresa una descripción">{{$producto->descripcion}}</textarea>
                </div>
                <div class="form-group">
                  <label for="descripcion">precio</label>
                  <input type="number" class="form-control" name="precio" rows="3" placeholder="Ingresa el precio" value="{{$producto->precio}}">
                </div>
                <div class="form-group">
                  <label for="descripcion">Inventario</label>
                  <input type="number" class="form-control" name="inventario" rows="3" placeholder="Ingresa cantidad en stock" value="{{$producto->inventario}}">
                </div>
                <div class="form-group">
                  <label for="">Categoria</label>
                  @foreach($categorias as $categoria)
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="categorias[]" @if(in_array($categoria->id, $producto->categorias->pluck('id')->toArray())) checked @endif value="{{$categoria->id}}" id="categoria_id_{{$categoria->id}}">
                    <label class="form-check-label" for="categoria_id_{{$categoria->id}}">
                      {{$categoria->nombre}}
                    </label>
                  </div>
                  @endforeach
                </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" >Guardar cambio</button>
        </div>
      </div>
    </div>
  </div>
</form>