<!-- Modal 2-->
<form action="{{route("categorias.update", $categoria)}}"  class="col-4" enctype="multipart/form-data">
<div class="modal fade" id="categoria_{{$categoria->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar categoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Identificador</label>
                    <input type="text" class="form-control"  value="{{$categoria->id}}" readonly>
                </div>
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" name="nombre" value="{{$categoria->nombre}}" placeholder="Ingresa tu nombre">
                </div>
                <div class="form-group">
                  <label for="descripcion">Descripción</label>
                  <textarea class="form-control" name="descripcion" rows="3" placeholder="Ingresa una descripción">{{$categoria->descripcion}}</textarea>
                </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" href="{{route("categorias.update", $categoria->id)}}">Guardar cambio</button>
        </div>
      </div>
    </div>
  </div>
</form>