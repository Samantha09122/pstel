<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoCarrito extends Model
{
    use HasFactory;

    protected $table = 'productos_carrito';

    // Campos que se pueden llenar de forma masiva
    protected $fillable = [
        'carrito_id',
        'nombre',
        'precio',
        'cantidad',
        'imagen',
    ];

    // Relación con carrito
    public function carrito()
    {
        return $this->belongsTo(Carrito::class);
    }
}
