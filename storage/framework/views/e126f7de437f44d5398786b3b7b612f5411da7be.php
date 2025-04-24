

<?php $__env->startSection('content'); ?>

<!-- Carrito de Compras -->
<div class="container mt-4">
    <h2 class="text-center font-weight-bold">Carrito de Compras</h2>
    <hr class="divider-light" />

    <!-- Verifica si el carrito está vacío -->
    <div class="alert alert-info" role="alert" id="cart-empty-message" style="display:none;">
        No tienes productos en el carrito.
    </div>

    <!-- Productos del Carrito -->
    <div class="row" id="cart-items">
        <!-- Producto 1 -->
        <div class="col-md-4 mb-4" id="product1">
            <div class="card">
                <img class="card-img-top" src="assets/img/portfolio/thumbnails/toy1.jpg" alt="Juguete 1">
                <div class="card-body">
                    <h5 class="card-title">Nombre del Juguete 1</h5>
                    <p class="card-text">Descripción breve del juguete.</p>
                    <p class="font-weight-bold">Precio: $10</p>
                    <input type="number" value="1" class="form-control mb-2" id="quantity1">
                    <button class="btn btn-danger" onclick="removeFromCart('product1')">Eliminar</button>
                </div>
            </div>
        </div>

        <!-- Aquí puedes añadir más productos de la misma forma -->

    </div>

    <!-- Total del Carrito -->
    <div class="row">
        <div class="col-md-6 offset-md-6">
            <h4>Total: <span id="total-price">$10</span></h4>
            <a href="#" class="btn btn-primary btn-lg">Proceder a la Compra</a>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.Template.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\proyecto501\resources\views/carrito.blade.php ENDPATH**/ ?>