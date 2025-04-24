
<?php $__env->startSection('content'); ?>
<!-- Masthead-->
<header class="masthead bg-dark text-white text-center d-flex align-items-center justify-content-center" style="min-height: 60vh;">
    <div class="container">
        <h2 class="font-weight-bold display-4">🎂¡Bienvenido a un mundo de dulzura!🍰</h2> <!-- Cambié display-6 por display-4 para un tamaño de letra más grande -->
        <hr class="divider" />
        <p class="lead fs-2 font-weight-bold">En Strawberry Whimsy, cada pastel cuenta una historia y cada bocado es pura felicidad. Horneamos con pasión para endulzar tus días con sabores irresistibles y momentos inolvidables.</p> <!-- Cambié fs-5 por fs-2 para aumentar el tamaño -->
         <!--  <a class="btn btn-lg font-weight-bold" href="#about" style="background-color: #dba0bd; border-color: #000000; border-width: 3px; color: white;">
            Ver más
          </a>-->
           <!-- Cambié btn-md por btn-lg para hacer el botón más grande -->
    </div>
</header>


<!-- Portafolio de Juguetes -->
<section class="page-section text-white text-center py-5" id="portfolio" style="background-color: #d294c9;">
    <div class="container">
        <h2 class="mt-0 font-weight-bold">¿Buscas un dulce que te haga sonreír?</h2>
        <hr class="divider-light" />
        <p class="lead font-weight-bold">
            Explora nuestra deliciosa colección de pasteles, postres y golosinas. ¡Seguro encontrarás el bocado perfecto que te hará recordar lo mejor de la vida!  
            Quizás un pastel que te sorprenda o un dulce que nunca imaginaste querer, ¡pero que no podrás dejar de disfrutar!
        </p>
        <a class="btn btn-lg font-weight-bold" href="<?php echo e(url('portafolio')); ?>" style="background-color: #f8c8dc; border-color: #121011; border-width: 3px; color: #000;">
            ¡Descubre nuestros deliciosos pasteles!
        </a>
        

    </div>
</section>


<!-- Call to Action (Compra ahora) -->
<head>
    <!-- Agregar la fuente de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<section class="page-section text-white text-center py-5" style="background-color: #f8c8e0; border-radius: 10px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); font-family: 'Poppins', sans-serif;">
    <div class="container">
        <h2 class="mb-4 font-weight-bold">¡Únete a nuestra comunidad de amantes de los postres!</h2>
        <p class="lead fs-4">Regístrate ahora para disfrutar de nuestras deliciosas galletas y gelatinas exclusivas.</p>
        <a class="btn btn-lg font-weight-bold" href="<?php echo e(url('nuevoProducto')); ?>" style="background-color: #e59ce7; border-color: #9b13a5; border-width: 3px; color: white;">
            Registrate ahora
        </a>
    </div>
</section>







<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.Template.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\XAMPP\htdocs\laravel\proyecto501\resources\views/index.blade.php ENDPATH**/ ?>