<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3" id="mainNav" style="background-color: #343a40;">
    <div class="container px-4 px-lg-5">
        <!-- Logo e imagen al lado del texto -->
        <a class="navbar-brand d-flex align-items-center" href="#page-top">
        <img src="assets/img/logo.png" alt="Logo" style="height: 40px; margin-right: 10px;"> <!-- Aquí va la imagen -->
        <span style="color: white;">ToyStore</span> <!-- Aquí se cambia el color a blanco -->
        </a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#portfolio">Visión</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(url('portafolio')); ?>">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(url('nuevoProducto')); ?>">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(url('carrito')); ?>">Carrito</a></li>
            </ul>
        </div>
    </div>
</nav>

<?php /**PATH C:\xampp\htdocs\laravel\proyecto501\resources\views/Layouts/Zonas/nav.blade.php ENDPATH**/ ?>