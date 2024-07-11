@extends('layouts.app')
@section('content')
    <form method="POST" action="{{route("productos.store")}}" class="d-flex flex-column col-2 gap-2 w-full justify-center items-center">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nombre" type="text">
        </div>
        <div class="form-group">
            <label for="">Descripción</label>
            <textarea class="form-control" name="descripcion" type="text"></textarea>
        </div>
        <div class="form-group">
            <label for="">Precio</label>
            <input type="number" class="form-control" name="precio" type="text">
        </div>
        <div class="form-group">
            <label for="">Inventario</label>
            <input type="number" class="form-control" name="inventario" type="text">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-info">
        </div>
    </form>
@endsection