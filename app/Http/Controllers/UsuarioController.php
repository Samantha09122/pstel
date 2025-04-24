<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Importar el modelo User
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    // Este método maneja el registro de usuario
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'profile_picture' => 'nullable|image|max:2048', // Validación de la imagen
        ]);

        // Almacenamos la imagen de perfil si existe
        $profilePath = null;
        if ($request->hasFile('profile_picture')) {
            $profilePath = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        // Crear el nuevo usuario en la base de datos
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Encriptar la contraseña
            'profile_picture' => $profilePath, // Guardar la ruta de la imagen si existe
        ]);

        // Redirigir de vuelta con un mensaje de éxito
        return redirect()->back()->with('success', '¡Usuario registrado correctamente!');
    }
}
