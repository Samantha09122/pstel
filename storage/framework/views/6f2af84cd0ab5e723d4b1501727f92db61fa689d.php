

<?php $__env->startSection('content'); ?>

<!-- Contacto (Vende tu juguete) -->
<section class="page-section py-5 mt-5" id="contact">
    <div class="container text-center">
        <h2 class="mt-0">¿Tienes un juguete para vender?</h2>
        <hr class="divider" />
        <p class="lead">Pon tu juguete a la venta con nosotros y llega a más compradores.</p>
        
        <!-- Formulario centrado -->
        <form action="<?php echo e(route('nuevoProducto.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <!-- Modelo del juguete -->
            <div class="mb-3">
                <label class="form-label">Modelo del Juguete</label>
                <input type="text" name="modelo" class="form-control" required>
            </div>
            
            <!-- Nombre del juguete -->
            <div class="mb-3">
                <label class="form-label">Nombre del Juguete</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            
            <!-- Descripción del juguete -->
            <div class="mb-3">
                <label class="form-label">Descripción del Juguete</label>
                <textarea name="descripcion" class="form-control" rows="4" required></textarea>
            </div>
            
            <!-- Precio del juguete -->
            <div class="mb-3">
                <label class="form-label">Precio del Juguete</label>
                <input type="number" name="precio" step="0.01" class="form-control" required>
            </div>
            
            <!-- Stock del juguete -->
            <div class="mb-3">
                <label class="form-label">Stock del Juguete</label>
                <input type="number" name="stock" class="form-control" required>
            </div>
            
            <!-- Imagen del juguete -->
            <div class="mb-3">
                <label class="form-label">Imagen del Juguete</label>
                <input type="file" name="foto" class="form-control" accept="image/*">
            </div>
            
            <button type="submit" class="btn btn-primary w-100">Enviar</button>
        </form>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.Template.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\proyecto501\resources\views/nuevoProducto.blade.php ENDPATH**/ ?>