@extends('layouts.app')

@section('content')
    
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <button data-toggle="modal"  data-target="#productos_crear" class="btn btn-info btn-sm col-1 ms-2">Crear</button>
      <br><br>
      <h3>LISTA DE PRODUCTOS</h3>
      <br>
      <div class="table-responsive">
        <table class="table">
          <thead class="bg-dark text-white">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Precio</th>
              <th scope="col">Inventario</th>
              <th scope="col"># de categorias</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($productos as $producto)
            <tr class="">
            <td scope="row">{{$producto->id}}</td>
            <td scope="row">{{$producto->nombre}}</td>
            <td scope="row">{{$producto->descripcion}}</td>
            <td scope="row">{{$producto->precio}}</td>
            <td scope="row">{{$producto->inventario}}</td>
            <td scope="row">{{$producto->categorias()->count()}}</td>
            <td class="d-flex flex-row gap-2">
              <form action="{{route("productos.destroy", $producto->id)}}">
                <button type="submit" class="btn btn-info btn-sm" >Eliminar</button>
              </form>
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#producto_{{$producto->id}}">Editar</button>
            </td>
        </tr>
        
  @include("productos.partials.info", ["producto" => $producto])
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  @include("productos.partials.create")
        
@endsection