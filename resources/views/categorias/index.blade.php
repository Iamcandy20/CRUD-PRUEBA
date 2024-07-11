@extends("layouts.app")
@section("content")

<div class="row">


  
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <button data-toggle="modal" data-target="#categoria_crear" class="btn btn-info btn-sm col-1 ms-2">Crear</button>
      <br><br>
      <h3>LISTA DE CATEGORIAS</h3>
      <br>
      <div class="table-responsive">
        <table class="table">
          <thead class="bg-dark text-white">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Descripción</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categorias as $categoria)
            <tr class="">
            <td scope="row">{{$categoria->id}}</td>
            <td scope="row">{{$categoria->nombre}}</td>
            <td scope="row">{{$categoria->descripcion}}</td>
            <td class="d-flex flex-row gap-2">
              <form action="{{route("categorias.destroy", $categoria->id)}}">
                <button type="submit" class="btn btn-danger btn-sm" >Eliminar</button>
              </form>
              <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#categoria_{{$categoria->id}}">Editar</button>
        </tr>
        @include("categorias.partial.info", ["categoria" => $categoria])

            @endforeach
          </tbody>
        </table>
      </div>

    </div>
  </div>
  @include("categorias.partial.create")
@endsection