<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos=productos::all();
        $categorias=Categoria::all();
        return view('productos.index',compact('productos', 'categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $producto = productos::create([
            'nombre' => $request->get('nombre'),
            'descripcion' => $request->get('descripcion'),
            'precio'  => $request->get('precio' ),
            'inventario' => $request->get('inventario')
        ]);

        $producto->categorias()->attach($request->get("categorias"));

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $producto)
    {
  
        $productoActual = productos::where('id', $producto)->update([
            'nombre' => $request->get('nombre'),
            'descripcion' => $request->get('descripcion'),
            'precio' => $request->get('precio'),
            'inventario' => $request->get('inventario'),
        ]);

        $productoActual = productos::find($producto);
        $productoActual->categorias()->sync($request->get("categorias"));
        return redirect()->route("productos.index");
    }

    /**a
     * Remove the specified resource from storage.
     */
    public function destroy($producto)
    {
        $productoActual = productos::where('id', $producto)->delete();
        return redirect()->route("productos.index");
    }
}
