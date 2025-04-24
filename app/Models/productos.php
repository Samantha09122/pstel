<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;

    protected $primaryKey = 'modelo'; 
    protected $keyType = 'string'; 

    protected $fillable = ['modelo', 'nombre', 'descripcion', 'precio', 'stock', 'image', 'estatus'];

    protected $attributes = ['image' => 'public/invitado.jpg', 'estatus' => 1];
}
