@extends("layouts.app")
@section("content")
<form method="POST" action="{{route("categorias.store")}}" class="col-4">
    @csrf
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre">
    </div>
    <div class="form-group">
      <label for="descripcion">Descripción</label>
      <textarea class="form-control" name="descripcion" rows="3" placeholder="Ingresa una descripción"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
@endsection