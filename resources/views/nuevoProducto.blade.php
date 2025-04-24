@extends('Layouts.Template.plantilla')

@section('content')

<!-- Registro de Usuario -->
<section class="page-section py-5 mt-5" id="registro">
    <div class="container text-center">
        <h2 class="mt-0">¿Quieres registrarte con nosotros?</h2>
        <hr class="divider" />
        <p class="lead">Crea una cuenta para empezar a disfrutar de nuestros servicios.</p>

        <!-- Mensajes de éxito / error -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulario centrado -->
        <form action="{{ route('usuario.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Nombre completo -->
            <div class="mb-3">
                <label class="form-label">Nombre Completo</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            
            <!-- Correo electrónico -->
            <div class="mb-3">
                <label class="form-label">Correo Electrónico</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            
            <!-- Contraseña -->
            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            
            <!-- Confirmar Contraseña -->
            <div class="mb-3">
                <label class="form-label">Confirmar Contraseña</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>
            
            <!-- Imagen de perfil (opcional) -->
            <div class="mb-3">
                <label class="form-label">Imagen de Perfil</label>
                <input type="file" name="profile_picture" class="form-control" accept="image/*">
            </div>
            
            <!-- Botón de registro -->
            <button type="submit" class="btn" style="background-color: #e0c3e6; border: 2px solid black; color: white; padding: 8px 20px; border-radius: 20px; font-size: 14px;">
                Registrarse
            </button>
        </form>
    </div>
</section>

@endsection
