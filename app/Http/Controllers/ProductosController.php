<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    // Método para mostrar el formulario
    public function create()
    {
        return view('nuevoProducto');
    }

    // Método para guardar los datos del producto
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'modelo' => 'required|unique:productos',
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        // Manejo de imagen local si no se proporciona archivo
        $ruta = 'productos/default.jpg';
        if ($request->hasFile('foto')) {
            $ruta = $request->file('foto')->store('productos', 'public');
        }

        // Agregar la imagen al request antes de guardar
        $request->merge(['image' => $ruta]);

        // Guardar el producto en la base de datos
        productos::create($request->all());

        // Redirigir al formulario con un mensaje
        return redirect()->back()->with('info', 'Se registró la información exitosamente.');
    }
}
