<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class productos extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'precio', 'inventario'];

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'producto_categoria', 'id_producto', 'id_categoria' );
    }
}
