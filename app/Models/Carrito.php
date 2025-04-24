<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $table = 'carritos';

    // Si quieres permitir asignación masiva
    protected $fillable = [
        'usuario_id',
    ];

    // Relación con productos del carrito
    public function productos()
    {
        return $this->hasMany(ProductoCarrito::class);
    }

    // Relación con el usuario (opcional)
    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
