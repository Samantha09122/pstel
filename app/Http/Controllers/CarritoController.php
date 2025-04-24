<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function carro()
    {
        return view('carrito'); // Asegúrate de tener esta vista: resources/views/carrito.blade.php
    }
}
