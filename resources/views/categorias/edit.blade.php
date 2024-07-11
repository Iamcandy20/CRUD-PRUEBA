@extends("layouts.app")
@section("content")
<form action="{{route("categorias.update", $categoria)}}"  class="col-4" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Identificador</label>
        <input type="text" class="form-control"  value="{{$categoria->id}}" readonly>
    </div>
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" name="nombre" value="{{$categoria->nombre}}" placeholder="Ingresa nombre">
    </div>
    <div class="form-group">
      <label for="descripcion">Descripción</label>
      <textarea class="form-control" name="descripcion" rows="3" placeholder="Ingresa una descripción">{{$categoria->descripcion}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>
@endsection