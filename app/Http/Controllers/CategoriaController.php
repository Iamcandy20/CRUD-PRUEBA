<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\productos;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact("categorias"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Categoria::create([
            'nombre' => $request->get("nombre"),
            'descripcion' => $request->get("descripcion"),
        ]);
        return redirect("categorias");
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $categoria)
    {

        Categoria::where('id', $categoria)->update([
            'nombre' => $request->get('nombre'),
            'descripcion' => $request->get('descripcion')
        ]);

        return redirect()->route("categorias.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        Categoria::where('id', $categoria->id)->delete();
        return redirect()->route('categorias.index');
    }
}
