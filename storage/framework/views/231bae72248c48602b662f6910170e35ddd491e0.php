

<?php $__env->startSection('content'); ?>

<!-- Registro de Usuario -->
<section class="page-section py-5 mt-5" id="registro">
    <div class="container text-center">
        <h2 class="mt-0">¿Quieres registrarte con nosotros?</h2>
        <hr class="divider" />
        <p class="lead">Crea una cuenta para empezar a disfrutar de nuestros servicios.</p>

        <!-- Mensajes de éxito / error -->
        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <!-- Formulario centrado -->
        <form action="<?php echo e(route('usuario.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.Template.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\XAMPP\htdocs\laravel\proyecto501\resources\views/nuevoProducto.blade.php ENDPATH**/ ?>