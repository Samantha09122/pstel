
<?php $__env->startSection('content'); ?>
<!-- Masthead-->
<header class="masthead bg-dark text-white text-center d-flex align-items-center justify-content-center" style="min-height: 60vh;">
    <div class="container">
        <h2 class="font-weight-bold display-4">Bienvenido al Mercadito 🍓</h2> <!-- Cambié display-6 por display-4 para un tamaño de letra más grande -->
        <hr class="divider" />
        <p class="lead fs-2 font-weight-bold">Compra y vende juguetes de manera fácil y rápida.</p> <!-- Cambié fs-5 por fs-2 para aumentar el tamaño -->
        <a class="btn btn-primary btn-lg font-weight-bold" href="#about">Ver más</a> <!-- Cambié btn-md por btn-lg para hacer el botón más grande -->
    </div>
</header>


<!-- Portafolio de Juguetes -->
<section class="page-section bg-primary text-white text-center py-5" id="portfolio">
    <div class="container">
        <h2 class="mt-0 font-weight-bold">¿Extrañas algún juguete de tu infancia?</h2>
        <hr class="divider-light" />
        <p class="lead font-weight-bold">
            Explora nuestra amplia colección de juguetes, donde seguro encontrarás ese juguete que tanto deseas,<br>
            ¡O quizás uno que ni sabías que querías!
        </p>
        <a class="btn btn-light btn-lg font-weight-bold" href="<?php echo e(url('portafolio')); ?>">Ver nuestra colección de juguetes</a>
    </div>
</section>

<!-- Call to Action (Compra ahora) -->
<section class="page-section bg-dark text-white text-center py-5">
    <div class="container">
        <h2 class="mb-4 font-weight-bold">¡Compra ahora y disfruta de los mejores juguetes!</h2>
        <p class="lead fs-4">¿Tienes un juguete antiguo que ya no usas? ¡Es el momento perfecto para compartirlo con otros! Añade tus productos y deja que otros descubran ese juguete único que solo tú tienes.</p>
        <a class="btn btn-light btn-lg font-weight-bold" href="<?php echo e(url('nuevoProducto')); ?>">Agregar un nuevo juguete</a>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.Template.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\proyecto501\resources\views/index.blade.php ENDPATH**/ ?>